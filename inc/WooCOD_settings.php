<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $WooCOD_info_title = $_POST['WooCOD_info_title'];
    $WooCOD_name = $_POST['WooCOD_name'];
    $WooCOD_phone = $_POST['WooCOD_phone'];
    $WooCOD_state = $_POST['WooCOD_state'];
    $WooCOD_city = $_POST['WooCOD_city'];
    $WooCOD_address = $_POST['WooCOD_address'];
    $WooCOD_email = $_POST['WooCOD_email'];
    $WooCOD_additional = $_POST['WooCOD_additional'];
    $WooCOD_checkout_btn = $_POST['WooCOD_checkout_btn'];
    $WooCOD_order_summary_bg = $_POST['WooCOD_order_summary_bg'];
    $WooCOD_order_summary_text = $_POST['WooCOD_order_summary_text'];
    $WooCOD_button_color = $_POST['WooCOD_button_color'];
    $WooCOD_background_color = $_POST['WooCOD_background_color'];
    $WooCOD_text_color = $_POST['WooCOD_text_color'];
    $WooCOD_show_city = isset($_POST['WooCOD_show_city']) ? 'yes' : 'no';
    $WooCOD_show_address = isset($_POST['WooCOD_show_address']) ? 'yes' : 'no';
    $WooCOD_open_order_summary = isset($_POST['WooCOD_open_order_summary']) ? 'yes' : 'no';
    $WooCOD_show_footer_icons = isset($_POST['WooCOD_show_footer_icons']) ? 'yes' : 'no';
    $WooCOD_show_email = isset($_POST['WooCOD_show_email']) ? 'yes' : 'no';
    $WooCOD_show_additional = isset($_POST['WooCOD_show_additional']) ? 'yes' : 'no';
    $WooCOD_save_abandoned = isset($_POST['WooCOD_save_abandoned']) ? 'yes' : 'no';
    $place_button_at_bottom = isset($_POST['place_button_at_bottom']) ? 'yes' : 'no';
    $show_for_mobile_only = isset($_POST['show_for_mobile_only']) ? 'yes' : 'no';
    
    $coupon_code = isset($_POST['coupon_code']) ? 'yes' : 'no';

    $WooCOD_ip_protection = isset($_POST['WooCOD_ip_protection']) ? 'yes' : 'no';
    $WooCOD_cookie_protection = isset($_POST['WooCOD_cookie_protection']) ? 'yes' : 'no';


    $WooCOD_buy_now = $_POST['WooCOD_buy_now'];
    $WooCOD_footer_phone = $_POST['WooCOD_footer_phone'];
    $WooCOD_whatsapp = $_POST['WooCOD_whatsapp'];
    $WooCOD_thankyou_url = $_POST['WooCOD_thankyou_url'];
    $WooCOD_field_background = $_POST['WooCOD_field_background'];
    $WooCOD_field_border = $_POST['WooCOD_field_border'];
    $WooCOD_total_price = $_POST['WooCOD_total_price'];
    $WooCOD_show_state = isset($_POST['WooCOD_show_state']) ? 'yes' : 'no';
    $WooCOD_copy_paste = isset($_POST['WooCOD_copy_paste']) ? 'yes' : 'no';
    $WooCOD_autocomplete = isset($_POST['WooCOD_autocomplete']) ? 'yes' : 'no';
    $WooCOD_modern_ui = isset($_POST['WooCOD_modern_ui']) ? 'yes' : 'no';

    $WooCOD_phone_pattern = $_POST['WooCOD_phone_pattern'];
    $WooCOD_fixed_shipping = $_POST['WooCOD_fixed_shipping'];

    update_option('WooCOD_info_title', $WooCOD_info_title);
    update_option('WooCOD_name', $WooCOD_name);
    update_option('WooCOD_phone', $WooCOD_phone);
    update_option('WooCOD_state', $WooCOD_state);
    update_option('WooCOD_city', $WooCOD_city);
    update_option('WooCOD_address', $WooCOD_address);
    update_option('WooCOD_email', $WooCOD_email);
    update_option('WooCOD_additional', $WooCOD_additional);
    update_option('WooCOD_checkout_btn', $WooCOD_checkout_btn);
    update_option('WooCOD_order_summary_bg', $WooCOD_order_summary_bg);
    update_option('WooCOD_button_color', $WooCOD_button_color);
    update_option('WooCOD_background_color', $WooCOD_background_color);
    update_option('WooCOD_field_border', $WooCOD_field_border);
    update_option('WooCOD_text_color', $WooCOD_text_color);
    update_option('WooCOD_open_order_summary', $WooCOD_open_order_summary);
    update_option('WooCOD_show_address', $WooCOD_show_address);
    update_option('WooCOD_show_city', $WooCOD_show_city);
    update_option('WooCOD_show_footer_icons', $WooCOD_show_footer_icons);
    update_option('WooCOD_buy_now', $WooCOD_buy_now);
    update_option('WooCOD_footer_phone', $WooCOD_footer_phone);
    update_option('WooCOD_whatsapp', $WooCOD_whatsapp);
    update_option('WooCOD_order_summary_text', $WooCOD_order_summary_text);
    update_option('WooCOD_thankyou_url', $WooCOD_thankyou_url);
    update_option('WooCOD_field_background', $WooCOD_field_background);
    update_option('WooCOD_total_price', $WooCOD_total_price);
    update_option('WooCOD_show_state', $WooCOD_show_state);
    update_option('WooCOD_show_email', $WooCOD_show_email);
    update_option('WooCOD_show_additional', $WooCOD_show_additional);


    update_option('WooCOD_phone_pattern', $WooCOD_phone_pattern);
    update_option('WooCOD_save_abandoned', $WooCOD_save_abandoned);
    update_option('place_button_at_bottom', $place_button_at_bottom);
    update_option('show_for_mobile_only', $show_for_mobile_only);

    
    update_option('coupon_code', $coupon_code);


    update_option('WooCOD_ip_protection', $WooCOD_ip_protection);
    update_option('WooCOD_cookie_protection', $WooCOD_cookie_protection);

    update_option('WooCOD_fixed_shipping', $WooCOD_fixed_shipping);
    update_option('WooCOD_copy_paste', $WooCOD_copy_paste);
    update_option('WooCOD_autocomplete', $WooCOD_autocomplete);
    update_option('WooCOD_modern_ui', $WooCOD_modern_ui);
}
?>

<div class="wrap WooCOD_wrap">
    <h2 class="WooCOD_settings_title">
        WooCOD.
    </h2>
    <form action="" method="POST" class="WooCOD_tabs">
        <ul class="WooCOD_tab_title">
            <li data-title="title"><?php echo __('Titles', 'WooCOD_text'); ?></li>
            <li data-title="colors"><?php echo __('Colors', 'WooCOD_text'); ?></li>
            <li data-title="options"><?php echo __('Options', 'WooCOD_text') ?></li>
            <li data-title="settings"><?php echo __('Settings', 'WooCOD_text') ?></li>
            <li data-title="spam"><?php echo __('Spam Protection', 'WooCOD_text') ?></li>
        </ul>
        <ul class="WooCOD_tab_content">
            <li data-content="title">
                <div class="WooCOD_form_group">
                    <label><?php echo __('Add Information Title', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_info_title" value="<?php echo __(get_option('WooCOD_info_title'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Full Name', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_name" value="<?php echo __(get_option('WooCOD_name'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Phone Number', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_phone" value="<?php echo __(get_option('WooCOD_phone'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('State', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_state" value="<?php echo __(get_option('WooCOD_state'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('City', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_city" value="<?php echo __(get_option('WooCOD_city'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Address', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_address" value="<?php echo __(get_option('WooCOD_address'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Email', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_email" value="<?php echo __(get_option('WooCOD_email'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Additional Information', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_additional" value="<?php echo __(get_option('WooCOD_additional'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Checkout Button', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_checkout_btn" value="<?php echo __(get_option('WooCOD_checkout_btn'), 'WooCOD_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Buy Now Button', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_buy_now" value="<?php echo __(get_option('WooCOD_buy_now'), 'WooCOD_text'); ?>">
                </div>
            </li>
            <li data-content="colors">
                <div class="WooCOD_form_group">
                    <label><?php echo __('Order Summary Heading Background', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_order_summary_bg'); ?>" disabled>
                    <input type="text" name="WooCOD_order_summary_bg" value="<?php echo get_option('WooCOD_order_summary_bg'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Order Summary Heading Color', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_order_summary_text'); ?>" disabled>
                    <input type="text" name="WooCOD_order_summary_text" value="<?php echo get_option('WooCOD_order_summary_text'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Button Color', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_button_color'); ?>" disabled>
                    <input type="text" name="WooCOD_button_color" value="<?php echo get_option('WooCOD_button_color'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Background Color', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_background_color'); ?>" disabled>
                    <input type="text" name="WooCOD_background_color" value="<?php echo get_option('WooCOD_background_color'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Text Color', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_text_color'); ?>" disabled>
                    <input type="text" name="WooCOD_text_color" value="<?php echo get_option('WooCOD_text_color'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Field Background', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_field_background'); ?>" disabled>
                    <input type="text" name="WooCOD_field_background" value="<?php echo get_option('WooCOD_field_background'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Field Border on Select', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_field_border'); ?>" disabled>
                    <input type="text" name="WooCOD_field_border" value="<?php echo get_option('WooCOD_field_border'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Total Price Color', 'WooCOD_text'); ?></label>
                    <input type="color" value="<?php echo get_option('WooCOD_total_price'); ?>" disabled>
                    <input type="text" name="WooCOD_total_price" value="<?php echo get_option('WooCOD_total_price'); ?>">
                </div>
            </li>
            <li data-content="options">
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_show_city" value="yes" <?php echo get_option('WooCOD_show_city') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Display city field in form', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_show_state" value="yes" <?php echo get_option('WooCOD_show_state') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Display state field in form', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_show_email" value="yes" <?php echo get_option('WooCOD_show_email') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Hide email field.', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_show_additional" value="yes" <?php echo get_option('WooCOD_show_additional') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Hide additional field.', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_show_address" value="yes" <?php echo get_option('WooCOD_show_address') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Hide address field in order form', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_open_order_summary" value="yes" <?php echo get_option('WooCOD_open_order_summary') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Keep order summary open in order form', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_show_footer_icons" value="yes" <?php echo get_option('WooCOD_show_footer_icons') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Show phone and what\'s app icon at the sticky footer', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_modern_ui" value="yes" <?php echo get_option('WooCOD_modern_ui') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Show modern UI', 'WooCOD_text'); ?></span>
                </div>

                <div class="WooCOD_form_group">
                    <input type="checkbox" name="place_button_at_bottom" value="yes" <?php echo get_option('place_button_at_bottom') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Place Button At Bottom', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="show_for_mobile_only" value="yes" <?php echo get_option('show_for_mobile_only') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Show for mobile only', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="coupon_code" value="yes" <?php echo get_option('coupon_code') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Coupon Code', 'WooCOD_text'); ?></span>
                </div>
            </li>
            <li data-content="settings">
                <div class="WooCOD_form_group">
                    <label><?php echo __('Your Phone Number', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_footer_phone" value="<?php echo get_option('WooCOD_footer_phone'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('What\'s App Number', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_whatsapp" value="<?php echo get_option('WooCOD_whatsapp'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Order Recieved URL', 'WooCOD_text'); ?></label>
                    <input type="url" name="WooCOD_thankyou_url" value="<?php echo get_option('WooCOD_thankyou_url'); ?>">
                </div>
                <div class="WooCOD_form_group">
                    <label><?php echo __('Fixed Shipping Fee', 'WooCOD_text'); ?></label>
                    <input type="number" name="WooCOD_fixed_shipping" value="<?php echo get_option('WooCOD_fixed_shipping'); ?>">
                </div>
            </li>
            <li data-content="spam">
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_autocomplete" value="yes" <?php echo get_option('WooCOD_autocomplete') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Prevent autocomplete for form fields', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_copy_paste" value="yes" <?php echo get_option('WooCOD_copy_paste') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Prevent copy pasting informations in order form', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_ip_protection" value="yes" <?php echo get_option('WooCOD_ip_protection') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Prevent 2nd order in 24hours', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_cookie_protection" value="yes" <?php echo get_option('WooCOD_cookie_protection') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Stop ordering again wihtin 24 hours using browswer cookies', 'WooCOD_text'); ?></span>
                </div>
                <div class="WooCOD_form_group">
                    <input type="checkbox" name="WooCOD_save_abandoned" value="yes" <?php echo get_option('WooCOD_save_abandoned') == 'yes' ? 'checked' : ''; ?>> <span><?php echo __('Save abandoned order', 'WooCOD_text'); ?></span>
                </div>

                <div class="WooCOD_form_group">
                    <label><?php echo __('Phone Number Pattern', 'WooCOD_text'); ?></label>
                    <input type="text" name="WooCOD_phone_pattern" value="<?php echo get_option('WooCOD_phone_pattern'); ?>">
                </div>
            </li>
        </ul>
        <button class="button button-primary"><?php _e('Save Settings', 'WooCOD_text'); ?></button>
    </form>
</div>