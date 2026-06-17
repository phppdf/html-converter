<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\HtmlLayoutEngine;

use DOMDocument;
use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverterConfig;
use PhpPdf\Html\Internal\CssParser;
use PhpPdf\Html\Internal\HtmlLayoutEngine;
use PhpPdf\Html\Internal\StyleResolver;

#[Bench\BeforeMethods('setUp')]
final class CollectBench
{
    private HtmlLayoutEngine $engine;
    private DOMDocument $dom;

    public function setUp(): void
    {
        $config = new HtmlConverterConfig();
        $resolver = new StyleResolver(CssParser::parseStylesheet(''), $config);
        $this->engine = new HtmlLayoutEngine($config, $resolver);

        $this->dom = new DOMDocument('1.0', 'UTF-8');
        $this->dom->loadHTML("<html><body>"
            . "<h1>Quarterly Report</h1>"
            . "<p>This report summarises performance across all regions for the quarter."
            . "   <strong>Revenue</strong> grew by <em>12%</em> year over year.</p>"
            . "<ul><li>North America: +8%</li><li>Europe: +15%</li><li>Asia Pacific: +10%</li></ul>"
            . "<table border=\"1\"><thead><tr><th>Region</th><th>Revenue</th></tr></thead>"
            . "<tbody><tr><td>North America</td><td>$4.2M</td></tr>"
            . "<tr><td>Europe</td><td>$3.1M</td></tr></tbody></table>"
            . "<p>End of report.</p>"
            . "</body></html>");
    }

    public function benchCollect(): void
    {
        $this->engine->collect($this->dom);
    }
}
