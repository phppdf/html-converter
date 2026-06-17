<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlFontFamily;

use PhpPdf\Html\HtmlFontFamily;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(HtmlFontFamily::class)]
#[CoversMethod(HtmlFontFamily::class, 'isEmbedded')]
final class IsEmbeddedTest extends TestCase
{
    #[Test]
    public function returnsFalseForType1Family(): void
    {
        // Arrange / Act
        $family = HtmlFontFamily::type1('Helvetica');

        // Assert
        self::assertFalse($family->isEmbedded());
    }
}
