# html-converter

Convert HTML and CSS into PDF documents on top of [phppdf/phppdf](https://github.com/phppdf/phppdf).

## Requirements

- PHP 8.4+
- `ext-dom`
- `ext-libxml`
- `ext-mbstring`

## Installation

```bash
composer require phppdf/html-converter
```

## Documentation

The documentation can be found here: https://phppdf.github.io/html-converter/

## Quick start

```php
use PhpPdf\Html\HtmlConverter;
use PhpPdf\Output\PdfMemoryOutput;
use PhpPdf\Serialization\PdfDocumentSerializer;

$html = '<h1>Hello World</h1><p>Welcome to the PDF.</p>';

$document = HtmlConverter::fromHtml($html)->build();

$output = new PdfMemoryOutput();
(new PdfDocumentSerializer($output))->writeDocument($document);

header('Content-Type: application/pdf');
echo $output->getContent();
```

Because `HtmlConverter::fromHtml()` returns a plain `PdfDocumentBuilder`, you can prepend or
append pages, add metadata/encryption/signatures, and apply compression before serialising.

## Examples

Working examples live in the [examples](https://github.com/phppdf/examples/tree/master/public/html) repository: https://github.com/phppdf/examples

## Development

```bash
composer install
composer phpunit
composer phpunit:coverage
composer phpcs
composer phpstan
```
