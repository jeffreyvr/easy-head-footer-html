<?php

use EasyHeadFooterHtml\EasyHeadFooterHtml;
/**
 * Easy Head Footer HTML
 *
 * @author            Jeffrey van Rossum <jeffrey@vanrossum.dev>
 *
 * @wordpress-plugin
 * Plugin name:         Easy Head Footer HTML
 * Description:         Plugin that makes it possible to add head and footer- HTML.
 * Version:             0.0.1
 * Requires at least:   5.6
 * Requires PHP:        7.4
 * Author:              Jeffrey van Rossum
 * Author URI:          https://vanrossum.dev
 * Text Domain:         ehf-html
 * Domain Path:         /languages
 * License:             MIT
 */

if (! class_exists(EasyHeadFooterHtml::class)) {
    if (is_file(__DIR__ . '/vendor/autoload_packages.php')) {
        require_once __DIR__ . '/vendor/autoload_packages.php';
    }
}

define('EASY_HEAD_FOOTER_HTML_PLUGIN_FILE', __FILE__);
define('EASY_HEAD_FOOTER_HTML_PLUGIN_DIR', __DIR__);

/**
 * Plugin instance.
 *
 * @return EasyHeadFooterHtml
 */
function easy_head_footer_html()
{
    return EasyHeadFooterHtml::instance();
}

easy_head_footer_html();