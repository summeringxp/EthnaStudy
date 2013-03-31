<?php

require_once dirname(__FILE__) . '/../app/Test_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Test_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Test_Controller::main('Test_Controller', 'index');

