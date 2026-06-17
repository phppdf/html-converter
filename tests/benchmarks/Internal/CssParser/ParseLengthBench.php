<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\CssParser;

use PhpPdf\Html\Internal\CssParser;

final class ParseLengthBench
{
    public function benchParseLength(): void
    {
        CssParser::parseLength('1.5em', 12.0, 11.0);
    }
}
