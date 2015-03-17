var wpStyleGuide;
(function($) {

	wpStyleGuide = {
		init: function() {

			$( '.library-logo' ).on( 'click', function() {
				$( 'body' ).toggleClass( 'sidebar-open' );
			} );

			$( '.icon-list' ).on( 'click', '.noticon', function() {
				var list = $( '.icon-list' ),
					icon = $( this ),
					icon_class = icon.attr( 'class' ),
					icon_name = icon.attr( 'class' ).split(' noticon-')[1],
					icon_number = icon.attr('alt')
					details = $( '.icon-details' ),
					details_glyph = details.find( '.glyph' ),
					details_name = details.find( '.name' );

				if ( icon.hasClass( 'selected' ) ) {
					list.find( '.selected' ).removeClass( 'selected' );
					details.removeClass( 'open' );
				} else {
					list.find( '.selected' ).removeClass( 'selected' );
					icon.toggleClass( 'selected' );

					details_glyph.attr( 'class', 'glyph' );
					details_glyph.addClass( icon_class );
					details_name.html( icon_name );

					details.addClass( 'open' );
				}


				console.log( icon_name );
				
			} );

		},

		copyToClipboard: function( text, copyMode ) {
			if ( copyMode == "css" ) {
				window.prompt( "Copy this, then paste in your CSS :before selector.", text );
			} else if ( copyMode == "html" ) {
				window.prompt( "Copy this, then paste in your HTML.", text );
			} else {
				window.prompt( "Copy this, then paste in your Photoshop textfield.", text );
			}
		}
	}

	$(document).ready(function($){ wpStyleGuide.init(); });

})(jQuery);