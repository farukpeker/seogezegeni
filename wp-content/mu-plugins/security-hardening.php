<?php
/**
 * Plugin Name: Security Hardening (must-use)
 * Description: 2026-08 saldırısı sonrası uygulanan güvenlik sertleştirmeleri. mu-plugins altında olduğu için panelden kapatılamaz.
 */

// XML-RPC'yi kapat (brute-force / pingback amplifikasyon vektörü).
add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

// WordPress sürümünü ifşa eden çıktıları kaldır.
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// REST API üzerinden kullanıcı adı/e-posta sızıntısını (user enumeration) engelle.
add_filter( 'rest_endpoints', function ( $endpoints ) {
	if ( isset( $endpoints['/wp/v2/users'] ) ) {
		unset( $endpoints['/wp/v2/users'] );
	}
	if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}
	return $endpoints;
} );

// ?author=1 gibi isteklerle kullanıcı adı taramasını engelle.
add_action( 'template_redirect', function () {
	if ( is_admin() ) {
		return;
	}
	if ( isset( $_GET['author'] ) && ! is_user_logged_in() ) {
		wp_die( 'Forbidden', 403 );
	}
} );

// Giriş hatalarında kullanıcı adının var olup olmadığını belli etmeyen genel mesaj.
add_filter( 'login_errors', function () {
	return 'Kullanıcı adı veya şifre hatalı.';
} );

// REST API'de sadece izin verilmeyen (whitelist dışı) özel namespace'leri engelle
// — 2026-08 saldırısındaki sahte "wputils/v1" gibi rotaları önler.
add_filter( 'rest_pre_dispatch', function ( $result, $server, $request ) {
	$route = $request->get_route();
	$blocked_namespaces = array( 'wputils/', 'w2s/', 'wp2s/' );
	foreach ( $blocked_namespaces as $ns ) {
		if ( strpos( ltrim( $route, '/' ), $ns ) === 0 ) {
			return new WP_Error( 'rest_forbidden', 'Forbidden', array( 'status' => 403 ) );
		}
	}
	return $result;
}, 10, 3 );
