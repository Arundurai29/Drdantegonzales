
add_filter( 'woocommerce_product_tabs', 'finegap_new_product_tab' );

function finegap_new_product_tab( $tabs ) {
    // Adds the new tab 'testing'
    $tabs['testing'] = array(
        'title'     => __('Information', 'custom-plugin'),
        'priority'  => 50,
        'callback'  => 'woo_new_product_tab_content'
    );

    // Adds the new tab 'fingap'
    $tabs['fingap'] = array(
        'title'     => __('finegap', 'custom-plugin'),
        'priority'  => 50,
        'callback'  => 'finegap_new_product_tab_content'
    );

    return $tabs;
}

// Callback function for 'testing' tab
function woo_new_product_tab_content() {
    echo 'This is Noman Ghaffar';
}

// Callback function for 'fingap' tab
function finegap_new_product_tab_content() {
    echo 'This is finegap';
}
