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

            if ($h5purl) {
                $output = '<p><iframe src="'.$h5purl.'" width="400" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script></p>';

                return $output;

            } else {

                if ($str) {
                    $output = '<p><iframe src="'.$str.'" width="400" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe><script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script></p>';

                    return $output;
                }

            }

        });
    }
}
