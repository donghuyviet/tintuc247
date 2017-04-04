(function($) {
	"use strict";
$( document ).ready( function() {

    $( '#toggle-top' ).click( function() {
        $( '.nav-primary' ).toggleClass( 'active' );
    } );

	// nav primary
    var MenuChildren = $( '.nav-primary .menu-item-has-children' );
    MenuChildren.children( 'a' ).after( '<div class="touch"><i class="fa fa-angle-down"></i></div>' );
    MenuChildren.on( 'click', '.touch', function(e) {
        e.stopPropagation();
        $( this ).parent( '.menu-item' ).toggleClass( 'active' );
    });

    // menu sidebar
    var MenuChildren = $( '.sidebar .menu-item-has-children' );
    MenuChildren.children( 'a' ).after( '<div class="touch"><i class="fa fa-angle-down"></i></div>' );
    MenuChildren.on( 'click', '.touch', function(e) {
        e.stopPropagation();
        $( this ).parent( '.menu-item' ).toggleClass( 'active' );
    });


});
})(jQuery);