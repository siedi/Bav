<?php

namespace Bav\Backend;

/**
 * Test class for BundesbankFile.
 * Generated by PHPUnit on 2012-07-05 at 13:50:09.
 */
class BundesbankFileTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var BundesbankFile
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $path = '/../../../data/blz_2012_06_04_txt.txt';
        str_replace('/', DIRECTORY_SEPARATOR, $path);
        $this->object = new BankDataResolver(__DIR__ . $path);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public function testGetBank()
    {
        $bank = $this->object->getBank('20090500');
        
        $this->assertEquals('20090500', $bank->getBankId());
        $this->assertEquals(1, count($bank->getAgencies()));
        $this->assertEquals('GENODEF1S15', $bank->getMainAgency()->getBic());
    }


}