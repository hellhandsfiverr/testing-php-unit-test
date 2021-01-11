<?php

namespace AllDigitalRewards\Tests;

use AllDigitalRewards\TransactionSourceEnum\TransactionSourceEnum;
use PHPUnit\Framework\TestCase;

class TransactionSourceEnumTest extends TestCase
{
    public function testReturnsAvailableSources()
    {
        $this->assertSame('AUTO_REDEMPTION', (new TransactionSourceEnum)::AUTO_REDEMPTION);
        $this->assertSame('MARKETPLACE', (new TransactionSourceEnum)::MARKETPLACE);
        $this->assertSame('REDEMPTION_CAMPAIGNS', (new TransactionSourceEnum)::REDEMPTION_CAMPAIGNS);
        $this->assertSame('GAMES', (new TransactionSourceEnum)::GAMES);
    }
}
