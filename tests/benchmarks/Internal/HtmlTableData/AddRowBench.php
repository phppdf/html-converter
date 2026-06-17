<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableData;
use PhpPdf\Html\Internal\HtmlTableRowData;

#[Bench\BeforeMethods('setUp')]
final class AddRowBench
{
    private HtmlTableData $table;

    public function setUp(): void
    {
        $this->table = new HtmlTableData();
        $this->table->setColumnWidths([100.0, 150.0, 80.0]);
        $this->table->addRow(new HtmlTableRowData());
    }

    public function benchAddRow(): void
    {
        $this->table->addRow(new HtmlTableRowData());
    }
}
