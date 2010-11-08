<?php

require_once('PHPUnit/Framework.php');

class AllTests {
    public static $testClassNames = array(
        'DdCoreBasicTest',
    );
    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Substrate');
        foreach ( self::$testClassNames as $testClassName ) {
            require_once($testClassName . '.php');
            $suite->addTestSuite($testClassName);
        }
        return $suite;
    }
}

?>
