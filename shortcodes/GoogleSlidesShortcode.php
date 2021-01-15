<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class GoogleSlidesShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getRawHandlers()->add('googleslides', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $googleslidesurl= $sc->getParameter('url', $sc->getBbCode());

            if ($googleslidesurl) {
                $output = '<div class="grav-youtube"><iframe src="'.$googleslidesurl.'" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div>';

                return $output;

            } else {

              if ($str) {

                  return '<div class="grav-youtube"><iframe src="'.$str.'" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div>';

              }
            }

        });
    }
}
