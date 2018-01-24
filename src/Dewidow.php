<?php
/**
 * DeWidow plugin for Craft CMS 3.x
 *
 * A Twig filter for Craft CMS 3 to remove text widows
 *
 * @link      https://www.peteheaney.com/
 * @copyright Copyright (c) 2018 Pete Heaney
 */

namespace peteheaney\dewidow;

use peteheaney\dewidow\twigextensions\DewidowTwigExtension;

use Craft;
use craft\base\Plugin;
use PHP_Typography\Settings;
use PHP_Typography\PHP_Typography;

/**
 * Class Dewidow
 *
 * @author    Pete Heaney
 * @package   DeWidow
 * @since     1.0.0
 *
 */
class Dewidow extends Plugin
{
    /**
     * @var Dewidow
     */
    public static $plugin;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        $settings = new \PHP_Typography\Settings();
        $typo = new \PHP_Typography\PHP_Typography();

        Craft::$app->view->registerTwigExtension(new DewidowTwigExtension($settings, $typo));
    }

}
