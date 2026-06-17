<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\ComputedStyle;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\ComputedStyle;

#[Bench\BeforeMethods('setUp')]
final class SetFontSizeBench
{
    private ComputedStyle $style;

    public function setUp(): void
    {
        $this->style = new ComputedStyle('helvetica', 11.0);
    }

    public function benchSetFontSize(): void
    {
        $this->style->setFontSize(14.0);
    }
}
