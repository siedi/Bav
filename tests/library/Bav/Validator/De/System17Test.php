<?php

namespace Bav\Validator\De;

/**
 * Test class for System17.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System17Test extends SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('0446786040');

        foreach ($validAccounts as $account) {
            $validator = new System17($this->bankId);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('1000805', '539290859');

        foreach ($validAccounts as $account) {
            $validator = new System17($this->bankId);
            $this->assertFalse($validator->isValid($account));
        }
    }

}