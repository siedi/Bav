<?php

namespace Bav\Validator\De;

/**
 * Test class for System84.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System84Test extends \PHPUnit_Framework_TestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('100005', '393814');

        foreach ($validAccounts as $account) {
            $validator = new System84();
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('2236600', '45575555');

        foreach ($validAccounts as $account) {
            $validator = new System84();
            $this->assertFalse($validator->isValid($account));
        }
    }

}