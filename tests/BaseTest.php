<?php
/**
 * Test that the basic functionality exists
 */
class BaseTest extends PHPUnit_Framework_TestCase 
{ 
    public function testRespondFunctionExists()
    {
        $this->assertTrue(function_exists('respond'));
    }
    
    public function testDispatchFunctionExists()
    {
        $this->assertTrue(function_exists('dispatch'));
    }
    
    public function testRoutesGlobalVariableExists()
    {
        $this->assertTrue(isset($GLOBALS['__routes']));
    }
    
}