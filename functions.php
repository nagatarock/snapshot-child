<?php //子テーマの読み込み
function theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css'); //親テーマのcss読み込み
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')); //ThemeName用css
  wp_enqueue_style('child-style2', get_stylesheet_directory_uri() . '/css/style.css', array('parent-style')); //sass用のcss
  wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/js/hamburger.js', array()); //jsファイルの読み込み
  wp_enqueue_script('child-js2', get_stylesheet_directory_uri() . '/js/wow.min.js', array()); //animate.jsファイルの読み込み
  wp_enqueue_style('my-fa5','//use.fontawesome.com/releases/v5.13.0/css/all.css',array(),NULL); //fontawesomeの読み込み
  wp_enqueue_style('my-anime','//cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css',array(),NULL); //animate.cssの読み込み
  wp_enqueue_style('my-font1','//fonts.gstatic.com'); //googlefontの読み込み
  wp_enqueue_style('my-font2','//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;400&display=swap',array(),NULL); //googlefontの読み込み
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

//作品集ラベルの変更
function aktk_post_type_labels_post($labels)
{

  $labels->name                  = '作品集';
  $labels->singular_name         = '作品集';
  $labels->add_new               = '新規追加';
  $labels->add_new_item          = '新規作品集を追加';
  $labels->edit_item             = '作品集の編集';
  $labels->new_item              = '新規作品集';
  $labels->view_item             = '作品集を表示';
  $labels->view_items            = '作品集の表示';
  $labels->search_items          = '作品集を検索';
  $labels->not_found             = '作品集が見つかりませんでした。';
  $labels->not_found_in_trash    = 'ゴミ箱内に作品集が見つかりませんでした。';
  $labels->all_items             = '作品集一覧';
  $labels->archives              = '作品集アーカイブ';
  $labels->attributes            = '作品集の属性';
  $labels->insert_into_item      = '作品集に挿入';
  $labels->uploaded_to_this_item = 'この作品集へのアップロード';
  $labels->featured_image        = 'アイキャッチ画像';
  $labels->set_featured_image    = 'アイキャッチ画像を設定';
  $labels->remove_featured_image = 'アイキャッチ画像を削除';
  $labels->use_featured_image    = 'アイキャッチ画像として使用';
  $labels->filter_items_list     = '作品集リストの絞り込み';
  $labels->items_list_navigation = '作品集リストナビゲーション';
  $labels->items_list            = '作品集リスト';
  $labels->menu_name             = '作品集';
  $labels->name_admin_bar        = '作品集';

  return $labels;
}



//納期日数を管理メニューに表示
function add_page_to_admin_menu() {
  add_menu_page( '納期設定', '納期設定', 'manage_options', 'post.php?post=308&action=edit', '', 'dashicons-clock', 5);
}
add_action( 'admin_menu', 'add_page_to_admin_menu' );



add_filter('post_type_labels_post', 'aktk_post_type_labels_post');


//管理バーの非表示
  add_filter('show_admin_bar', '__return_false');