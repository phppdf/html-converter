<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableRowData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableCellData;
use PhpPdf\Html\Internal\HtmlTableRowData;

#[Bench\BeforeMethods('setUp')]
final class SetBackgroundColorBench
{
    private HtmlTableRowData $row;

    public function setUp(): void
    {
        $this->row = new HtmlTableRowData();
        $this->row->addCell(new HtmlTableCellData());
    }

    public function benchSetBackgroundColor(): void
    {
        $this->row->setBackgroundColor([0.9, 0.9, 0.9]);
    }
}
