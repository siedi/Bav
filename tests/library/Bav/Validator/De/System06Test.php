<?php

namespace Bav\Validator\De;

/**
 * Test class for System06.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System06Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('94012341', '5073321010');

        foreach ($validAccounts as $account) {
            $validator = new System06($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('9290709', '539290857');

        foreach ($validAccounts as $account) {
            $validator = new System06($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}