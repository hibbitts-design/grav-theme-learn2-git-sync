<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class GoogleSlidesShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('googleslides', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $googleslidesurl= $sc->getParameter('url', $sc->getBbCode());

            if ($googleslidesurl) {
                $output = '<p><div class="grav-youtube"><iframe src="'.$googleslidesurl.'" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div></p>';

                return $output;

            } else {

              if ($str) {

                  return '<p><div class="grav-youtube"><iframe src="'.$str.'" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div></p>';

              }
            }

        });
    }
}
