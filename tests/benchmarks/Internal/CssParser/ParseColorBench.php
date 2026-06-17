<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\CssParser;

use PhpPdf\Html\Internal\CssParser;

final class ParseColorBench
{
    public function benchParseColor(): void
    {
        CssParser::parseColor('#336699');
    }
}
