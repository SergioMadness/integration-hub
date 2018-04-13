<?php namespace App\Drivers\PartnerBox\Listeners;

use App\Models\Lead;
use App\Models\Request;
use App\Events\NewContactPack;
use App\Events\RequestResponse;
use App\Drivers\PartnerBox\DriverProvider;
use App\Drivers\PartnerBox\Interfaces\PartnerBoxService;

/**
 * New contact event handler
 * @package App\Drivers\PartnerBox\Listeners
 */
class NewContactPackListener
{
    /**
     * @var PartnerBoxService
     */
    private $crmService;

    public function __construct(PartnerBoxService $crmService)
    {
        $this->setCrmService($crmService);
    }

    /**
     * handle event
     *
     * @param NewContactPack $event
     */
    public function handle(NewContactPack $event): void
    {
        $service = $this->getCrmService();
        foreach ($event->contactsData as $lead) {
            /** @var Lead $lead */
            if ($lead->needIToProcess(DriverProvider::DRIVER_NAME)) {
                try {
                    $service->sendContact($lead->body);
                    $message = $service->getMessages();
                    $status = $service->isSuccess() ? Request::STATUS_SUCCESS : Request::STATUS_FAILED;
                } catch (\Exception $ex) {
                    $message = $ex->getMessage();
                    $status = Request::STATUS_RETRY;
                }
                event(new RequestResponse($lead->id, $message, DriverProvider::DRIVER_NAME, $status));
            }
        }
    }

    /**
     * Get CRM service
     *
     * @return PartnerBoxService
     */
    public function getCrmService(): PartnerBoxService
    {
        return $this->crmService;
    }

    /**
     * Set CRM service
     *
     * @param PartnerBoxService $crmService
     *
     * @return $this
     */
    public function setCrmService(PartnerBoxService $crmService): self
    {
        $this->crmService = $crmService;

        return $this;
    }


}