
(function ($, Drupal) {
    Drupal.behaviors.hop = {
      attach: function (context, settings) {

        //Event Click Menu Scroll Front Page
        if ($('.menu-scroll').length) {
          var ps_service = $('#ourconten1').offset().top;
          //console.log(ps_service);
          $('.menu-scroll #scroll_services').click(function (e) { 
            $('html,body').animate({ scrollTop: ps_service }, 'slow');
          });
        }
        if ($('.menu-scroll').length) {
          var ps_service_1 = $('#ourconten2').offset().top;
          //console.log(ps_service_1);
          $('.menu-scroll #scroll_team').click(function (e) { 
            $('html,body').animate({ scrollTop: ps_service_1 }, 'slow');
          });
        }
        if ($('.menu-scroll').length) {
          var ps_service_2 = $('.view-display-id-block_1').offset().top;
          //console.log(ps_service_2);
          $('.menu-scroll #scroll_clients').click(function (e) { 
            $('html,body').animate({ scrollTop: ps_service_2 }, 'slow');
          });
        }
        if ($('.menu-scroll').length) {
          var ps_service_3 = $('.homepage__contact').offset().top;
          //console.log(ps_service_3);
          $('.menu-scroll #scroll_contact').click(function (e) { 
            $('html,body').animate({ scrollTop: ps_service_3 }, 'slow');
          });
        }
        if ($('.menu--main').length) {
          var ps_menu_about = $('#ourconten2').offset().top;
          $('.menu--main li:nth-child(2) a').click(function (e) { 
            e.preventDefault();
            $('html,body').animate({ scrollTop: ps_menu_about }, 'slow');
          });
        }
        if ($('.menu--main').length) {
          var ps_menu_SERVICSE = $('#ourconten1').offset().top;
          $('.menu--main li:nth-child(3) a').click(function (e) { 
            e.preventDefault();
            $('html,body').animate({ scrollTop: ps_menu_SERVICSE }, 'slow');
          });
        }
        if ($('.homepage__banner').length) {
          var ps_menu_about = $('#ourconten2').offset().top;
          $('.homepage__banner p a.btn-primary').click(function (e) { 
            e.preventDefault();
            $('html,body').animate({ scrollTop: ps_menu_about }, 'slow');
          });
        }
        
        
        $(document).ready(function () {
            //click icon
            const coll = document.getElementsByClassName('views-row');
            for(i=1;i<coll.length+1;i++){
              $('.view-display-id-block_2 .view-content .views-row:nth-child('+i+') .views-field-nothing .field-content .icon2').on('click', function () {
                jQuery($(this).children('.icon2-2')).toggleClass('show')
              });
              $('.view-display-id-block_2 .view-content .views-row:nth-child('+i+') .views-field-nothing .field-content .icon2').on('click', function () {
                jQuery($(this).children('.show-2')).toggleClass('show-3')
              });
            }
            const coll1 = document.getElementsByClassName('new-item');
            for(j=1;j<coll1.length+1;j++){
              $('.view-display-id-block_4 .view-content .new-item:nth-child('+j+') .views-field-nothing .field-content .icon2').on('click', function () {
                jQuery($(this).children('.icon2-2')).toggleClass('show')
              });
              $('.view-display-id-block_4 .view-content .new-item:nth-child('+j+') .views-field-nothing .field-content .icon2').on('click', function () {
                jQuery($(this).children('.show-2')).toggleClass('show-3')
              });
            }
            const coll2 = document.getElementsByClassName('views-row');
            for(k=1;k<coll2.length+1;k++){
              $('.view-display-id-block_1 .view-content .views-row:nth-child('+k+') .views-field-nothing .field-content .icon2').on('click', function () {
                jQuery($(this).children('.icon2-2')).toggleClass('show')
              });
              $('.view-display-id-block_1 .view-content .views-row:nth-child('+k+') .views-field-nothing .field-content .icon2').on('click', function () {
                jQuery($(this).children('.show-2')).toggleClass('show-3')
              });
            }

            $(window).scroll(function(){
              if( 400 < $(this).scrollTop() && $(this).scrollTop() < 800 ){
                jQuery('.menu-scroll li svg').addClass('manu2');
              }else if(1400 < $(this).scrollTop() && $(this).scrollTop() < 2200){
                jQuery('.menu-scroll li svg').addClass('manu2');
              }else if(2200 < $(this).scrollTop() && $(this).scrollTop() < 2450){
                jQuery('.menu-scroll li svg').addClass('manu2');
              }

            })

            var duration = 500;
            $(window).scroll(function(){
              if(400 < $(this).scrollTop() && $(this).scrollTop() < 800 ){
                jQuery('.menu-scroll #scroll_team svg').removeClass('active');
                jQuery('.menu-scroll #scroll_services svg').addClass('active');
                jQuery('.menu-scroll #scroll_services svg').removeClass('manu2');
               
                $('#scroll_services span').fadeIn(duration);
                $('#scroll_team span').fadeOut(duration);
              }else
               $('#scroll_services span').fadeOut(duration);
               //jQuery('.menu-scroll #scroll_services svg').removeClass('active');
               if(800 < $(this).scrollTop() && $(this).scrollTop() < 1400){
                    jQuery('.menu-scroll #scroll_team svg').addClass('active')
                    jQuery('.menu-scroll #scroll_services svg').removeClass('active');
                    jQuery('.menu-scroll #scroll_clients svg').removeClass('active');
                    jQuery('.menu-scroll li svg').removeClass('manu2');
                    $('#scroll_team span').fadeIn(duration);
                    $('#scroll_services span').fadeOut(duration);
                    $('#scroll_clients span').fadeOut(duration);
                    }else if(1400 < $(this).scrollTop() && $(this).scrollTop() < 2200){
                       jQuery('.menu-scroll #scroll_clients svg').addClass('active')
                       jQuery('.menu-scroll #scroll_team svg').removeClass('active');
                       jQuery('.menu-scroll #scroll_contact svg').removeClass('active');
                       jQuery('.menu-scroll #scroll_clients svg').removeClass('manu2');
                       $('#scroll_clients span').fadeIn(duration);
                       $('#scroll_team span').fadeOut(duration);
                       $('#scroll_contact span').fadeOut(duration);
                       }else if(2200 < $(this).scrollTop() && $(this).scrollTop() < 2450){
                          jQuery('.menu-scroll #scroll_contact svg').addClass('active')
                          jQuery('.menu-scroll #scroll_clients svg').removeClass('active');
                          jQuery('.menu-scroll #scroll_contact svg').removeClass('manu2');
                          $('#scroll_contact span').fadeIn(duration);
                          $('#scroll_clients span').fadeOut(duration);
                         }else{
                          $('#scroll_contact span').fadeOut(duration);
                          jQuery('.menu-scroll #scroll_contact svg').removeClass('active');
                         }
                       
                    
              
                         
              
            })
            $(window).scroll(function(){
              if( $(this).scrollTop() < 400){
                jQuery('.menu-scroll #scroll_services svg').removeClass('active');
                jQuery('.menu-scroll li svg').removeClass('manu2');
              }
              else if(1800< $(this).scrollTop() && $(this).scrollTop() < 2420){
                jQuery('.menu-scroll li svg').removeClass('manu2');
              }
            })
            
            


        });       
      }    
    };
  })
(jQuery, Drupal);