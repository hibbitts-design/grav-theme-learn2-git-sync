<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Grav;
use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class H5PShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('h5p', function(ShortcodeInterface $sc) {

        // Get shortcode content and parameters
        $str = $sc->getContent();

            $h5purl= $sc->getParameter('url', $sc->getBbCode());

            $h5psrc = $h5purl ?: $str;

            if ($h5psrc) {
                $this->grav['assets']->addJs('https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js');

                $output = '<p><iframe src="'.$h5psrc.'" width="400" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>';

                return $output;
            }

        });
    }
}
