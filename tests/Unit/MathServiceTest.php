<?php

namespace Tests\Unit;

use App\Http\Services\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    public function testRecursiveFactorial(): void
    {
        $number = 5;
        $recursiveFactorial = MathService::recursiveFactorial($number);

        $factorial = 1;
        for($i = $number; $i >= 1; $i--) {
            $factorial = $factorial * $i;
        }

        $this->assertEquals($recursiveFactorial, $factorial);
    }
}
