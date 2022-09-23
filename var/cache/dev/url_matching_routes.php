<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_list', '_controller' => 'App\\Controller\\EventController::list'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/uploadCsv' => [[['_route' => 'app_user_upload_csv', '_controller' => 'App\\Controller\\UserController::uploadCsv'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/event/(?'
                    .'|active/([^/]++)(*:32)'
                    .'|cancel/([^/]++)(*:54)'
                    .'|edit/([^/]++)(*:74)'
                    .'|details/([^/]++)(*:97)'
                    .'|subscribe/([^/]++)(*:122)'
                    .'|unsubscribe/([^/]++)(*:150)'
                .')'
                .'|/api/(?'
                    .'|location/([^/]++)(*:184)'
                    .'|detail/([^/]++)(*:207)'
                .')'
                .'|/location/new/([^/]++)(*:238)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:282)'
                .'|/user/(?'
                    .'|edit(?'
                        .'|/([^/]++)(*:315)'
                        .'|\\-password/([^/]++)(*:342)'
                    .')'
                    .'|profil/([^/]++)(*:366)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:406)'
                    .'|wdt/([^/]++)(*:426)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:472)'
                            .'|router(*:486)'
                            .'|exception(?'
                                .'|(*:506)'
                                .'|\\.css(*:519)'
                            .')'
                        .')'
                        .'|(*:529)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_active_event', '_controller' => 'App\\Controller\\ActiveEventController::active'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'app_cancel_event', '_controller' => 'App\\Controller\\CancelEventController::cancelEvent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        74 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        97 => [[['_route' => 'app_event_details', '_controller' => 'App\\Controller\\EventController::detailEvent'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        122 => [[['_route' => 'app_event_subscribe', '_controller' => 'App\\Controller\\EventController::subscribeEvent'], ['id'], ['GET' => 0], null, false, true, null]],
        150 => [[['_route' => 'app_event_unsubscribe', '_controller' => 'App\\Controller\\EventController::unsubscribeEvent'], ['id'], ['GET' => 0], null, false, true, null]],
        184 => [[['_route' => 'api_city_list', '_controller' => 'App\\Controller\\Api\\EventApi::findAll'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'api_location_detail', '_controller' => 'App\\Controller\\Api\\EventApi::findOne'], ['id'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_location_new', '_controller' => 'App\\Controller\\LocationController::new'], ['origin'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        315 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        342 => [[['_route' => 'app_user_edit-password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        366 => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\UserController::showProfilUser'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        426 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        472 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        486 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        506 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        519 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        529 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
