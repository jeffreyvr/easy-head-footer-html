<?php

namespace EasyHeadFooterHtml\Admin;

use Jeffreyvr\WPSettings\WPSettings;

class Settings
{
    public function __construct()
    {
        add_action('init', [$this, 'register']);
    }

    public function register()
    {
        $settings = (new WPSettings(__('Easy Head Footer HTML')));

        $settings->add_section(__('General', 'republish-posts'));

        $settings->add_option('code-editor', [
            'name' => 'head_html',
            'label' => __('Head HTML', 'ehf-html')
        ]);

        $settings->add_option('code-editor', [
            'name' => 'footer_html',
            'label' => __('Footer HTML', 'ehf-html')
        ]);

        $settings->make();
    }
}
