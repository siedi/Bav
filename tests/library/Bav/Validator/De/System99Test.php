<?php

namespace Bav\Validator\De;

/**
 * Test class for System99.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System99Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('68007003', '847321750', '499999998');

        foreach ($validAccounts as $account) {
            $validator = new System99($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new System99($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}