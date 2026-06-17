---
title: "Getting started"
weight: 10
---

## Installation

```bash
composer require phppdf/html-converter
```

## Your first PDF from HTML

```php
use PhpPdf\Html\HtmlConverter;
use PhpPdf\Output\PdfMemoryOutput;
use PhpPdf\Serialization\PdfDocumentSerializer;

$html = '<h1>Hello World</h1><p>Welcome to the PDF.</p>';

$builder = HtmlConverter::fromHtml($html);
$document = $builder->build();

$output = new PdfMemoryOutput();
(new PdfDocumentSerializer($output))->writeDocument($document);

header('Content-Type: application/pdf');
echo $output->getContent();
```

## Custom layout

```php
use PhpPdf\Html\HtmlConverter;
use PhpPdf\Html\HtmlConverterConfig;

$config = new HtmlConverterConfig();
$config->setMarginTop(54)->setMarginBottom(54);
$config->setBaseFontSize(10);

$builder = HtmlConverter::fromHtml($html, $config);
```

Because `HtmlConverter::fromHtml()` returns a plain `PdfDocumentBuilder` from [phppdf/phppdf](https://github.com/phppdf/phppdf), you can:

- Prepend / append additional pages
- Add metadata, encryption, outlines, or digital signatures
- Apply compression
- Mix hand-crafted pages with the HTML-generated ones

## Custom fonts

Register additional font families (including embedded TrueType / OpenType fonts):

```php
use PhpPdf\Font\TrueTypeFont;
use PhpPdf\Html\HtmlConverterConfig;
use PhpPdf\Html\HtmlFontFamily;

$config = new HtmlConverterConfig();
$config->registerFontFamily(
    ['roboto', 'sans-serif'], // first name is primary
    HtmlFontFamily::trueType(
        TrueTypeFont::fromFile('/fonts/Roboto-Regular.ttf'),
        TrueTypeFont::fromFile('/fonts/Roboto-Bold.ttf'),
        TrueTypeFont::fromFile('/fonts/Roboto-Italic.ttf'),
        TrueTypeFont::fromFile('/fonts/Roboto-BoldItalic.ttf'),
    ),
);
$config->setDefaultFontFamily('roboto');

// HTML / CSS can now use:
// font-family: roboto;
// font-family: Roboto, sans-serif;
```

## Next steps

- [Supported HTML & CSS](../supported-html/) — elements, attributes, and styles understood by the converter
