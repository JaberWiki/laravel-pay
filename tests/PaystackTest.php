<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Mohammad Jaber
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JaberWiki\Paystack\Test;

use Mockery as m;
use GuzzleHttp\Client;
use PHPUnit_Framework_TestCase;
use JaberWiki\Paystack\Paystack;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Facade as Facade;

class PaystackTest extends PHPUnit_Framework_TestCase
{
    protected $paystack;

    public function setUp()
    {
        $this->paystack = m::mock('JaberWiki\Paystack\Paystack');
        $this->mock = m::mock('GuzzleHttp\Client');
    }

    public function tearDown()
    {
        m::close();
    }

    public function testAllCustomersAreReturned()
    {
        $array = $this->paystack->shouldReceive('getAllCustomers')->andReturn(['prosper']);

        $this->assertEquals('array', gettype(array($array)));
    }

    public function testAllTransactionsAreReturned()
    {
        $array = $this->paystack->shouldReceive('getAllTransactions')->andReturn(['transactions']);

        $this->assertEquals('array', gettype(array($array)));
    }

    public function testAllPlansAreReturned()
    {
        $array = $this->paystack->shouldReceive('getAllPlans')->andReturn(['intermediate-plan']);

        $this->assertEquals('array', gettype(array($array)));
    }
}
