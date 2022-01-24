<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'signup_administrateur', '_controller' => 'App\\Controller\\AdministrateurBackofficeController::signup_administrateur'], null, null, null, true, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AdministrateurBackofficeController::logout'], null, null, null, false, false, null]],
        '/admin/administrateur/create' => [[['_route' => 'add_administrateur', '_controller' => 'App\\Controller\\AdministrateurBackofficeController::add_administrateur'], null, null, null, false, false, null]],
        '/admin/administrateur/delete' => [[['_route' => 'delete_administrateur', '_controller' => 'App\\Controller\\AdministrateurBackofficeController::delete_administrateur'], null, null, null, false, false, null]],
        '/admin/contact' => [[['_route' => 'backoffice_contact', '_controller' => 'App\\Controller\\ContactBackofficeController::index'], null, null, null, false, false, null]],
        '/admin/expoxition/create' => [[['_route' => 'add_exposition', '_controller' => 'App\\Controller\\ExpositionController::create_exposition'], null, null, null, false, false, null]],
        '/admin/exposition/manage' => [[['_route' => 'manage_exposition', '_controller' => 'App\\Controller\\ExpositionController::delete_id_administrateur'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\RealisationBackofficeController::dashboard'], null, null, null, false, false, null]],
        '/admin/oeuvre/create' => [[['_route' => 'add_oeuvre', '_controller' => 'App\\Controller\\RealisationBackofficeController::add_artwork'], null, null, null, false, false, null]],
        '/admin/oeuvre/manage' => [[['_route' => 'manage_oeuvre', '_controller' => 'App\\Controller\\RealisationBackofficeController::manage_artwork'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'about', '_controller' => 'App\\Controller\\VitrineWebsiteController::index'], null, null, null, false, false, null]],
        '/galerie' => [[['_route' => 'galerie', '_controller' => 'App\\Controller\\VitrineWebsiteController::galerie'], null, null, null, false, false, null]],
        '/expositions' => [[['_route' => 'expositions', '_controller' => 'App\\Controller\\VitrineWebsiteController::expositions'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'mentions_legales', '_controller' => 'App\\Controller\\VitrineWebsiteController::mention'], null, null, null, false, false, null]],
        '/politiques-confidentialites' => [[['_route' => 'politiques_confidentialites', '_controller' => 'App\\Controller\\VitrineWebsiteController::politique'], null, null, null, false, false, null]],
        '/perdu-sur-mon-site' => [[['_route' => 'page_404', '_controller' => 'App\\Controller\\VitrineWebsiteController::lost_page'], null, null, null, false, false, null]],
        '/admin/web-site' => [[['_route' => 'backoffice_websiteSave', '_controller' => 'App\\Controller\\WebSiteSaveBackofficeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/(?'
                    .'|administrateur/delete/([^/]++)(*:208)'
                    .'|contact/delete/([^/]++)(*:239)'
                    .'|exposition/delete/([^/]++)(*:273)'
                    .'|oeuvre/(?'
                        .'|update/([^/]++)(*:306)'
                        .'|delete/([^/]++)(*:329)'
                    .')'
                .')'
                .'|/galerie\\-oeuvre/([^/]++)(*:364)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        208 => [[['_route' => 'delete_id_administrateur', '_controller' => 'App\\Controller\\AdministrateurBackofficeController::delete_id_administrateur'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'delete_id_contact', '_controller' => 'App\\Controller\\ContactBackofficeController::delete_id_administrateur'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'delete_id_exposition', '_controller' => 'App\\Controller\\ExpositionController::delete_id_exposition'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'update_oeuvre', '_controller' => 'App\\Controller\\RealisationBackofficeController::update_artwork'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'delete_id_artwork', '_controller' => 'App\\Controller\\RealisationBackofficeController::delete_id_administrateur'], ['id'], null, null, false, true, null]],
        364 => [
            [['_route' => 'galerie_oeuvre', '_controller' => 'App\\Controller\\VitrineWebsiteController::galerie_oeuvre'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
