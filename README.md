# oEmbed plugin for Craft CMS 3.x

A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

If use are looking for CraftCMS 2.5 support use [version 1.0.4](https://github.com/hut6/oembed/tree/1.0.4) 
which is the latest release for CraftCMS 2.5.

## Installing

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require hut6/oembed

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for oEmbed.

## Using oEmbed

To use simply call the `embed` method on your field type

    {{ entry.fieldType.render }}
    
We also provide option to use as a Twig variable

    {{ craft.oembed.render(url, options) }}
    
You can access additional media details using the examples below.

    field.media.type
    field.media.version
    field.media.url
    field.media.title
    field.media.description
    field.media.authorName
    field.media.authorUrl
    field.media.providerName
    field.media.providerUrl
    field.media.cacheAge
    field.media.thumbnailUrl
    field.media.thumbnailWidth
    field.media.thumbnailHeight
    field.media.html
    field.media.width
    field.media.height
    
Additional Essense information can be found [here](https://github.com/essence/essence)

## Change Log

Changes can be viewed [here](https://github.com/hut6/oembed/blob/master/CHANGELOG.md)
