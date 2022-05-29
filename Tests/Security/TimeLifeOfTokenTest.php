<?php

namespace Double\Authentication\Component\Tests\Security;

use Double\Authentication\Component\Security\TimeLifeOfToken;
use PHPUnit\Framework\TestCase;

final class TimeLifeOfTokenTest extends TestCase
{
    public function testShouldReturnFalseTokenExpireAt(): void
    {
        $result = new TimeLifeOfToken();

        $this->assertFalse($result->isValid());
    }

    public function testShouldTrueTokenIsStillValid(): void
    {

    }
}