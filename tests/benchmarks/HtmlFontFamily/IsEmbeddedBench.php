<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlFontFamily;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlFontFamily;

#[Bench\BeforeMethods('setUp')]
final class IsEmbeddedBench
{
    private HtmlFontFamily $family;

    public function setUp(): void
    {
        $this->family = HtmlFontFamily::type1(
            'Helvetica',
            'Helvetica-Bold',
            'Helvetica-Oblique',
            'Helvetica-BoldOblique',
        );
    }

    public function benchIsEmbedded(): void
    {
        $this->family->isEmbedded();
    }
}
