//ハンバーガーメニュー用//
jQuery( function( $ ) {
	$( ".p-header__menu__btn" ).on( "click", function() {
		$( this ).toggleClass( "is-open" );
		$( ".p-header__menu__background" ).toggleClass( "is-open" );
		$( "#top-area" ).toggleClass( "is-open" );
		$( ".p-drop__menu" ).toggleClass( "is-open" );
		$( ".c-main_container_menu_menu" ).toggleClass( "is-open" );
	} );
} );