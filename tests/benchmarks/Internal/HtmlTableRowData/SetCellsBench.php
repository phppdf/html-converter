<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlTableRowData;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\Internal\HtmlTableCellData;
use PhpPdf\Html\Internal\HtmlTableRowData;

#[Bench\BeforeMethods('setUp')]
final class SetCellsBench
{
    private HtmlTableRowData $row;

    /** @var array<\PhpPdf\Html\Internal\HtmlTableCellData> */
    private array $cells;

    public function setUp(): void
    {
        $this->row = new HtmlTableRowData();
        $this->row->addCell(new HtmlTableCellData());
        $this->cells = [new HtmlTableCellData(), new HtmlTableCellData()];
    }

    public function benchSetCells(): void
    {
        $this->row->setCells($this->cells);
    }
}
