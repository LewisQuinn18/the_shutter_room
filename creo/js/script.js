/*
The Shutter room Custom Scripts
*/

// jQuery(document).ready(function(){
//   jQuery(".slider.owl-carousel").owlCarousel({
//       items:1,
//       autoplayTimeout:6000,
//       smartSpeed:600,
//       autoplay:true,
//       loop:true
//   }
//   );
// });
//
// jQuery(document).ready(function(){
//   jQuery(".logo-slider.owl-carousel").owlCarousel({
//       items:9,
//       autoplayTimeout:5000,
//       smartSpeed:600,
//       autoplay:true,
//       dots:false,
//       loop:true,
//       margin:50,
//       responsive:{
//         0:{
//             items:4
//         },
//         600:{
//             items:7
//         },
//         1000:{
//             items:9
//         }
//       }
//   }
//   );
// });
// jQuery('#nav-icon-bruach').click(function(){
//     jQuery(this).toggleClass('open');
// });

jQuery(document).ready(function(){
  jQuery('.owl-carousel-one').owlCarousel({
      loop:true,
      margin:20,
      nav:true,

      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:3
          }
      }
  });
});

jQuery(document).ready(function(){
  jQuery('.owl-carousel-two').owlCarousel({
      items:4,
      autoplay: true,

      loop:true,
      margin:20,
      // nav:true,

      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:2
          }
      }
  });
});

// jQuery(document).ready(function() {
//     jQuery('#vertical').lightSlider({
//       gallery:true,
//       item:1,
//       vertical:true,
//       verticalHeight:630,
//       vThumbWidth:200,
//       thumbItem:5,
//       thumbMargin:10,
//       galleryMargin:10
//       });
// });
//
// jQuery(document).ready(function() {
//     jQuery('#horizontal').lightSlider({
//       gallery:true,
//       item:1,
//       thumbItem:5,
//       thumbMargin:10,
//       galleryMargin:10,
//       controls:true,
//         adaptiveHeight:true
//       });
// });
