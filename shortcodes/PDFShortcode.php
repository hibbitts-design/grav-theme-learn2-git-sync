<?php
namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class PDFShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('pdf', function(ShortcodeInterface $sc) {

            // Get shortcode content and parameters
            $str = $sc->getContent();

            $pdfurl= $sc->getParameter('url', $sc->getBbCode());

            if ($pdfurl) {
                $output = '<p><div class="grav-youtube"><iframe src="https://docs.google.com/gview?url='.$pdfurl.'&embedded=true" width="640" height="480"></iframe></div></p>';

                return $output;

              } else {

                if ($str) {

                    return '<p><div class="grav-youtube"><iframe src="https://docs.google.com/gview?url='.$str.'&embedded=true" width="640" height="480"></iframe></div></p>';

                }

            }

        });
    }
}
