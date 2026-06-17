<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\StyleResolver;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverterConfig;
use PhpPdf\Html\Internal\CssParser;
use PhpPdf\Html\Internal\StyleResolver;

#[Bench\BeforeMethods('setUp')]
final class ConstructBench
{
    /** @var array<string, array<string, string>> */
    private array $rules;
    private HtmlConverterConfig $config;

    public function setUp(): void
    {
        $this->rules = CssParser::parseStylesheet('h1 { color: #336699; } p { line-height: 1.5; }');
        $this->config = new HtmlConverterConfig();
    }

    public function benchConstruct(): void
    {
        new StyleResolver($this->rules, $this->config);
    }
}
