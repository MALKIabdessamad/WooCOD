<style>
    .WooCOD_order_summary_head {
        background: <?php echo get_option('WooCOD_order_summary_bg') ? get_option('WooCOD_order_summary_bg') : '#FBFBFB' ?> !important;
    }

    .WooCOD_buy_now {
        background: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
        color: <?php echo get_option('WooCOD_text_color') ? get_option('WooCOD_text_color') : '#FFFFFF' ?> !important;
        transition: all .3s ease;
        border: 1px solid transparent;
    }

    .WooCOD_order_qty {
        background: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
        color: <?php echo get_option('WooCOD_text_color') ? get_option('WooCOD_text_color') : '#FFFFFF' ?> !important;
        transition: all .3s ease;
    }

    .WooCOD_footer_icons i {
        color: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#FFFFFF' ?> !important;
    }

    .WooCOD_order_summary_head {
        color: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#FFFFFF' ?> !important;
    }

    .WooCOD_instant_order_form {
        background: <?php echo get_option('WooCOD_background_color') ? get_option('WooCOD_background_color') : '#FBFBFB' ?> !important;
    }

    .WooCOD_checkout {
        background: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
        color: <?php echo get_option('WooCOD_text_color') ? get_option('WooCOD_text_color') : '#FFFFFF' ?> !important;
        transition: all .3s ease;
        border: 1px solid transparent;
    }

    .WooCOD_checkout:hover,
    .WooCOD_buy_now:hover {
        color: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
        background: <?php echo get_option('WooCOD_text_color') ? get_option('WooCOD_text_color') : '#FFFFFF' ?> !important;
        border-color: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
    }

    .WooCOD_btn_loader {
        border: 2px solid <?php echo get_option('WooCOD_text_color') ? get_option('WooCOD_text_color') : '#FFFFFF' ?> !important;
        border-bottom-color: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
    }

    .WooCOD_order_summary_title,
    .WooCOD_order_summary_head {
        color: <?php echo get_option('WooCOD_order_summary_text') ? get_option('WooCOD_order_summary_text') : '#43A071' ?> !important
    }

    span.WooCOD_free_shipping {
        background: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
        color: <?php echo get_option('WooCOD_text_color') ? get_option('WooCOD_text_color') : '#FFFFFF' ?> !important;
    }

    .WooCOD_row_total_price>td.total_price {
        color: <?php echo get_option('WooCOD_total_price') ? get_option('WooCOD_total_price') : '#00000' ?> !important;
    }

    .WooCOD_instant_order_form>input,
    .WooCOD_instant_order_form>select {
        background-color: <?php echo get_option('WooCOD_field_background') ? get_option('WooCOD_field_background') : '#FFFFFF' ?> !important;
    }

    .WooCOD_instant_order_form>input:focus,
    .WooCOD_instant_order_form>select:focus,
    .WooCOD_instant_order_form>textarea:focus {
        box-shadow: 0 0 0 2px <?php echo get_option('WooCOD_field_border') ? get_option('WooCOD_field_border') : '#d9d9d9' ?> !important;
    }

    .variation_title input:checked+label::after {
        background: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
    }

    .variation_price{
        color: <?php echo get_option('WooCOD_button_color') ? get_option('WooCOD_button_color') : '#43A071' ?> !important;
        font-weight: 600 ;
    }

    .regular_price{
        color: #AEAEAE;
        text-decoration: line-through ;
        font-weight: 400 ;
    }
</style>