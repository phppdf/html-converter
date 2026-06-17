<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlFontFamily;

use PhpBench\Attributes as Bench;
use PhpPdf\Builder\PdfPageBuilder;
use PhpPdf\Html\HtmlFontFamily;

#[Bench\BeforeMethods('setUp')]
final class RegisterVariantOnPageBench
{
    private HtmlFontFamily $family;
    private PdfPageBuilder $page;

    public function setUp(): void
    {
        $this->family = HtmlFontFamily::type1(
            'Helvetica',
            'Helvetica-Bold',
            'Helvetica-Oblique',
            'Helvetica-BoldOblique',
        );
        $this->page = new PdfPageBuilder();
    }

    public function benchRegisterVariantOnPage(): void
    {
        $this->family->registerVariantOnPage($this->page, 'F0N', false, false);
    }
}
