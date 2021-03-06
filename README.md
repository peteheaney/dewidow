# DeWidow plugin for Craft 3

A Twig filter for Craft 3 to remove text widows.

By replacing the space between the last two words in a string with `&nbsp;`, this filter will prevent widows on any field containing text.

## Requirements

This plugin requires Craft 3.

## Installation

To install the plugin:

1. open your terminal and go to your Craft project:

   `cd /path/to/project`

2. tell Composer to load the plugin:

   ```
    composer require peteheaney/dewidow
   ```

3. In the Control Panel, go to Settings → Plugins and click the "Install" button for DeWidow.

## Using DeWidow

Simply add the `dewidow` filter to any field containing text and it will remove widows from the text.

```twig
{{ myTextField | dewidow | raw }}
```
