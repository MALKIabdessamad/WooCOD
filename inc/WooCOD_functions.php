<?php

if (!defined('ABSPATH')) {
    return;
}

if (!function_exists('WooCOD_get_shipping')) {
    function WooCOD_get_shipping()
    {
        $data_store = WC_Data_Store::load('shipping-zone');
        $raw_zones = $data_store->get_zones();
        foreach ($raw_zones as $raw_zone) {
            $zones[] = new WC_Shipping_Zone($raw_zone);
        }

        return !empty($zones) ? $zones : [];
    }
}
