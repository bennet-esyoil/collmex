<?php

namespace MarcusJaschen\Collmex\Tests\Type;

use MarcusJaschen\Collmex\Type\AbstractType;
use MarcusJaschen\Collmex\Type\OpenItemsGet;
use MarcusJaschen\Collmex\Type\TypeInterface;
use PHPUnit\Framework\TestCase;

class OpenItemsGetTest extends TestCase
{
    /**
     * @test
     */
    public function isAbstractType()
    {
        $subject = new OpenItemsGet([]);

        self::assertInstanceOf(AbstractType::class, $subject);
    }

    /**
     * @test
     */
    public function implementsTypeInterface()
    {
        $subject = new OpenItemsGet([]);

        self::assertInstanceOf(TypeInterface::class, $subject);
    }
}