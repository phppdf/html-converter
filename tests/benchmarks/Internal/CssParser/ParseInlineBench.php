<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\CssParser;

use PhpPdf\Html\Internal\CssParser;

final class ParseInlineBench
{
    public function benchParseInline(): void
    {
        CssParser::parseInline('color: red; font-size: 14px; font-weight: bold; margin: 4px 8px;');
    }
}
