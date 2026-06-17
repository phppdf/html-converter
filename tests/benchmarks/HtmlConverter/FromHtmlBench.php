<?php

declare(strict_types=1);

namespace PhpPdf\Html\HtmlConverter;

use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverter;

#[Bench\BeforeMethods('setUp')]
final class FromHtmlBench
{
    private string $html;

    public function setUp(): void
    {
        $this->html = "<html>"
            . "    <head>"
            . "        <style>"
            . "            h1 { color: #333366; text-align: center; }"
            . "            p { line-height: 1.5; }"
            . "            .highlight { background-color: yellow; }"
            . "            table { border-collapse: collapse; }"
            . "        </style>"
            . "    </head>"
            . "    <body>"
            . "        <h1>Quarterly Report</h1>"
            . "        <p>This report summarises performance across all regions for the quarter."
            . "           <strong>Revenue</strong> grew by <em>12%</em> year over year.</p>"
            . "        <p class=\"highlight\">Key takeaway: customer retention improved significantly.</p>"
            . "        <ul>"
            . "            <li>North America: +8%</li>"
            . "            <li>Europe: +15%</li>"
            . "            <li>Asia Pacific: +10%</li>"
            . "        </ul>"
            . "        <table border=\"1\">"
            . "            <thead>"
            . "                <tr><th>Region</th><th>Revenue</th><th>Growth</th></tr>"
            . "            </thead>"
            . "            <tbody>"
            . "                <tr><td>North America</td><td>$4.2M</td><td>8%</td></tr>"
            . "                <tr><td>Europe</td><td>$3.1M</td><td>15%</td></tr>"
            . "                <tr><td>Asia Pacific</td><td>$2.6M</td><td>10%</td></tr>"
            . "            </tbody>"
            . "        </table>"
            . "        <blockquote>\"A strong quarter across every region.\"</blockquote>"
            . "        <hr>"
            . "        <p>End of report.</p>"
            . "    </body>"
            . "</html>";
    }

    public function benchFromHtml(): void
    {
        HtmlConverter::fromHtml($this->html);
    }
}
