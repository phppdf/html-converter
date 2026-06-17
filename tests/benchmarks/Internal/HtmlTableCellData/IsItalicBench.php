<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableCellData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableCellData;

#[Bench\BeforeMethods('setUp')]
final class IsItalicBench
{
    private HtmlTableCellData $cell;

    public function setUp(): void
    {
        $this->cell = new HtmlTableCellData();
        $this->cell->setText('Revenue');
    }

    public function benchIsItalic(): void
    {
        $this->cell->isItalic();
    }
}
