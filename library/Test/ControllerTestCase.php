<?php
abstract class Test_ControllerTestCase extends Zend_Test_PHPUnit_ControllerTestCase
{
    protected function setUp()
    {
        $this->bootstrap=array($this, 'appBootstrap');
        Zend_Auth::getInstance()->setStorage(new Zend_Auth_Storage_NonPersistent());
        parent::setUp();
    }

    protected function tearDown()
    {
        Zend_Auth::getInstance()->clearIdentity();
    }

    protected function appBootstrap()
    {
        Application::setup();
    }
}
