---
title: "Supported HTML & CSS"
weight: 20
---

`HtmlConverter::fromHtml()` performs two passes:

1. Parse HTML with PHP's `DOMDocument` (libxml2). Extract embedded `<style>` rules and walk the DOM to collect layout blocks.
2. Measure each block against the configured font metrics and flow the blocks into pages, appending one page per `PdfPageBuilder` to the returned `PdfDocumentBuilder`.

## Elements

| Category | Elements |
|---|---|
| Block | `p` `div` `h1`–`h6` `section` `article` `header` `footer` `main` `nav` `aside` `blockquote` `address` |
| Lists | `ul` `ol` `li` |
| Inline | `strong` `b` `em` `i` `span` `a` `code` `abbr` `br` |
| Special | `hr` |
| Table | `table` `thead` `tbody` `tfoot` `tr` `th` `td`, including `colspan` / `rowspan` |

Table cells support per-cell `background-color`, `color`, `text-align`, `font-weight`, and `font-style`. Header rows are bold and grey by default.

## CSS

Both `<style>` blocks and inline `style=""` attributes are parsed. Element and class selectors are supported.

Supported properties:

- `color`
- `background-color`
- `font-size`
- `font-weight`
- `font-style`
- `font-family`
- `text-align`
- `margin` (all shorthands) and `margin-top` / `margin-bottom` / `margin-left`
- `padding` and `padding-left`
- `line-height`

## Known limitations

- Mixed inline styles within a single block are not supported; inline bold/italic elements propagate to the whole block.
- Images (`<img>`) are not rendered.
- Table column widths are always equally distributed; `<col>` widths and percentage widths are not yet respected.
- Text blocks are not split across page boundaries; a block that exceeds the remaining page space is moved to the next page intact.
