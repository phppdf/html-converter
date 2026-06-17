<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableData;
use PhpPdf\Html\Internal\HtmlTableRowData;

#[Bench\BeforeMethods('setUp')]
final class SetRowsBench
{
    private HtmlTableData $table;

    /** @var array<\PhpPdf\Html\Internal\HtmlTableRowData> */
    private array $newRows;

    public function setUp(): void
    {
        $this->table = new HtmlTableData();
        $this->table->setColumnWidths([100.0, 150.0, 80.0]);
        $this->table->addRow(new HtmlTableRowData());
        $this->newRows = [new HtmlTableRowData(), new HtmlTableRowData()];
    }

    public function benchSetRows(): void
    {
        $this->table->setRows($this->newRows);
    }
}
