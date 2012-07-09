<?php

namespace Bav\Validator\De;

/**
 * Test class for System00.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System00Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('9290701', '539290858', '1501824', '1501832');

        foreach ($validAccounts as $account) {
            $validator = new System00($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('3290701', '539290990', '1101824', '1000802');

        foreach ($validAccounts as $account) {
            $validator = new System00($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}