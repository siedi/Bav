<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemC4.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemC4Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('19', '292932', '9000420530', '9000577650');

        foreach ($validAccounts as $account) {
            $validator = new SystemC4($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('17', '292933', '9000732000');

        foreach ($validAccounts as $account) {
            $validator = new SystemC4($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}