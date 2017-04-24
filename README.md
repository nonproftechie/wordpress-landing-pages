# wordpress-landing-pages
Custom Wordpress landing page templates built on Bootstrap

### Configuration
#### Main image
The imagery is defined via the page's featured media.
#### Colors and fonts
You can dynamically define the color scheme and Google fonts at the top of the theme file.  Here is an example:
```php
<?php

/**
  * Template name: Split Style Landing Page
  */
$wplp_color_background = "#fff";
$wplp_color_text       = "#333";
$wplp_color_accent     = "#4caf50";
$wplp_font_title       = "Merriweather";
$wplp_font_body        = "Open Sans";

?><!DOCTYPE HTML>
...```
