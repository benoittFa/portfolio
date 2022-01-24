<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/(?'
                    .'|administrateur/delete/([^/]++)(*:47)'
                    .'|contact/delete/([^/]++)(*:77)'
                    .'|exposition/delete/([^/]++)(*:110)'
                    .'|oeuvre/(?'
                        .'|update/([^/]++)(*:143)'
                        .'|delete/([^/]++)(*:166)'
                    .')'
                .')'
                .'|/galerie\\-oeuvre/([^/]++)(*:201)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'delete_id_administrateur', '_controller' => 'App\\Controller\\AdministrateurBackofficeController::delete_id_administrateur'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'delete_id_contact', '_controller' => 'App\\Controller\\ContactBackofficeController::delete_id_administrateur'], ['id'], null, null, false, true, null]],
        110 => [[['_route' => 'delete_id_exposition', '_controller' => 'App\\Controller\\ExpositionController::delete_id_exposition'], ['id'], null, null, false, true, null]],
        143 => [[['_route' => 'update_oeuvre', '_controller' => 'App\\Controller\\RealisationBackofficeController::update_artwork'], ['id'], null, null, false, true, null]],
        166 => [[['_route' => 'delete_id_artwork', '_controller' => 'App\\Controller\\RealisationBackofficeController::delete_id_administrateur'], ['id'], null, null, false, true, null]],
        201 => [
            [['_route' => 'galerie_oeuvre', '_controller' => 'App\\Controller\\VitrineWebsiteController::galerie_oeuvre'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
