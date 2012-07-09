<?php

namespace Bav\Validator\De;

/**
 * Test class for System93.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System93Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('6714790000', '1277830000', '3067540000');

        foreach ($validAccounts as $account) {
            $validator = new System93($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('884089000', '8840096000');

        foreach ($validAccounts as $account) {
            $validator = new System93($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}