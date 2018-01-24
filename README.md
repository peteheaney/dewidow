# DeWidow plugin for Craft CMS 3

A Twig filter for Craft CMS 3 to remove text widows

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

3. In the Control Panel, go to Settings → Plugins and click the "Install" button for Gobble.

## Using DeWidow

Simple add the `dewidow` filter to any field containing text and it will remove widows from the text.

```twig
{{ myTextField | dewidow | raw }}
```
