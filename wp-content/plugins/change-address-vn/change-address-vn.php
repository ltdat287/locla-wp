<?php 
/**
 * Plugin Name: Change address for Viet Nam location
 * Plugin URI:  http://dat.lt
 * Description: Change address for woocommerce checkout vietnam
 * Author:      DatLT
 * Author URI:  http://dat.lt
 * License:     MIT
 * License URI: http://opensource.org/licenses/MIT
 * Version:     1.0
 * Text Domain: change-address-vn
 * Domain Path: /languages
 */

// Array data state of Hanoi
$state_data = array(
				'Quận Ba Đình' => 'Quận Ba Đình',
				'Quận Hoàn Kiếm' => 'Quận Hoàn Kiếm',
				'Quận Hai Bà Trưng' => 'Quận Hai Bà Trưng',
				'Quận Đống Đa' => 'Quận Đống Đa',
				'Quận Tây Hồ' => 'Quận Tây Hồ',
				'Quận Cầu Giấy' => 'Quận Cầu Giấy',
				'Quận Thanh Xuân' => 'Quận Thanh Xuân',
				'Quận Hoàng Mai' => 'Quận Hoàng Mai',
				'Quận Long Biên' => 'Quận Long Biên',
				'Quận Bắc Từ Liêm' => 'Quận Bắc Từ Liêm',
				'Quận Nam Từ Liêm' => 'Quận Nam Từ Liêm',
				'Huyện Thanh Trì' => 'Huyện Thanh Trì',
				'Huyện Gia Lâm' => 'Huyện Gia Lâm',
				'Huyện Đông Anh' => 'Huyện Đông Anh',
				'Huyện Sóc Sơn' => 'Huyện Sóc Sơn',
				'Quận Hà Đông' => 'Quận Hà Đông',
				'Thị xã Sơn Tây' => 'Thị xã Sơn Tây',
				'Huyện Ba Vì' => 'Huyện Ba Vì',
				'Huyện Phúc Thọ' => 'Huyện Phúc Thọ',
				'Huyện Thạch Thất' => 'Huyện Thạch Thất',
				'Huyện Quốc Oai' => 'Huyện Quốc Oai',
				'Huyện Chương Mỹ' => 'Huyện Chương Mỹ',
				'Huyện Đan Phượng' => 'Huyện Đan Phượng',
				'Huyện Hoài Đức' => 'Huyện Hoài Đức',
				'Huyện Thanh Oai' => 'Huyện Thanh Oai',
				'Huyện Mỹ Đức' => 'Huyện Mỹ Đức',
				'Huyện Ứng Hoà' => 'Huyện Ứng Hoà',
				'Huyện Thường Tín' => 'Huyện Thường Tín',
				'Huyện Phú Xuyên' => 'Huyện Phú Xuyên',
				'Huyện Mê Linh' => 'Huyện Mê Linh',
				);

function set_vn_default_field_checkout($fields)
{
	// Variable global array state
	global $state_data;

	//Hide Countruy viet nam
	unset( $fields['country'] );

	// Hide postcode
	unset( $fields['postcode'] );

	// Hide address_2
	unset( $fields['address_2'] );

	// Change name state to Tỉnh / Thành
	$fields['state'] = array(
			'type'        => 'select',
			'label'       => 'Tỉnh / Thành',
			'placeholder' => 'Tỉnh / Thành',
			'required'    => 'true',
			'options'     => array(
					'Hà Nội' => 'Hà Nội',
				),
		);

	// Change label city to Quận / Huyện
	$fields['city'] = array(
			'type'        => 'select',
			'label'       => 'Quận / Huyện',
			'placeholder' => 'Quận / Huyện',
			'required'    => 'true',
			'options'     => $state_data,
		);

	return $fields;
}

add_filter( 'woocommerce_default_address_fields', 'set_vn_default_field_checkout' );

/**
 * Get value of key state
 * @param   number 
 * @return string      
 */
function get_value_of_state($key)
{
	// Variable global array state
	global $state_data;

	$value = '';
	if ( ! empty($key) ) {
		$value = ( array_key_exists($key, $state_data) ) ? $state_data[$key] : '';
	}

	return $value;
}

// function set_value_of_state_to_order( $order_id )
// {
// 	if ( ! empty( $_POST['city'] ) ) {
// 		$value_state = get_value_of_state( $_POST['city'] );
// 		update_post_meta( $order_id, 'city', $value_state );
// 	}
// }

// add_action( 'woocommerce_checkout_update_order_meta', 'set_value_of_state_to_order' );

// function dlt_display_order_data( $order_id ) 
// {
// 	$key = get_post_meta( $order_id, 'city', true );
// 	$value = get_value_of_state( $key );
// 	return $value;
// }

// add_action( 'woocommerce_thankyou', 'dlt_display_order_data' );
// add_action( 'woocommerce_view_order', 'dlt_display_order_data' );
