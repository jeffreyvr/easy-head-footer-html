<?php

namespace EasyHeadFooterHtml;

use EasyHeadFooterHtml\Admin\Settings;

class EasyHeadFooterHtml
{
    private static $instance;

    public static function instance()
    {
        if (! isset(self::$instance) && ! (self::$instance instanceof EasyHeadFooterHtml)) {
            self::$instance = new EasyHeadFooterHtml();

            add_action('plugins_loaded', [self::$instance, 'loadTextDomain']);
            add_action('wp_head', [self::$instance, 'setHeadHtml']);
            add_action('wp_footer', [self::$instance, 'setFooterHtml']);

            foreach (self::$instance->boot() as $class) {
                new $class();
            }
        }

        return self::$instance;
    }

    public function loadTextdomain()
    {
        load_plugin_textdomain('ehf-html', false, dirname(plugin_basename(EASY_HEAD_FOOTER_HTML_PLUGIN_FILE)) . '/languages/');
    }

    public function boot()
    {
        return [
            Settings::class
        ];
    }

    public function setHeadHTml()
    {
        echo \ehf_html_get_option('head_html');
    }

    public function setFooterHtml()
    {
        echo \ehf_html_get_option('footer_html');
    }
}
