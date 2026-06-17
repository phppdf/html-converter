<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableRowData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableCellData;
use PhpPdf\Html\Internal\HtmlTableRowData;

#[Bench\BeforeMethods('setUp')]
final class AddCellBench
{
    private HtmlTableRowData $row;

    public function setUp(): void
    {
        $this->row = new HtmlTableRowData();
        $this->row->addCell(new HtmlTableCellData());
    }

    public function benchAddCell(): void
    {
        $this->row->addCell(new HtmlTableCellData());
    }
}
