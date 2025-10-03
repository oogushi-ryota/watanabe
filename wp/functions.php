<?php

// 管理バー非表示
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');

//自動補完リダイレクト機能を停止
add_filter( 'do_redirect_guess_404_permalink', '__return_false' );

//スラッグの変更によるリダイレクト機能を停止
remove_action( 'template_redirect', 'wp_old_slug_redirect' );

// 「投稿」の表示変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

// アーカイブページ生成
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

add_filter( 'post_type_archive_link', function( $link, $post_type ) {
	if ( 'post' === $post_type ) {
			$post_type_object = get_post_type_object( 'post' );
			$slug = $post_type_object->has_archive;
			$link = get_home_url( null, '/' . $slug . '/' );
	}
	return $link;
}, 10, 2 );
function add_article_post_permalink( $permalink ) {
	$permalink = '/news' . $permalink;
	return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );
	function add_article_post_rewrite_rules( $post_rewrite ) {
		$return_rule = array();
		foreach ( $post_rewrite as $regex => $rewrite ) {
			$return_rule['news/' . $regex] = $rewrite;
		}
	return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );

// タグを選択式に変更
function change_tags_to_checklist() {
    global $wp_taxonomies;
    $wp_taxonomies['post_tag']->hierarchical = true;
}
add_action( 'init', 'change_tags_to_checklist' );

// MW WP Formで自動挿入されるp・brタグを削除
function mvwpform_autop_filter()
{
	if (class_exists('MW_WP_Form_Admin')) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ($forms as $form) {
			add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
		}
	}
}
mvwpform_autop_filter();

// MW WP Form のショートコードに独自変数を追加
function my_mwform_custom_shortcode( $shortcode, $atts, $content, $form_key ) {
	if ( $shortcode === 'home_url' ) {
			return esc_url( home_url( '/' ) );
	}
	return $shortcode;
}
add_filter( 'mwform_shortcode_mw-wp-form-42', 'my_mwform_custom_shortcode', 10, 4 );

// 404ページをトップにリダイレクト
add_action('template_redirect', function() {
	if (is_404()) {
		wp_redirect(home_url(), 301); // 301は恒久的リダイレクト
		exit;
	}
});

?>