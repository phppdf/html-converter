<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\ComputedStyle;

use PhpPdf\Html\Internal\ComputedStyle;

final class ConstructBench
{
    public function benchConstruct(): void
    {
        new ComputedStyle('helvetica', 11.0);
    }
}
