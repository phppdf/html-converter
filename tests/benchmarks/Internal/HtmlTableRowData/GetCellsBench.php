<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableRowData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableCellData;
use PhpPdf\Html\Internal\HtmlTableRowData;

#[Bench\BeforeMethods('setUp')]
final class GetCellsBench
{
    private HtmlTableRowData $row;

    public function setUp(): void
    {
        $this->row = new HtmlTableRowData();
        $this->row->addCell(new HtmlTableCellData());
    }

    public function benchGetCells(): void
    {
        $this->row->getCells();
    }
}
