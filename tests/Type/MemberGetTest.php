<?php

namespace MarcusJaschen\Collmex\Tests\Type;

use MarcusJaschen\Collmex\Type\AbstractType;
use MarcusJaschen\Collmex\Type\MemberGet;
use MarcusJaschen\Collmex\Type\TypeInterface;
use PHPUnit\Framework\TestCase;

class MemberGetTest extends TestCase
{
    /**
     * @test
     */
    public function isAbstractType()
    {
        $subject = new MemberGet([]);

        self::assertInstanceOf(AbstractType::class, $subject);
    }

    /**
     * @test
     */
    public function implementsTypeInterface()
    {
        $subject = new MemberGet([]);

        self::assertInstanceOf(TypeInterface::class, $subject);
    }
}