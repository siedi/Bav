<?php

namespace Bav\Validator\De;

/**
 * Test class for System79.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System79Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('3230012688', '4230028872', '5440001898');

        foreach ($validAccounts as $account) {
            $validator = new System79($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('223456600', '45555555');

        foreach ($validAccounts as $account) {
            $validator = new System79($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}