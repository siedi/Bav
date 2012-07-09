<?php

namespace Bav\Validator\De;

/**
 * Test class for System86.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System86Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('340968', '1001171', '123897', '340960');

        foreach ($validAccounts as $account) {
            $validator = new System86($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('223456600', '45555555');

        foreach ($validAccounts as $account) {
            $validator = new System86($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}