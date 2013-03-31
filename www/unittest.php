<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Test_Controller.php';

Test_Controller::main('Test_Controller', array(
    '__ethna_unittest__',
    )
);
