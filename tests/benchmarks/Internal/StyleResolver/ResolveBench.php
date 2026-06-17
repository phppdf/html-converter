<?php

declare(strict_types=1);

namespace PhpPdf\Html\Internal\StyleResolver;

use DOMDocument;
use DOMElement;
use PhpBench\Attributes as Bench;
use PhpPdf\Html\HtmlConverterConfig;
use PhpPdf\Html\Internal\ComputedStyle;
use PhpPdf\Html\Internal\CssParser;
use PhpPdf\Html\Internal\StyleResolver;

#[Bench\BeforeMethods('setUp')]
final class ResolveBench
{
    private StyleResolver $resolver;
    private DOMElement $node;
    private ComputedStyle $parent;

    public function setUp(): void
    {
        $rules = CssParser::parseStylesheet('h1 { color: #336699; } .highlight { background-color: yellow; }');
        $config = new HtmlConverterConfig();
        $this->resolver = new StyleResolver($rules, $config);

        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->loadHTML('<h1 class="highlight" style="text-align: center;">Title</h1>');
        $node = $dom->getElementsByTagName('h1')->item(0);
        assert($node instanceof DOMElement);
        $this->node = $node;

        $this->parent = new ComputedStyle('helvetica', 11.0);
    }

    public function benchResolve(): void
    {
        $this->resolver->resolve($this->node, $this->parent);
    }
}
