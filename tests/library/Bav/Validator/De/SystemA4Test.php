<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemA4.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemA4Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('4711173', '4711172', '1199503010', '862342');

        foreach ($validAccounts as $account) {
            $validator = new SystemA4($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new SystemA4($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}