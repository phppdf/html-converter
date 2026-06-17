<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlConverterConfig;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverterConfig;

#[Bench\BeforeMethods('setUp')]
final class SetMarginRightBench
{
    private HtmlConverterConfig $config;

    public function setUp(): void
    {
        $this->config = new HtmlConverterConfig();
    }

    public function benchSetMarginRight(): void
    {
        $this->config->setMarginRight(54.0);
    }
}
