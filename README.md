# ImagePop

ImagePop opens images in DokuWiki page content in a gallery overlay. Images rendered on the same page can be browsed together. No image syntax options such as `?direct` are required.

## Features

- Click any image in page content to open it in the overlay.
- Browse page images with previous and next buttons, keyboard arrows, or the thumbnail strip.
- Zoom with the plus/minus controls, mouse wheel, or `+` and `-` keys. Drag to pan while zoomed; press `0` to reset.
- Close with Escape or by clicking the dark area around the image.
- Captions use the image's `title` or `alt` text.
- Works with images in the main page and content loaded into Simpl panes.

## Installation

Install the `imagepop` directory under `lib/plugins/imagepop` and enable **ImagePop** in DokuWiki's Extension Manager if it is not enabled automatically. The plugin has no external JavaScript or CSS dependencies.

ImagePop works without Simpl. Simpl provides a stacking-order variable so the overlay appears above its pane and edit overlays.
