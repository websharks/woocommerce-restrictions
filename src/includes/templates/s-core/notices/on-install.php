<?php
/**
 * Template.
 *
 * @author @jaswsinc
 * @copyright WebSharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WooCommerce\Restrictions;

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

if (!defined('WPINC')) {
    exit('Do NOT access this file directly.');
}
extract($this->vars); // Template variables.
?>
<p>
    <?= sprintf(__('<strong>%1$s</strong> v%2$s installed successfully.', 'woocommerce-restrictions'), esc_html($this->App->Config->©brand['©name']), esc_html($this->App::VERSION)) ?><br />
    <?= sprintf(__('~ Start by protecting some of your content: <a href="%1$s" class="button" style="text-decoration:none;">Create Restriction</a>', 'woocommerce-restrictions'), esc_url(a::createRestrictionUrl())) ?>
</p>
