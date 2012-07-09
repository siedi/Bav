<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemC9.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemC9Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('3456789019', '5678901231', '123456789');

        foreach ($validAccounts as $account) {
            $validator = new SystemC9($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('3456789012', '1234567890');

        foreach ($validAccounts as $account) {
            $validator = new SystemC9($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}