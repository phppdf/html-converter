<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlFontFamily;

use PhpPdf\Html\HtmlFontFamily;

final class Type1Bench
{
    public function benchType1(): void
    {
        HtmlFontFamily::type1(
            'Helvetica',
            'Helvetica-Bold',
            'Helvetica-Oblique',
            'Helvetica-BoldOblique',
        );
    }
}
