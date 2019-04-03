/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	// wp.customize( 'blogname', function( value ) {
	// 	value.bind( function( to ) {
	// 		$( '.site-title a' ).text( to );
	// 	} );
	// } );
	// wp.customize( 'blogdescription', function( value ) {
	// 	value.bind( function( to ) {
	// 		$( '.site-description' ).text( to );
	// 	} );
	// } );

	// // Header text color.
	// wp.customize( 'header_textcolor', function( value ) {
	// 	value.bind( function( to ) {
	// 		if ( 'blank' === to ) {
	// 			$( '.site-title, .site-description' ).css( {
	// 				'clip': 'rect(1px, 1px, 1px, 1px)',
	// 				'position': 'absolute'
	// 			} );
	// 		} else {
	// 			$( '.site-title, .site-description' ).css( {
	// 				'clip': 'auto',
	// 				'position': 'relative'
	// 			} );
	// 			$( '.site-title a, .site-description' ).css( {
	// 				'color': to
	// 			} );
	// 		}
	// 	} );
	// } );
	window.onscroll = function() {myFunction()};

	// Get the header
	var header = document.getElementById("main-menu");

	// Get the offset position of the navbar
	var sticky = header.offsetTop;

	// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function myFunction() {
	  if (window.pageYOffset > sticky) {
	    header.classList.add("sticky");
	  } else {
	    header.classList.remove("sticky");
	  }
	}
} )( jQuery );
