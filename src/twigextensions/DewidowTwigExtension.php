<?php
/**
 * DeWidow plugin for Craft CMS 3.x
 *
 * A Twig filter for Craft CMS 3 to remove text widows
 *
 * @link      https://www.peteheaney.com/
 * @copyright Copyright (c) 2018 Pete Heaney
 */

namespace peteheaney\dewidow\twigextensions;

use peteheaney\dewidow\Dewidow;

use Craft;
use \Twig_Extension;
use PHP_Typography\Settings;
use PHP_Typography\PHP_Typography;

/**
 * @author    Pete Heaney
 * @package   DeWidow
 * @since     1.0.0
 */
class DewidowTwigExtension extends \Twig_Extension
{
    /** @var Client $client */
    private $settings;
    private $typo;

    public function __construct(Settings $settings, PHP_Typography $typo)
    {
        $this->settings = $settings;
        $this->typo = $typo;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'DeWidow';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('dewidow', [$this, 'dewidow']),
        ];
    }

    /**
     * @param null $text
     *
     * @return string
     */
    public function dewidow($text = null)
    {
        $this->settings->set_dewidow( true );

        return $this->typo->process( $text, $this->settings );
    }
}
