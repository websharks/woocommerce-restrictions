<?php
/**
 * Security checks.
 *
 * @author @jaswsinc
 * @copyright WebSharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WooCommerce\Restrictions\Traits\Facades;

use WebSharks\WpSharks\WooCommerce\Restrictions\Classes;
use WebSharks\WpSharks\WooCommerce\Restrictions\Interfaces;
use WebSharks\WpSharks\WooCommerce\Restrictions\Traits;
#
use WebSharks\WpSharks\WooCommerce\Restrictions\Classes\AppFacades as a;
use WebSharks\WpSharks\WooCommerce\Restrictions\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WooCommerce\Restrictions\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Security checks.
 *
 * @since 160524
 */
trait SecurityChecks
{
    /**
     * @since 160524 Initial release.
     *
     * @param mixed ...$args Variadic args to underlying utility.
     *
     * @see Classes\Utils\SecurityCheck::restrictionsApply()
     */
    public static function restrictionsApply(...$args)
    {
        return $GLOBALS[static::class]->Utils->SecurityCheck->restrictionsApply(...$args);
    }
}
