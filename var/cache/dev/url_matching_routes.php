<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/recruitDev' => [[['_route' => 'app_recruit_developer', '_controller' => 'App\\Controller\\ApiController::recruitDev'], null, ['POST' => 0], null, false, false, null]],
        '/api/transferDev' => [[['_route' => 'app_transfer_developer', '_controller' => 'App\\Controller\\ApiController::transferDev'], null, ['POST' => 0], null, false, false, null]],
        '/api/updatePosDev' => [[['_route' => 'app_update_position_developer', '_controller' => 'App\\Controller\\ApiController::updatePosDev'], null, ['POST' => 0], null, false, false, null]],
        '/api/createProj' => [[['_route' => 'app_create_project', '_controller' => 'App\\Controller\\ApiController::createProj'], null, ['POST' => 0], null, false, false, null]],
        '/developer' => [[['_route' => 'app_developer_index', '_controller' => 'App\\Controller\\DeveloperController::index'], null, ['GET' => 0], null, false, false, null]],
        '/developer/new' => [[['_route' => 'app_developer_new', '_controller' => 'App\\Controller\\DeveloperController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/project' => [[['_route' => 'app_project_index', '_controller' => 'App\\Controller\\ProjectController::index'], null, ['GET' => 0], null, false, false, null]],
        '/project/new' => [[['_route' => 'app_project_new', '_controller' => 'App\\Controller\\ProjectController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'hello_controller', '_controller' => 'App\\Controller\\helloController::number'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/api/fire(?'
                    .'|Dev/(\\d+)(*:223)'
                    .'|Proj/(\\d+)(*:241)'
                .')'
                .'|/developer/([^/]++)(?'
                    .'|(*:272)'
                    .'|/edit(*:285)'
                    .'|(*:293)'
                .')'
                .'|/project/([^/]++)(?'
                    .'|(*:322)'
                    .'|/edit(*:335)'
                    .'|(*:343)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'app_fire_developer', '_controller' => 'App\\Controller\\ApiController::fireDev'], ['id'], ['DELETE' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_fire_project', '_controller' => 'App\\Controller\\ApiController::fireProj'], ['id'], ['DELETE' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_developer_show', '_controller' => 'App\\Controller\\DeveloperController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'app_developer_edit', '_controller' => 'App\\Controller\\DeveloperController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        293 => [[['_route' => 'app_developer_delete', '_controller' => 'App\\Controller\\DeveloperController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        322 => [[['_route' => 'app_project_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_project_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [
            [['_route' => 'app_project_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
