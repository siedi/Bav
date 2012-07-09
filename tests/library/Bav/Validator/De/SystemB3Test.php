<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemB3.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemB3Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('1000000060', '140');

        foreach ($validAccounts as $account) {
            $validator = new SystemB3($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new SystemB3($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}