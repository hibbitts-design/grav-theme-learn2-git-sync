<?php
namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;

class Learn2GitSync extends Learn2
{

  public static function getdefaulttaxonomycategory()
  {
    $config = Grav::instance()['config'];
    return $config->get('themes.' . $config->get('system.pages.theme'). '.default_taxonomy_category');
  }

}
?>
