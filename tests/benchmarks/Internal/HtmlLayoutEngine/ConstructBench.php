<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlLayoutEngine;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverterConfig;
use PhpPdf\Html\Internal\CssParser;
use PhpPdf\Html\Internal\HtmlLayoutEngine;
use PhpPdf\Html\Internal\StyleResolver;

#[Bench\BeforeMethods('setUp')]
final class ConstructBench
{
    private HtmlConverterConfig $config;
    private StyleResolver $resolver;

    public function setUp(): void
    {
        $this->config = new HtmlConverterConfig();
        $this->resolver = new StyleResolver(CssParser::parseStylesheet(''), $this->config);
    }

    public function benchConstruct(): void
    {
        new HtmlLayoutEngine($this->config, $this->resolver);
    }
}
