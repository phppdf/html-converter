<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlConverterConfig;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverterConfig;

#[Bench\BeforeMethods('setUp')]
final class SetLineHeightMultiplierBench
{
    private HtmlConverterConfig $config;

    public function setUp(): void
    {
        $this->config = new HtmlConverterConfig();
    }

    public function benchSetLineHeightMultiplier(): void
    {
        $this->config->setLineHeightMultiplier(1.5);
    }
}
