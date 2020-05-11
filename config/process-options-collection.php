<?php

use professionalweb\IntegrationHub\IntegrationHubDB\Models\ProcessOptions;

return [
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-lead',
        'mapping'      => [
            'original.title'                        => 'TITLE',
            'original.name'                         => 'NAME',
            'original.last_name'                    => 'LAST_NAME',
            'original.date_of_birth'                => 'BIRTHDATE',
            'original.email'                        => 'EMAIL.0.VALUE',
            'original.phone'                        => 'PHONE.0.VALUE',
            'original.comment'                      => 'COMMENTS',
            'original.contact_id'                   => 'CLIENT_ID',
            'original.url'                          => ['WEB', 'UF_CRM_URL'],
            'original.products'                     => 'PRODUCTS',
            'original.utmSource'                    => 'UTM_SOURCE',
            'original.utmMedium'                    => 'UTM_MEDIUM',
            'original.utmCampaign'                  => 'UTM_CAMPAIGN',
            'original.utmContent'                   => 'UTM_CONTENT',
            'original.utmTerm'                      => 'UTM_TERM',
            'original.sourceId'                     => 'SOURCE_ID',
            'original.source_id'                    => 'SOURCE_ID',
            'original.source_description'           => 'SOURCE_DESCRIPTION',
            'original.partner_id'                   => 'SOURCE_ID',
            'bitrix-lead-default-value.SOURCE_ID'   => 'SOURCE_ID',
            'original.utm_source'                   => 'UTM_SOURCE',
            'original.utm_medium'                   => 'UTM_MEDIUM',
            'original.utm_campaign'                 => 'UTM_CAMPAIGN',
            'original.utm_content'                  => 'UTM_CONTENT',
            'original.utm_term'                     => 'UTM_TERM',
            'original.opportunity'                  => 'OPPORTUNITY',
            'original.country'                      => 'COUNTRY',
            'original.city'                         => 'CITY',
            'original.position'                     => 'POST',
            'original.company'                      => 'COMPANY_TITLE',
            'original.currency'                     => 'CURRENCY_ID',
            'original.cdo_cabinet_number'           => 'UF_CRM_CDO_PC',
            'bitrix-lead-distribution.status_id'    => 'STATUS_ID',
            'bitrix-set-assigner.assigned_by_id'    => 'ASSIGNED_BY_ID',
            'bitrix-check-duplicates.STATUS_ID'     => 'STATUS_ID',
            'bitrix-product-mapper.lead_product_id' => ['UF_CRM_PRODUCT_ID', 'PRODUCTS.0.id'],
//            'original.UF_LEAD_FB_COMPANY'           => 'UTM_MEDIUM',
//            'original.UF_LEAD_FB_ADS_NAME'          => 'UTM_CAMPAIGN',
//            'original.UF_LEAD_FB_ADS_GROUP'         => 'UTM_CONTENT',
            'original.education'                    => 'UF_CRM_EDUCATION',
            'original.cid'                          => 'UF_CRM_CLIENT_ID',
            'original.userId'                       => 'UF_CRM_GUID',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-lead'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-create-deal',
        'mapping'      => [
            'original.title'                                 => 'TITLE',
            'get-contact.value'                              => 'CONTACT_ID',
            'bitrix-find-contact.ID'                         => 'CONTACT_ID',
            'original.lead_id'                               => 'LEAD_ID',
            'original.opportunity'                           => ['OPPORTUNITY', 'PRODUCTS.0.price'],
            'original.products'                              => 'PRODUCTS',
            'original.utm_campaign'                          => 'UTM_CAMPAIGN',
            'original.utm_content'                           => 'UTM_CONTENT',
            'original.utm_medium'                            => 'UTM_MEDIUM',
            'original.utm_source'                            => 'UTM_SOURCE',
            'original.utm_term'                              => 'UTM_TERM',
            'bitrix-deal-default-value.UF_CRM_EDU_START'     => ['UF_CRM_EDU_START', 'UF_CRM_1554462148'],
            'bitrix-deal-default-value.UF_CRM_SPEC'          => 'UF_CRM_SPEC',
            'bitrix-deal-default-value.UF_CRM_SPEC_EDU_H'    => 'UF_CRM_SPEC_EDU_H',
            'bitrix-deal-default-value.UF_CRM_DATEPAYBEFORE' => 'UF_CRM_DATEPAYBEFORE',
            'bitrix-deal-default-value.STAGE_ID'             => 'STAGE_ID',
            'bitrix-product-mapper-deal.lead_product_id'     => ['PRODUCTS.0.id', 'UF_CRM_PRODUCT_ID'],
            'bitrix-deal-default-value.education_level'      => 'UF_CRM_5BE4A2CACF267',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-create-deal'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-invoice',
        'mapping'      => [
            'original.title'                                       => ['ORDER_TOPIC', 'PRODUCTS.0.PRODUCT_NAME'],
            'bitrix-create-deal.deal_id'                           => 'UF_DEAL_ID',
            'get-deal.value'                                       => 'UF_DEAL_ID',
            'get-contact.value'                                    => 'UF_CONTACT_ID',
            'bitrix-find-contact.ID'                               => 'UF_CONTACT_ID',
            'original.amount'                                      => 'PRODUCT_ROWS.0.price',
            'original.opportunity'                                 => 'PRODUCT_ROWS.0.price',
            'bitrix-invoice-default-value.STATUS_ID'               => 'STATUS_ID',
            'bitrix-invoice-default-value.UF_MYCOMPANY_ID'         => 'UF_MYCOMPANY_ID',
            'bitrix-invoice-default-value.PAY_SYSTEM_ID'           => 'PAY_SYSTEM_ID',
            'bitrix-invoice-default-value.PERSON_TYPE_ID'          => 'PERSON_TYPE_ID',
            'bitrix-invoice-default-value.PRODUCT_ROWS.0.QUANTITY' => 'PRODUCTS.0.QUANTITY',
            'bitrix-invoice-default-value.UF_CRM_5D4AA3E8E2ECF'    => 'UF_CRM_5D4AA3E8E2ECF',
            'original.products.0.id'                               => ['PRODUCTS.0.PRODUCT_ID', 'UF_CRM_PRODUCT_ID'],
            'original.products.0.price'                            => 'PRODUCTS.0.price',
            'original.productName'                                 => 'PRODUCTS.0.product_name',
            'original.currency'                                    => 'UF_CRM_5BE54A65AC69B',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-create-invoice'),
    (new ProcessOptions([
        'subsystem_id' => 'default-values',
        'mapping'      => [
            'original' => '*',
        ],
        'options'      => [
            'map' => [
                'STAGE_ID'             => 'WON',
                'CLOSED'               => 1,
                'UF_CRM_EDU_START'     => 'current_datetime',
                'UF_CRM_SPEC'          => '1113',
                'UF_CRM_SPEC_EDU_H'    => '1115',
                'education_level'      => '1328',
                'UF_CRM_DATEPAYBEFORE' => 'current_datetime',
            ],
        ],
    ]))->setAttribute('id', 'bitrix-deal-default-value'),
    (new ProcessOptions([
        'subsystem_id' => 'default-values',
        'mapping'      => [
            'original.sourceId'   => 'SOURCE_ID',
            'original.source_id'  => 'SOURCE_ID',
            'original.partner_id' => 'SOURCE_ID',
        ],
        'options'      => [
            'map' => [
                'SOURCE_ID' => 'OTHER',
            ],
        ],
    ]))->setAttribute('id', 'bitrix-lead-default-value'),
    (new ProcessOptions([
        'subsystem_id' => 'default-values',
        'mapping'      => [
            'original' => '*',
        ],
        'options'      => [
            'map' => [
                'assigned_by_id' => 23,
            ],
        ],
    ]))->setAttribute('id', 'bitrix-set-assigner'),
    (new ProcessOptions([
        'subsystem_id' => 'default-values',
        'mapping'      => [
            'original' => '*',
        ],
        'options'      => [
            'map' => [
                'STATUS_ID'               => 'P',
                'UF_MYCOMPANY_ID'         => '1',
                'PAY_SYSTEM_ID'           => '3',
                'PERSON_TYPE_ID'          => '3',
                'PRODUCT_ROWS.0.QUANTITY' => '1',
                'UF_CRM_5D4AA3E8E2ECF'    => 'lms',
            ],
        ],
    ]))->setAttribute('id', 'bitrix-invoice-default-value'),
    (new ProcessOptions([
        'subsystem_id' => 'postaffiliate-new-transaction',
        'mapping'      => [
            'bitrix-lead.lead_id'                   => 'order_id',
            'original.email'                        => 'data1',
            'original.name'                         => 'data2',
            'original.grade'                        => 'data4',
            'original.STATUS_ID'                    => 'data5',
            'bitrix-product-mapper.lead_product_id' => 'product_id',
            'original.visitorId'                    => 'visitorId',
            'original.a_aid'                        => 'affiliate_id',
            'original.a_bid'                        => 'banner_id',
            'original.opportunity'                  => 'total_cost',
            'bitrix-product-mapper.education'       => 'data5',

            'bitrix-get-lead.ID'                => 'order_id',
            'bitrix-get-lead.EMAIL.0.VALUE'     => 'data1',
            'bitrix-get-lead.NAME'              => 'data2',
            'bitrix-get-lead.UF_CRM_EDUCATION'  => 'data4',
            'bitrix-get-lead.STATUS_ID'         => 'data5',
            'bitrix-get-lead.UF_CRM_PRODUCT_ID' => 'product_id',
            'bitrix-get-lead.SOURCE_ID'         => 'affiliate_id',
            'bitrix-get-lead.OPPORTUNITY'       => 'total_cost',

            'bitrix-get-lead-new-lead.ID'                => 'order_id',
            'bitrix-get-lead-new-lead.EMAIL.0.VALUE'     => 'data1',
            'bitrix-get-lead-new-lead.NAME'              => 'data2',
            'bitrix-to-pap-status-readable.status'       => 'data3',
            'bitrix-get-lead-new-lead.UF_CRM_EDUCATION'  => 'data4',
            'bitrix-get-lead-new-lead.STATUS_ID'         => 'data5',
            'bitrix-get-lead-new-lead.UF_CRM_PRODUCT_ID' => 'product_id',
            'bitrix-get-lead-new-lead.SOURCE_ID'         => 'affiliate_id',
            'bitrix-get-lead-new-lead.OPPORTUNITY'       => 'total_cost',
        ],
        'options'      => [
            'server_url' => 'https://cbs.postaffiliatepro.com/scripts/server.php',
            'sale_url'   => 'https://cbs.postaffiliatepro.com/scripts/sale.php',
            'login'      => 'partner@e-mba.ru',
            'password'   => 'MvBwdO6wfd',
            'account_id' => 'default1',
            'event_name' => 'nick_register',
        ],
    ]))->setAttribute('id', 'postaffiliate-new-transaction'),
    (new ProcessOptions([
        'subsystem_id' => 'postaffiliate-get-transaction',
        'mapping'      => [
            'bitrix-get-deal.LEAD_ID' => 'order_id',
        ],
        'options'      => [
            'server_url' => 'https://cbs.postaffiliatepro.com/scripts/server.php',
            'sale_url'   => 'https://cbs.postaffiliatepro.com/scripts/sale.php',
            'login'      => 'partner@e-mba.ru',
            'password'   => 'MvBwdO6wfd',
            'account_id' => 'default1',
            'event_name' => 'nick_register',
        ],
    ]))->setAttribute('id', 'postaffiliate-get-transaction'),
    (new ProcessOptions([
        'subsystem_id' => 'postaffiliate-update-event',
        'mapping'      => [
            'bitrix-get-lead'                          => ['transaction_id', 'params.order_id'],
            'get-invoice.ID'                           => ['transaction_id', 'params.order_id'],
            'postaffiliate-get-transaction.data1'      => 'params.data1',
            'postaffiliate-get-transaction.data2'      => 'params.data2',
            'original.grade'                           => 'params.data4',
            'get-invoice.STATUS_ID'                    => 'params.data3',
            'postaffiliate-get-transaction.refid'      => 'params.affiliate_id',
            'postaffiliate-get-transaction.bannerid'   => 'params.banner_id',
            'bitrix-get-lead.SOURCE_ID'                => 'params.campaign_id',
            'postaffiliate-get-transaction.campaignid' => 'params.campaign_id',
            'postaffiliate-get-transaction.channel'    => 'params.channel_id',
            'postaffiliate-get-transaction.productid'  => 'params.product_id',
            'bitrix-get-deal.LEAD_ID'                  => 'params.data5',
            'bitrix-get-lead.ID'                       => 'params.data5',
            'bitrix-get-lead.OPPORTUNITY'              => 'params.total_cost',
            'get-invoice.PRICE'                        => 'params.total_cost',
            'bitrix-lead-to-pap-status.status'         => 'params.status',
            'bitrix-to-pap-status.status'              => 'params.status',
        ],
        'options'      => [
            'server_url' => 'https://cbs.postaffiliatepro.com/scripts/server.php',
            'sale_url'   => 'https://cbs.postaffiliatepro.com/scripts/sale.php',
            'login'      => 'partner@e-mba.ru',
            'password'   => 'MvBwdO6wfd',
            'account_id' => 'default1',
            'event_name' => '',
        ],
    ]))->setAttribute('id', 'postaffiliate-new-transaction-deal'),
    (new ProcessOptions([
        'subsystem_id' => 'postaffiliate-set-status',
        'mapping'      => [
            'get-invoice.ID'              => 'transaction_id',
            'original.lead_id'            => 'transaction_id',
            'original.status'             => 'status',
            'bitrix-to-pap-status.status' => 'status',
        ],
        'options'      => [
            'server_url' => 'https://cbs.postaffiliatepro.com/scripts/server.php',
            'sale_url'   => 'https://cbs.postaffiliatepro.com/scripts/sale.php',
            'login'      => 'partner@e-mba.ru',
            'password'   => 'MvBwdO6wfd',
            'account_id' => 'default1',
        ],
    ]))->setAttribute('id', 'postaffiliate-set-status'),
    (new ProcessOptions([
        'subsystem_id' => 'postaffiliate-update-event',
        'mapping'      => [
            'bitrix-to-pap-status.status'          => 'params.status',
            'bitrix-get-lead.ID'                   => 'transaction_id',
            'bitrix-to-pap-status-readable.status' => 'params.data3',

            'get-invoice.ID'                           => ['transaction_id', 'params.order_id'],
            'postaffiliate-get-transaction.data1'      => 'params.data1',
            'postaffiliate-get-transaction.data2'      => 'params.data2',
            'get-invoice.STATUS_ID'                    => 'params.data3',
            'postaffiliate-get-transaction.refid'      => 'params.affiliate_id',
            'postaffiliate-get-transaction.bannerid'   => 'params.banner_id',
            'postaffiliate-get-transaction.campaignid' => 'params.campaign_id',
            'postaffiliate-get-transaction.channel'    => 'params.channel_id',
            'postaffiliate-get-transaction.productid'  => 'params.product_id',
            'bitrix-get-deal.LEAD_ID'                  => 'params.data5',
            'get-invoice.PRICE'                        => 'params.total_cost',
            'bitrix-get-deal.SOURCE_ID'                => 'params.affiliate_id',
            'bitrix-lead-to-pap-status.status'         => 'params.status',
        ],
        'options'      => [
            'server_url' => 'https://cbs.postaffiliatepro.com/scripts/server.php',
            'sale_url'   => 'https://cbs.postaffiliatepro.com/scripts/sale.php',
            'login'      => 'partner@e-mba.ru',
            'password'   => 'MvBwdO6wfd',
            'account_id' => 'default1',
        ],
    ]))->setAttribute('id', 'postaffiliate-update-event'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-lead-distribution',
        'mapping'      => [
            'original.region'                       => 'region',
            'bitrix-product-mapper.lead_product_id' => 'PRODUCT_ID',
            'original.is_fb'                        => 'is_fb',
        ],
        'options'      => [
            'filter'      => require __DIR__ . '/filter.php',
            'status_id'   => 'ASSIGNED',
            'only_online' => true,
            'url'         => 'citybusinessschool.bitrix24.ru',
            'hook'        => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-lead-distribution'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-check-duplicates',
        'mapping'      => [
            'original.email' => 'contacts.0',
            'original.phone' => 'contacts.1',
        ],
        'options'      => [
            'url'       => 'citybusinessschool.bitrix24.ru',
            'hook'      => '69/9amg2bwr1y7xk9fi/',
            'status_id' => 'RE_LEAD',
        ],
    ]))->setAttribute('id', 'bitrix-check-duplicates'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-get-invoice',
        'mapping'      => [
            'original.data.FIELDS.ID' => 'id',
            'original.email'          => 'contact',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'get-invoice'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-get-deal',
        'mapping'      => [
            'original.data.FIELDS.ID' => 'deal_id',
            'get-invoice.UF_DEAL_ID'  => 'deal_id',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-get-deal'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-get-lead',
        'mapping'      => [
            'original.data.FIELDS.ID' => 'id',
            'original.lead_id'        => 'id',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-get-lead'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-get-lead',
        'mapping'      => [
            'original.data.FIELDS.ID' => 'id',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-get-lead-new-lead'),
//    (new ProcessOptions([
//        'subsystem_id' => 'bitrix-convert-currency',
//        'mapping'      => [
//            'get-invoice.CURRENCY'             => 'from_currency',
//            'get-invoice.PRICE'                => 'amount',
//            'get-invoice.UF_CRM_5BE54A65AC69B' => 'to_currency',
//        ],
//        'options'      => [
//            'url'         => 'citybusinessschool.bitrix24.ru',
//            'hook'        => '69/9amg2bwr1y7xk9fi/',
//            'to_currency' => 'rur',
//        ],
//    ]))->setAttribute('id', 'bitrix-convert-currency'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-update-invoice',
        'mapping'      => [
            'get-invoice.ID'                                => 'id',
            'paycloud-payment-link.payment_link'            => 'UF_CRM_PAY_URL',
            'paycloud-payment-link-no-convert.payment_link' => 'UF_CRM_PAY_URL',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'add-payment-link-to-invoice'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-set-invoice-status',
        'mapping'      => [
            'original.order_id' => 'id',
        ],
        'options'      => [
            'url'    => 'citybusinessschool.bitrix24.ru',
            'hook'   => '69/9amg2bwr1y7xk9fi/',
            'status' => 'P',
        ],
    ]))->setAttribute('id', 'approve-invoice'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-set-invoice-status',
        'mapping'      => [
            'original.order_id' => 'id',
        ],
        'options'      => [
            'url'    => 'citybusinessschool.bitrix24.ru',
            'hook'   => '69/9amg2bwr1y7xk9fi/',
            'status' => 'D',
        ],
    ]))->setAttribute('id', 'decline-invoice'),
    (new ProcessOptions([
        'subsystem_id' => 'paycloud-payment-link',
        'mapping'      => [
            'bitrix-convert-currency.base_amount'     => 'amount',
            'get-invoice.INVOICE_PROPERTIES.EMAIL'    => 'email',
            'get-invoice.ID'                          => 'order_id',
            'get-invoice.UF_CRM_5BE54A65AC69B'        => 'currency',
            'get-invoice.PRODUCT_ROWS.0.ID'           => 'products.0.id',
            'get-invoice.PRODUCT_ROWS.0.PRODUCT_NAME' => 'products.0.name',
            'get-invoice.PRODUCT_ROWS.0.PRICE'        => 'products.0.price',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'paycloud-payment-link'),
    (new ProcessOptions([
        'subsystem_id' => 'paycloud-payment-link',
        'mapping'      => [
            'get-invoice.PRICE'                       => 'amount',
            'get-invoice.UF_CRM_5C6E8D3550528'        => 'amount',
            'get-invoice.INVOICE_PROPERTIES.EMAIL'    => 'email',
            'get-invoice.ID'                          => 'order_id',
            'get-invoice.CURRENCY'                    => 'currency',
            'get-invoice.UF_CRM_5BE54A65AC69B'        => 'currency',
            'get-invoice.PRODUCT_ROWS.0.ID'           => 'products.0.id',
            'get-invoice.PRODUCT_ROWS.0.PRODUCT_NAME' => 'products.0.name',
            'get-invoice.PRODUCT_ROWS.0.PRICE'        => 'products.0.price',
        ],
        'options'      => [
            'url'  => 'https://pay.e-mba.ru/',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'paycloud-payment-link-no-convert'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-workflow',
        'mapping'      => [
            'bitrix-lead.lead_id' => 'document_id',
        ],
        'options'      => [
            'url'        => 'citybusinessschool.bitrix24.ru',
            'hook'       => '69/9amg2bwr1y7xk9fi/',
            'templateId' => '69',
        ],
    ]))->setAttribute('id', 'start-create-contact-process'),
    (new ProcessOptions([
        'subsystem_id' => 'mapper',
        'mapping'      => [
            'get-invoice.STATUS_ID' => 'status',
        ],
        'options'      => [
            'map' => [
                'status' => [
                    'N' => 'P',
                    'Q' => 'P',
                    'S' => 'P',
                    'P' => 'A',
                    'D' => 'D',
                ],
            ],
        ],
    ]))->setAttribute('id', 'bitrix-to-pap-status'),
    (new ProcessOptions([
        'subsystem_id' => 'mapper',
        'mapping'      => [
            'bitrix-get-lead.STATUS_ID' => 'status',
        ],
        'options'      => [
            'map' => [
                'status' => [
                    'NEW'               => 'P',
                    'RE_LEAD'           => 'D',
                    'ASSIGNED'          => 'P',
                    'IN_PROCESS'        => 'P',
                    'UNABLE_TO_CONTACT' => 'P',
                    'SCRIPT_FAILS'      => 'P',
                    'UHB'               => 'A',
                    'POTENTIAL'         => 'A',
                    'DAI'               => 'A',
                    'DUPLICATE'         => 'D',
                    'JUNK'              => 'D',
                    'CONVERTED'         => 'A',
                ],
            ],
        ],
    ]))->setAttribute('id', 'bitrix-lead-to-pap-status'),
    (new ProcessOptions([
        'subsystem_id' => 'mapper',
        'mapping'      => [
            'bitrix-get-lead.STATUS_ID'          => 'status',
            'bitrix-get-lead-new-lead.STATUS_ID' => 'status',
        ],
        'options'      => [
            'map' => [
                'status' => [
                    'NEW'               => 'Не обработан',
                    'RE_LEAD'           => 'Повторный лид',
                    'ASSIGNED'          => 'Распределен',
                    'IN_PROCESS'        => 'В работе',
                    'UNABLE_TO_CONTACT' => 'Не удалось связаться',
                    'SCRIPT_FAILS'      => 'Скрипт не пройден',
                    'UHB'               => 'УХБ',
                    'POTENTIAL'         => 'Потенциальный',
                    'DAI'               => 'Дозвон и доп. информация',
                    'DUPLICATE'         => 'Дубликат',
                    'JUNK'              => 'Невалид',
                    'CONVERTED'         => 'Сконвертировано',
                ],
            ],
        ],
    ]))->setAttribute('id', 'bitrix-to-pap-status-readable'),
    (new ProcessOptions([
        'subsystem_id' => 'buffer-set-new',
        'mapping'      => [],
        'options'      => [],
    ]))->setAttribute('id', 'buffer-set-new'),
    (new ProcessOptions([
        'subsystem_id' => 'mapper',
        'mapping'      => [
            'original.products.0.id'               => 'lead_product_id',
            'original.education'                   => 'education',
            'bitrix-product-mapper.product_id'     => 'lead_product_id',
            'lms-bitrix-product-mapper.product_id' => 'lead_product_id',
        ],
        'options'      => [
            'map' => [
                'education'       => [
                    803 => 'Высшее',
                    805 => 'Неоконченное высшее',
                    807 => 'Средне-спец',
                    809 => 'Среднее',
                ],
                'lead_product_id' => [
                    '2062'  => '261',
                    '11824' => '5',
                    '11825' => '7',
                    '11826' => '9',
                    '44382' => '11',
                    '44938' => '13',
                    '47963' => '15',
                    '47964' => '17',
                    '47965' => '19',
                    '53374' => '21',
                    '2063'  => '23',
                    '11827' => '25',
                    '11828' => '27',
                    '11829' => '29',
                    '44381' => '31',
                    '61908' => '33',
                    '69529' => '35',
                    '69764' => '37',
                    '64093' => '39',
                    '47598' => '41',
                    '47599' => '43',
                    '47600' => '45',
                    '47601' => '47',
                    '47602' => '49',
                    '47603' => '51',
                    '47604' => '53',
                    '47605' => '55',
                    '47606' => '57',
                    '47960' => '59',
                    '47961' => '61',
                    '47962' => '63',
                    '53437' => '65',
                    '25703' => '67',
                    '53436' => '69',
                    '64098' => '87',
                    '15970' => '89',
                    '49963' => '91',
                    '50701' => '93',
                    '49700' => '99',
                    '49430' => '101',
                    '46595' => '103',
                    '48216' => '105',
                    '48215' => '109',
                    '49170' => '111',
                    '48214' => '113',
                    '15978' => '115',
                    '64759' => '119',
                    '63775' => '121',
                    '65006' => '123',
                    '65007' => '125',
                    '60590' => '127',
                    '59405' => '129',
                    '60600' => '131',
                    '54037' => '133',
                    '60735' => '135',
                    '66211' => '137',
                    '59407' => '145',
                    '59382' => '159',
                    '61313' => '169',
                    '70013' => '177',
                    '64817' => '179',
                    '48025' => '195',
                    '50914' => '197',
                    '55895' => '199',
                    '69133' => '201',
                    '69135' => '203',
                    '69134' => '205',
                    '76244' => '1070',
                    '76245' => '1072',
                ],
            ],
        ],
    ]))->setAttribute('id', 'bitrix-product-mapper'),
    (new ProcessOptions([
        'subsystem_id' => 'mapper',
        'mapping'      => [
            'original.products.0.id' => 'product_id',
            'original.product_id'    => 'product_id',
        ],
        'options'      => [
            'map' => [
                'product_id' => [
                    '98214126-7fc0-487a-bbc7-83f50fe220a3' => 45,
                    'ce64fe2a-f485-4106-a3ca-e123f56f0e6d' => 2063,
                    '4d977807-34b3-479b-9a80-a054d6ab603c' => 2103,
                    'd8e1f333-e924-4a41-ae91-be872a355066' => 2062,
                    '15d0942c-f14f-47a4-8dfd-5e2cd128371f' => 47603,
                    '66f17ea6-f14b-4b03-90b0-db682508a525' => 2105,
                    'da05112d-289e-4c1a-b0e5-f3800ece292f' => 71461,
                    '444ad100-c2f7-42de-a749-2adc61e71498' => 59406,
                    '891e90be-4bdc-442a-9749-dbf86630c577' => 54545,
                    '7c240de4-4c35-490e-9e05-444cdd0cb13d' => 25703,
                    '8a96417e-5416-4ff3-ada1-c17daa5dd72c' => 61908,
                    '72555404-4b35-4d69-a7a3-a320e0ec54c3' => 76244,
                    'dbf63e37-3175-40c7-a6dd-bfddd8f8f8f2' => 72864,
                    'a7910620-e76b-46bb-ba77-ca73d6e4a25c' => 2107,
                    'ea341a19-8552-4cf7-8b81-5d1f79a41e4c' => 2100,
                    'e3f6dd1c-7a6d-475e-87c0-baab37122b60' => 112,
                    'aefc70d6-fb91-4490-b432-31c5f09dfe6d' => 2107,
                    '391d438d-cd8c-4a29-aaf4-2c20bc81d20d' => 59406,
                    '2aad83be-77a7-4aed-942c-57158339db90' => 2062,
                    '9fc80c69-9d5c-40e0-8869-b211d56c1609' => 3202,
                    'c0b63a52-0471-4866-bb5f-afe849dd9fab' => 60600,
                    '2d4810da-31cc-460c-96cb-1a2ff9197de0' => 44938,
                    '69862c2e-ebe0-41a7-aa73-6d22f59284a7' => 59382,
                    '43dab837-d3e9-42cd-a1db-dded56ad1094' => 69135,
                    'a25a39bd-f4c3-4ace-98dc-4146dd1a0e9d' => 69134,
                    '3c5cc613-4e3f-4a17-88aa-e97aad3f11df' => 2102,
                    'b39df2e6-51ee-4931-b8e4-8d25a7c2c0e4' => 56566,
                    '2faf60d6-575c-4da2-a925-497bb2103d98' => 61908,
                    'c34e6e66-ca15-460b-97ac-70565e690e56' => 69133,
                    'bdad151c-7ddc-4d7f-a976-280270c6ee4d' => 1120,
                    '17714ed1-71cc-4ec9-83d1-e0d9f230ef17' => 60735,
                    '03342085-b555-4ab2-94b8-3db42a40d738' => 2104,
                    '364334d9-e321-433f-b132-e9f869009dcd' => 47600,
                    'a86446b0-5b83-4cd4-9027-3b20167e72f9' => 2106,
                    '805e7142-3ed6-441b-85c3-48930f13a1f2' => 60600,
                    '9d150731-01a2-4971-a30d-a5ab5046da6e' => 72901,
                    'ddc50633-b708-465d-ad59-d60ac2231b5a' => 47601,
                    '4de5fc60-291c-4eaa-ad19-2411eeef1620' => 3202,
                    'd6189890-f512-42b2-905b-ee130ff39d46' => 1900,
                    '98beab94-5c78-4ec6-a39a-6cbbc79a08bf' => 25703,
                    '3b64901d-5e80-4b5f-b8fd-9337c827cefc' => 59405,
                    '8613e442-49bc-4b37-92e3-05eb1db1a50e' => 2108,
                    '9836449d-d7f7-4abd-a061-e44111358cf7' => 60590,
                    'ce4878ba-fbc5-4477-a6f6-2dbbace06be4' => 47598,
                    '40612951-8252-40da-af35-e6ee6424f27d' => 47599,
                    'aecbb463-c9a2-49e8-ac28-8fc893d11023' => 2062,
                    'd234bdad-6923-4eb6-a805-68c661c931aa' => 63775,
                    'c3520c5f-d0a1-4d79-88aa-a1ffe85ec636' => 25703,
                    '43c02034-9801-4546-aa2c-ee3e602ce540' => 44938,
                    '99667fd7-d6e5-461c-ae77-bbd77c6d5bfe' => 72866,
                    '5bf41f20-ddc9-41a5-8fc6-439f990cd3ef' => 54037,
                    '51681062-3bb1-4b69-a021-a3253ea5431d' => 2101,
                    '0b7cd242-8092-4801-ab6d-00f099c9a2ba' => 2106,
                    'ad96a048-7f20-4e5d-92bb-321aac8097e8' => 23,
                    'd6e14ce4-51f6-413e-90bc-c2cb9e5b50b4' => 2063,
                    '44e89cf8-9385-4bad-9017-46ee876f55e3' => 65007,
                    'fdd1f2de-9829-4a97-aedd-85d137afd5c6' => 2105,
                    'c8ac7e78-7a72-4dc5-9f39-9def0c11e87e' => 59407,
                    '48f7ca73-d578-46a3-8c16-b3b2ad7e645c' => 1076,
                    'f24de955-2047-4d83-9a2f-f1ef73ffdd13' => 72865,
                    '31379ec3-8efe-4c49-9c68-97bb748f16b9' => 1892,
                ],
            ],
        ],
    ]))->setAttribute('id', 'lms-bitrix-product-mapper'),
    (new ProcessOptions([
        'subsystem_id' => 'value-mapper',
        'mapping'      => [
            'original.user_id'       => 'value',
            'bitrix-find-contact.ID' => 'key',
            'lms-get-user.id'        => 'value',
            'bitrix-get-contact.ID'  => 'key',
        ],
        'options'      => [
            'namespace' => 'contacts',
        ],
    ]))->setAttribute('id', 'remember-contact'),
    (new ProcessOptions([
        'subsystem_id' => 'get-value-map',
        'mapping'      => [
            'original.user_id' => 'key',
        ],
        'options'      => [
            'namespace' => 'contacts',
        ],
    ]))->setAttribute('id', 'get-contact'),
    (new ProcessOptions([
        'subsystem_id' => 'value-mapper',
        'mapping'      => [
            'original.orderId'           => 'key',
            'original.order_id'          => 'key',
            'bitrix-create-deal.deal_id' => 'value',
        ],
        'options'      => [
            'namespace' => 'deals',
        ],
    ]))->setAttribute('id', 'remember-deal'),
    (new ProcessOptions([
        'subsystem_id' => 'get-value-map',
        'mapping'      => [
            'original.orderId' => 'key',
        ],
        'options'      => [
            'namespace' => 'deals',
        ],
    ]))->setAttribute('id', 'find-deal'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-search-contact',
        'mapping'      => [
            'original.user_email' => 'conditions.EMAIL',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-search-contact'),
    (new ProcessOptions([
        'subsystem_id' => 'bitrix-get-contact',
        'mapping'      => [
            'bitrix-get-deal-no-invoice.CONTACT_ID' => 'ID',
        ],
        'options'      => [
            'url'  => 'citybusinessschool.bitrix24.ru',
            'hook' => '69/9amg2bwr1y7xk9fi/',
        ],
    ]))->setAttribute('id', 'bitrix-get-contact'),
    (new ProcessOptions([
        'subsystem_id' => 'lms-register-user',
        'mapping'      => [
            'bitrix-get-contact.EMAIL.0.VALUE' => 'email',
            'bitrix-get-contact.NAME'          => 'first_name',
            'bitrix-get-contact.LAST_NAME'     => 'last_name',
        ],
        'options'      => [
            'url'      => 'http://e-mba.local',
            'clientId' => 'f3b20de5-ce47-45da-ada5-a1fca7631f76',
            'key'      => 'c186b7b8c8451b9dda685768c3409136',
        ],
    ]))->setAttribute('id', 'lms-register-user'),
    (new ProcessOptions([
        'subsystem_id' => 'lms-get-user',
        'mapping'      => [
            'bitrix-get-contact.EMAIL.0.VALUE' => 'searchParam',
        ],
        'options'      => [
            'url'      => 'http://e-mba.local',
            'clientId' => 'f3b20de5-ce47-45da-ada5-a1fca7631f76',
            'key'      => 'c186b7b8c8451b9dda685768c3409136',
        ],
    ]))->setAttribute('id', 'lms-get-user'),
];
