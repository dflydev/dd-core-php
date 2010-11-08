<?php

require_once('PHPUnit/Framework.php');

define('PACKAGE_LIB', dirname(dirname(__FILE__)) . '/lib/');

class DdCoreBasicTest extends PHPUnit_Framework_TestCase {

    /**
     * Simple test to see if test starts up.
     */
    public function testStartup() {
        require_once(PACKAGE_LIB . 'dd_core_ClasspathResourceLocator.php');
        $resourceLocator = new dd_core_ClasspathResourceLocator();
    }

}
?>
