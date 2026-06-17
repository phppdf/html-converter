<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\LayoutBlock;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\ComputedStyle;
use PhpPdf\Html\Internal\LayoutBlock;
use PhpPdf\Html\Internal\LayoutBlockType;

#[Bench\BeforeMethods('setUp')]
final class ConstructBench
{
    private ComputedStyle $style;

    public function setUp(): void
    {
        $this->style = new ComputedStyle('helvetica', 11.0);
    }

    public function benchConstruct(): void
    {
        new LayoutBlock(LayoutBlockType::Text, $this->style, 'Hello World');
    }
}
