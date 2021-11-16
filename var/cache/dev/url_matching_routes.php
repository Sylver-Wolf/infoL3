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
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\ApiLoginController::index'], null, null, null, false, false, null]],
        '/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/creer_salle/new' => [[['_route' => 'creer_salle_new', '_controller' => 'App\\Controller\\CreerSalleController::new'], null, null, null, false, false, null]],
        '/salle' => [
            [['_route' => 'salle', '_controller' => 'App\\Controller\\CreerSalleController::index'], null, null, null, false, false, null],
            [['_route' => 'sallesalle', '_controller' => 'App\\Controller\\SalleController::index'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/lobby' => [[['_route' => 'lobby', '_controller' => 'App\\Controller\\LobbyController::index'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'hello_world', '_controller' => 'App\\Controller\\MonController::hello'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::profil'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
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
                .')'
                .'|/([^/]++)/show(*:148)'
                .'|/article/([^/]++)/(?'
                    .'|edit(*:181)'
                    .'|delete(*:195)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:232)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        148 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, false, null]],
        181 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], null, null, false, false, null]],
        195 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], null, null, false, false, null]],
        232 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
