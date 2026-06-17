<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\MeasuredBlock;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\ComputedStyle;
use PhpPdf\Html\Internal\LayoutBlock;
use PhpPdf\Html\Internal\LayoutBlockType;
use PhpPdf\Html\Internal\MeasuredBlock;

#[Bench\BeforeMethods('setUp')]
final class GetMarginTopBench
{
    private LayoutBlock $block;
    private MeasuredBlock $measured;

    public function setUp(): void
    {
        $style = new ComputedStyle('helvetica', 11.0);
        $this->block = new LayoutBlock(LayoutBlockType::Text, $style, 'Hello World');
        $this->measured = new MeasuredBlock($this->block, 20.0, 8.0, 8.0);
    }

    public function benchGetMarginTop(): void
    {
        $this->measured->getMarginTop();
    }
}
