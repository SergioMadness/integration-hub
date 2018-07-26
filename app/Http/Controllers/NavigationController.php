<?php namespace App\Http\Controllers;

use App\Interfaces\Services\Navigation;

/**
 * Controller to get navigation
 * @package App\Http\Controllers
 */
class NavigationController extends Controller
{
    /**
     * Get navigation item list
     *
     * @param Navigation $navigationService
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Navigation $navigationService)
    {
        return $this->response(
            $navigationService->get()
        );
    }
}