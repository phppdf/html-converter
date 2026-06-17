<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\CssParser;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\CssParser;

#[Bench\BeforeMethods('setUp')]
final class ParseStylesheetBench
{
    private string $css;

    public function setUp(): void
    {
        $this->css = <<<'CSS'
            h1, h2, h3 { color: #333366; font-weight: bold; }
            p { line-height: 1.5; margin-bottom: 8px; }
            .highlight { background-color: yellow; }
            table { border-collapse: collapse; }
            td, th { padding: 4px 6px; text-align: left; }
            CSS;
    }

    public function benchParseStylesheet(): void
    {
        CssParser::parseStylesheet($this->css);
    }
}
