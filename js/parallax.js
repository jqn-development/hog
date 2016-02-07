/**
 * Metaphor Parallax
 * Date: 6/25/2014
 *
 * @author Metaphor Creations
 * @version 1.0.0
 *
 **/

( function($) {
	
	// Enabled strict mode
	"use strict";

	var methods = {

		init : function( options ) {

			return this.each( function(){

				// Create default options
				var settings = {};

				// Add any set options
				if (options) {
					$.extend(settings, options);
				}

				var $window = $(window),
						$scroll = $(this);
				               
				$window.scroll(function() {
                            
				  var yPos = -(($window.scrollTop()-($scroll.offset().top))/$scroll.data('parallax-speed'));
				   
				  // background position
				  var coords = '50% '+ yPos + 'px';
				
				  // move the background
				  $scroll.css({ backgroundPosition: coords }); 
				     
				});
				
			});
		}
	};

	/**
	 * Setup the class
	 *
	 * @since 1.0.0
	 */
	$.fn.parallax = function( method ) {

		if ( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call(arguments, 1) );
		} else if ( typeof method === 'object' || !method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist in parallax' );
		}
	};

})( jQuery );