<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\LayoutBlock;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\ComputedStyle;
use PhpPdf\Html\Internal\LayoutBlock;
use PhpPdf\Html\Internal\LayoutBlockType;

#[Bench\BeforeMethods('setUp')]
final class GetTextBench
{
    private ComputedStyle $style;
    private LayoutBlock $block;

    public function setUp(): void
    {
        $this->style = new ComputedStyle('helvetica', 11.0);
        $this->block = new LayoutBlock(LayoutBlockType::Text, $this->style, 'Hello World');
    }

    public function benchGetText(): void
    {
        $this->block->getText();
    }
}
