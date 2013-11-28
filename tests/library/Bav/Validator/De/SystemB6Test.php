<?php

namespace Bav\Validator\De;

use Bav\Bank\Bank;

/**
 * Test class for SystemB6.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemB6Test extends \Bav\Test\SystemTestCase
{
    
    public function testWithValidAccountReturnsTrue()
    {
        $bank = new Bank('80053782', 'B6');
        $validAccounts = array('9110000000', '0269876545', '487310018');

        foreach ($validAccounts as $account) {
            $validator = new SystemB6($bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $bank = new \Bav\Bank\Bank('80053782', 'B6');
        $invalidAccounts = array('9111000000', '0269456780');

        foreach ($invalidAccounts as $account) {
            $validator = new SystemB6($bank);
            $this->assertFalse($validator->isValid($account));
        }
        
        $bank = new \Bav\Bank\Bank('80053762', 'B6');
        $validator = new SystemB6($bank);
        $this->assertFalse($validator->isValid('467310018'));
    }
}
