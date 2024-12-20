<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app.swagger' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc.json']], [], [], []],
    'app.swagger_ui' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger_ui'], [], [['text', '/api/doc']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_recruit_developer' => [[], ['_controller' => 'App\\Controller\\ApiController::recruitDev'], [], [['text', '/api/recruitDev']], [], [], []],
    'app_transfer_developer' => [[], ['_controller' => 'App\\Controller\\ApiController::transferDev'], [], [['text', '/api/transferDev']], [], [], []],
    'app_update_position_developer' => [[], ['_controller' => 'App\\Controller\\ApiController::updatePosDev'], [], [['text', '/api/updatePosDev']], [], [], []],
    'app_fire_developer' => [['id'], ['_controller' => 'App\\Controller\\ApiController::fireDev'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/fireDev']], [], [], []],
    'app_create_project' => [[], ['_controller' => 'App\\Controller\\ApiController::createProj'], [], [['text', '/api/createProj']], [], [], []],
    'app_fire_project' => [['id'], ['_controller' => 'App\\Controller\\ApiController::fireProj'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/fireProj']], [], [], []],
    'app_developer_index' => [[], ['_controller' => 'App\\Controller\\DeveloperController::index'], [], [['text', '/developer']], [], [], []],
    'app_developer_new' => [[], ['_controller' => 'App\\Controller\\DeveloperController::new'], [], [['text', '/developer/new']], [], [], []],
    'app_developer_show' => [['id'], ['_controller' => 'App\\Controller\\DeveloperController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/developer']], [], [], []],
    'app_developer_edit' => [['id'], ['_controller' => 'App\\Controller\\DeveloperController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/developer']], [], [], []],
    'app_developer_delete' => [['id'], ['_controller' => 'App\\Controller\\DeveloperController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/developer']], [], [], []],
    'app_project_index' => [[], ['_controller' => 'App\\Controller\\ProjectController::index'], [], [['text', '/project']], [], [], []],
    'app_project_new' => [[], ['_controller' => 'App\\Controller\\ProjectController::new'], [], [['text', '/project/new']], [], [], []],
    'app_project_show' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/project']], [], [], []],
    'app_project_edit' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/project']], [], [], []],
    'app_project_delete' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/project']], [], [], []],
    'hello_controller' => [[], ['_controller' => 'App\\Controller\\helloController::number'], [], [['text', '/test']], [], [], []],
    'App\Controller\ApiController::recruitDev' => [[], ['_controller' => 'App\\Controller\\ApiController::recruitDev'], [], [['text', '/api/recruitDev']], [], [], []],
    'App\Controller\ApiController::transferDev' => [[], ['_controller' => 'App\\Controller\\ApiController::transferDev'], [], [['text', '/api/transferDev']], [], [], []],
    'App\Controller\ApiController::updatePosDev' => [[], ['_controller' => 'App\\Controller\\ApiController::updatePosDev'], [], [['text', '/api/updatePosDev']], [], [], []],
    'App\Controller\ApiController::fireDev' => [['id'], ['_controller' => 'App\\Controller\\ApiController::fireDev'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/fireDev']], [], [], []],
    'App\Controller\ApiController::createProj' => [[], ['_controller' => 'App\\Controller\\ApiController::createProj'], [], [['text', '/api/createProj']], [], [], []],
    'App\Controller\ApiController::fireProj' => [['id'], ['_controller' => 'App\\Controller\\ApiController::fireProj'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/fireProj']], [], [], []],
    'App\Controller\DeveloperController::index' => [[], ['_controller' => 'App\\Controller\\DeveloperController::index'], [], [['text', '/developer']], [], [], []],
    'App\Controller\DeveloperController::new' => [[], ['_controller' => 'App\\Controller\\DeveloperController::new'], [], [['text', '/developer/new']], [], [], []],
    'App\Controller\DeveloperController::show' => [['id'], ['_controller' => 'App\\Controller\\DeveloperController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/developer']], [], [], []],
    'App\Controller\DeveloperController::edit' => [['id'], ['_controller' => 'App\\Controller\\DeveloperController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/developer']], [], [], []],
    'App\Controller\DeveloperController::delete' => [['id'], ['_controller' => 'App\\Controller\\DeveloperController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/developer']], [], [], []],
    'App\Controller\ProjectController::index' => [[], ['_controller' => 'App\\Controller\\ProjectController::index'], [], [['text', '/project']], [], [], []],
    'App\Controller\ProjectController::new' => [[], ['_controller' => 'App\\Controller\\ProjectController::new'], [], [['text', '/project/new']], [], [], []],
    'App\Controller\ProjectController::show' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/project']], [], [], []],
    'App\Controller\ProjectController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/project']], [], [], []],
    'App\Controller\ProjectController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/project']], [], [], []],
    'App\Controller\helloController::number' => [[], ['_controller' => 'App\\Controller\\helloController::number'], [], [['text', '/test']], [], [], []],
];
