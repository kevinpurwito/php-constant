<?php

namespace Kevinpurwito\PhpConstant\Tests;

use Kevinpurwito\PhpConstant\PhpConstant;
use PHPUnit\Framework\TestCase;

// Class Extends PhpConstant to use its functions
class StatusConst extends PhpConstant
{
    const PENDING = 'pending';
    const IN_PROCESS = 'in_process';
    const COMPLETED = 'completed';
}

class PhpConstantTest extends TestCase
{
    /** @test */
    public function it_returns_constants_as_array()
    {
        $statuses = StatusConst::all();
        $this->assertTrue(is_array($statuses));
        $this->assertTrue(in_array(StatusConst::PENDING, $statuses));
        $this->assertTrue(in_array(StatusConst::IN_PROCESS, $statuses));
        $this->assertTrue(in_array(StatusConst::COMPLETED, $statuses));
    }

    /** @test */
    public function it_returns_constants_as_options()
    {
        $statuses = StatusConst::options();
        $this->assertTrue(is_array($statuses));
        $this->assertTrue($statuses[StatusConst::PENDING] == ucwords(str_replace('_', ' ', StatusConst::PENDING)));
        $this->assertTrue($statuses[StatusConst::IN_PROCESS] == ucwords(str_replace('_', ' ', StatusConst::IN_PROCESS)));
        $this->assertTrue($statuses[StatusConst::COMPLETED] == ucwords(str_replace('_', ' ', StatusConst::COMPLETED)));
    }

    /** @test */
    public function it_returns_constants_as_string()
    {
        $statuses = StatusConst::asString();
        $this->assertTrue(is_string($statuses));
        $this->assertTrue(strpos($statuses, StatusConst::PENDING) !== false);
        $this->assertTrue(strpos($statuses, StatusConst::IN_PROCESS) !== false);
        $this->assertTrue(strpos($statuses, StatusConst::COMPLETED) !== false);
    }
}
