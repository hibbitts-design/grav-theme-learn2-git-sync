<?php
namespace Grav\Theme;

use Grav\Common\Grav;
use Grav\Common\Theme;

class Learn2GitSync extends Learn2
{
    /**
     * Initialize plugin and subsequent events
     * 
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0]
        ];
    }

    /**
     * Register events and route with Grav
     * 
     * @return void
     */
    public function onThemeInitialized()
    {
        /* Check if Admin-interface */
        if (!$this->isAdmin()) {
            $this->enable(
                [
                    'onPageInitialized' => ['onPageInitialized', 0]
                ]
            );
        }
    }

    /**
     * Get default category setting
     * 
     * @return string
     */
    public static function getdefaulttaxonomycategory()
    {
        $config = Grav::instance()['config'];
        return $config->get('themes.' . $config->get('system.pages.theme'). '.default_taxonomy_category');
    }

    /**
     * Handle CSS
     * 
     * @return void
     */
    public function onPageInitialized()
    {
        $assets = $this->grav['assets'];
        $config = $this->config();
        if (isset($config['style'])) {
            $style = $config['style'];
            if ($style == 'default') {
                $style = 'theme';
            }
            $current = self::fileFinder(
                $style,
                '.css',
                'theme://css/styles',
                'theme://css'
            );
            $assets->addCss($current, 101);
        }
    }

    /**
     * Search for a file in multiple locations
     *
     * @param string $file         Filename.
     * @param string $ext          File extension.
     * @param array  ...$locations List of paths.
     * 
     * @return string
     */
    public static function fileFinder($file, $ext, ...$locations)
    {
        $return = false;
        foreach ($locations as $location) {
            if (file_exists($location . '/' . $file . $ext)) {
                $return = $location . '/' . $file . $ext;
                break;
            }
        }
        return $return;
    }
}
?>
