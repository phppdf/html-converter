<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableCellData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableCellData;
use PhpPdf\Text\TextAlign;

#[Bench\BeforeMethods('setUp')]
final class SetTextAlignBench
{
    private HtmlTableCellData $cell;

    public function setUp(): void
    {
        $this->cell = new HtmlTableCellData();
        $this->cell->setText('Revenue');
    }

    public function benchSetTextAlign(): void
    {
        $this->cell->setTextAlign(TextAlign::Right);
    }
}
