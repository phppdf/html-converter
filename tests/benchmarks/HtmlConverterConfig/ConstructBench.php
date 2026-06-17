<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlConverterConfig;

use PhpPdf\Html\HtmlConverterConfig;

final class ConstructBench
{
    public function benchConstruct(): void
    {
        new HtmlConverterConfig();
    }
}
