<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlFontFamily;

use PhpBench\Attributes as Bench;
use PhpPdf\Font\TrueTypeFont;
use PhpPdf\Html\HtmlFontFamily;
use PhpPdf\Html\MinimalFontBuilder;

#[Bench\BeforeMethods('setUp')]
final class TrueTypeBench
{
    private TrueTypeFont $font;

    public function setUp(): void
    {
        $this->font = TrueTypeFont::fromData(MinimalFontBuilder::build());
    }

    public function benchTrueType(): void
    {
        HtmlFontFamily::trueType($this->font);
    }
}
