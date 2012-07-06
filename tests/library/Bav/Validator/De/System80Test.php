<?php

namespace Bav\Validator\De;

/**
 * Test class for System80.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System80Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('340968', '340966');

        foreach ($validAccounts as $account) {
            $validator = new System80();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('223456600', '45555555');

        foreach ($validAccounts as $account) {
            $validator = new System80();
            $this->assertFalse($validator->isValid($account));
        }
    }

}