# Random Giphy Gif WordPress Plugin

This WordPress plugin displays a random GIF from Giphy based on a specified search phrase or defaulting to "hello world". The GIF resizes appropriately to fit the viewport on different devices.

## Features

- Fetches random GIFs from Giphy based on a search phrase
- Responsive design ensures GIFs fit the viewport on all devices
- Easy-to-use shortcode for displaying the GIF on any page or post

## Installation

1. **Download the Plugin:**
   - Clone the repository or download the ZIP file.

2. **Upload the Plugin to WordPress:**
   - Navigate to `wp-content/plugins` in your WordPress installation.
   - Create a new folder named `random-giphy-gif`.
   - Upload the contents of this repository to the `random-giphy-gif` folder.

3. **Activate the Plugin:**
   - Go to your WordPress admin dashboard.
   - Navigate to `Plugins > Installed Plugins`.
   - Activate the "Random Giphy Gif" plugin.

## Usage

1. **Get a Giphy API Key:**
   - Sign up for an API key at [Giphy Developers](https://developers.giphy.com/).

2. **Add the Shortcode to a Page or Post:**
   - Edit the page or post where you want to display the GIF.
   - Add the shortcode `[random_giphy_gif]` to the content.
   - Optionally, you can specify a different search term using the `search` attribute, e.g., `[random_giphy_gif search="funny cat"]`.

## Customization

### Change the Search Phrase

You can change the search phrase directly in the shortcode. For example, to search for "funny cat" GIFs, use:
```php
[random_giphy_gif search="funny cat"]
