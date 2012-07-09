<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemB0.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemB0Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = explode(', ', '1197423162, 1000000406');

        foreach ($validAccounts as $account) {
            $validator = new SystemB0($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new SystemB0($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}