<?php

namespace MarcusJaschen\Collmex\Tests\Type;

use MarcusJaschen\Collmex\Type\AbstractType;
use MarcusJaschen\Collmex\Type\TrackingNumber;
use MarcusJaschen\Collmex\Type\TypeInterface;
use PHPUnit\Framework\TestCase;

class TrackingNumberTest extends TestCase
{
    /**
     * @test
     */
    public function isAbstractType()
    {
        $subject = new TrackingNumber([]);

        self::assertInstanceOf(AbstractType::class, $subject);
    }

    /**
     * @test
     */
    public function implementsTypeInterface()
    {
        $subject = new TrackingNumber([]);

        self::assertInstanceOf(TypeInterface::class, $subject);
    }
}