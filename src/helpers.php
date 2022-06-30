<?php

function ehf_html_get_option($key, $fallback = null)
{
    $options = get_option('easy_head_footer_html', []);

    return $options[$key] ?? $fallback;
}
