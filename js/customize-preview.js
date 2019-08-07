(function($) {
 'use strict';

 $(function() {
// Update the site title in real time...
  wp.customize( 'blogname', function( value ) {
        value.bind( function( newval ) {
        $( '.site-title a' ).text( newval );
    } );
  } );
 // Update the site title in real time...
  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( newval ) {
      $( '.site-description a' ).text( newval );
    } );
  } ); 
});


})(jQuery);





// (function($) {
//  'use strict';
//     ( function( $ ) {

//       wp.customize( 'blogname', function( value ) {
//         value.bind( function( to ) {
//           $( '.site-title a' ).text( to );
//         });
//       });
//       wp.customize( 'blogdescription', function( value ) {
//         value.bind( function( to ) {
//           $( '.site-description a' ).text( to );
//         });
//       });


//       // // Update the site title in real time...
//       // wp.customize( 'blogname', function( value ) {
//       //   value.bind( function( newval ) {
//       //     $( '.logo_detail a' ).text( newval );
//       //   } );
//       // } );
      
//       // //Update the site description in real time...
//       // wp.customize( 'blogdescription', function( value ) {
//       //   value.bind( function( newval ) {
//       //     $( '.logo_detail a' ).text( newval );
//       //   } );
//       // } );

//       // //Update site title color in real time...
//       // wp.customize( 'header_textcolor', function( value ) {
//       //   value.bind( function( newval ) {
//       //     $( '.logo_detail,.logo_detail a,.site-title, .site-title a, .site-description, .site-description a' ).css({
//       //         color: newval
//       //       });
                
//       //   } );
//       // } );

//       // //Update site background color...
//       // wp.customize( 'background_color', function( value ) {
//       //   value.bind( function( newval ) {
//       //     $('body').css('background-color', newval );
//       //   } );
//       // } );
      
//       // //Update site link color in real time...
//       // wp.customize( 'link_textcolor', function( value ) {
//       //   value.bind( function( newval ) {
//       //     $('a').css('color', newval );
//       //   } );
//       // } );
//   });      




// } )( jQuery );