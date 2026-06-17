<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\ComputedStyle;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\ComputedStyle;

#[Bench\BeforeMethods('setUp')]
final class SetLineHeightBench
{
    private ComputedStyle $style;

    public function setUp(): void
    {
        $this->style = new ComputedStyle('helvetica', 11.0);
    }

    public function benchSetLineHeight(): void
    {
        $this->style->setLineHeight(18.0);
    }
}
