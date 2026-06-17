<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlConverterConfig;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverterConfig;
use PhpPdf\Html\HtmlFontFamily;

#[Bench\BeforeMethods('setUp')]
final class RegisterFontFamilyBench
{
    private HtmlConverterConfig $config;

    public function setUp(): void
    {
        $this->config = new HtmlConverterConfig();
    }

    public function benchRegisterFontFamily(): void
    {
        $this->config->registerFontFamily(
            ['roboto', 'sans-serif'],
            HtmlFontFamily::type1('Helvetica', 'Helvetica-Bold', 'Helvetica-Oblique', 'Helvetica-BoldOblique'),
        );
    }
}
