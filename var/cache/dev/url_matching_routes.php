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
        '/learner' => [[['_route' => 'learner_index', '_controller' => 'App\\Controller\\LearnerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/learner/new' => [[['_route' => 'learner_new', '_controller' => 'App\\Controller\\LearnerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/level' => [[['_route' => 'level_index', '_controller' => 'App\\Controller\\LevelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/level/new' => [[['_route' => 'level_new', '_controller' => 'App\\Controller\\LevelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PagesController::home'], null, null, null, false, false, null]],
        '/teacher' => [[['_route' => 'teacher_index', '_controller' => 'App\\Controller\\TeacherController::index'], null, ['GET' => 0], null, true, false, null]],
        '/teacher/new' => [[['_route' => 'teacher_new', '_controller' => 'App\\Controller\\TeacherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/le(?'
                    .'|arner/(?'
                        .'|show/([^/]++)(*:197)'
                        .'|edit/([^/]++)(*:218)'
                        .'|delete/([^/]++)(*:241)'
                    .')'
                    .'|vel/([^/]++)(?'
                        .'|(*:265)'
                        .'|/edit(*:278)'
                        .'|(*:286)'
                    .')'
                .')'
                .'|/teacher/(?'
                    .'|show/([^/]++)(*:321)'
                    .'|edit/([^/]++)(*:342)'
                    .'|delete/([^/]++)(*:365)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'learner_show', '_controller' => 'App\\Controller\\LearnerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        218 => [[['_route' => 'learner_edit', '_controller' => 'App\\Controller\\LearnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        241 => [[['_route' => 'learner_delete', '_controller' => 'App\\Controller\\LearnerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        265 => [[['_route' => 'level_show', '_controller' => 'App\\Controller\\LevelController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'level_edit', '_controller' => 'App\\Controller\\LevelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'level_delete', '_controller' => 'App\\Controller\\LevelController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        321 => [[['_route' => 'teacher_show', '_controller' => 'App\\Controller\\TeacherController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'teacher_edit', '_controller' => 'App\\Controller\\TeacherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        365 => [
            [['_route' => 'teacher_delete', '_controller' => 'App\\Controller\\TeacherController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
