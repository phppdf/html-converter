<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\ComputedStyle;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\ComputedStyle;
use PhpPdf\Text\TextAlign;

#[Bench\BeforeMethods('setUp')]
final class SetTextAlignBench
{
    private ComputedStyle $style;

    public function setUp(): void
    {
        $this->style = new ComputedStyle('helvetica', 11.0);
    }

    public function benchSetTextAlign(): void
    {
        $this->style->setTextAlign(TextAlign::Center);
    }
}
