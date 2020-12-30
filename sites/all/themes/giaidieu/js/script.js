/* JS script for giaidieu theme - made by giaidieu.com */
(function ($, Drupal) {
  Drupal.behaviors.giaidieu = {
    attach: function (context, settings) {
      $(document).ready(function () {   
        $(window).bind('resize', function(e)
          {
            console.log('window resized..');
            this.location.reload(false); /* false to get page from cache */
            /* true to fetch page from server */
          });

        // Add class element banner    
        $('.field.field--name-field-background-image.field--type-image.field--label-above').parent().addClass('banner__parent');

        $('.view-display-id-block_2').parent().addClass('latest-articles');
        
        // Add class container
        jQuery('.articles.full').addClass('container');
        jQuery('.path-search .region-content .views-element-container').addClass('container');
        jQuery('.path-bookmarks .region-content').addClass('container');
        jQuery('.page-node-2 .region-content').addClass('container');
        jQuery('.page-node-56 .block-search.block-search-form-block').addClass('container');
        $('.page-node-56 .layout__region--content .field.field--name-body.field--type-text-with-summary').addClass('container');
        $('.page-node-55 .layout__region--content .field.field--name-body.field--type-text-with-summary').addClass('container');
        $('.page-node-54 .layout__region--content .field.field--name-body.field--type-text-with-summary').addClass('container');
        
        // Add icon page news
        // $('.view-display-id-block_3').addClass('container');

        checkIssetAuthor = $('.view-display-id-block_3 .new-item__header__icon-author a svg').length;
        if(checkIssetAuthor == 0) {
          $('.view-display-id-block_3 .new-item__header__icon-author a').append('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" class="icon-author blog-post-homepage-description-fill" style="fill-rule: evenodd;"><path d="M15.3812,6.495914 L12.6789333,8.77258837 C12.6191333,8.84477644 12.5099333,8.85722265 12.4354,8.79997005 C12.4215333,8.79001308 12.4094,8.77756686 12.3998667,8.76429089 L9.78686667,6.14327115 C9.67766667,5.99225704 9.46186667,5.95491839 9.305,6.05863687 C9.26946667,6.08186981 9.23913333,6.11091099 9.21573333,6.14493065 L6.60013333,8.81075677 C6.5464,8.88626383 6.43893333,8.90534803 6.3592,8.85390366 C6.34446667,8.84394669 6.33146667,8.83233022 6.32106667,8.81905425 L3.61966667,6.50587098 C3.5018,6.36149485 3.28426667,6.33577266 3.13346667,6.44861837 C3.0494,6.51167921 3,6.60792997 3,6.70998895 L4,14 L15,14 L16,6.70169148 C16,6.51831719 15.8448667,6.36979232 15.6533333,6.36979232 C15.5476,6.36979232 15.4470667,6.41625821 15.3812,6.495914 Z"></path></svg>');
        }

        checkIssetShare = $('.view-display-id-block_3 .new-item__header__share svg').length;
        if(checkIssetShare == 0) {
          $('.view-display-id-block_3 .new-item__header__share').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share blog-post-homepage-description-fill blog-post-homepage-link-hashtag-hover-fill"><path d="M2.44398805,5.99973295 C1.62345525,5.9690612 0.980075653,5.28418875 1.00047182,4.46312144 C1.02086799,3.64205413 1.69745853,2.98998831 2.51850166,3.0001164 C3.33954478,3.01024449 3.99985313,3.67880182 4,4.50012255 C3.98424812,5.34399206 3.28763905,6.0153508 2.44398805,5.99973295 L2.44398805,5.99973295 Z M2.44398805,10.9997329 C1.62345525,10.9690612 0.980075653,10.2841888 1.00047182,9.46312144 C1.02086799,8.64205413 1.69745853,7.98998831 2.51850166,8.0001164 C3.33954478,8.01024449 3.99985313,8.67880182 4,9.50012255 C3.98424812,10.3439921 3.28763905,11.0153508 2.44398805,10.9997329 L2.44398805,10.9997329 Z M2.44398805,15.9997329 C1.62345525,15.9690612 0.980075653,15.2841888 1.00047182,14.4631214 C1.02086799,13.6420541 1.69745853,12.9899883 2.51850166,13.0001164 C3.33954478,13.0102445 3.99985313,13.6788018 4,14.5001225 C3.98424812,15.3439921 3.28763905,16.0153508 2.44398805,15.9997329 L2.44398805,15.9997329 Z"></path></svg>');
        }

        checkIssetSharePost = $('.view-display-id-block_3 .new-item__header__share-post__icon svg').length;
        if(checkIssetSharePost == 0) {
          $('.view-display-id-block_3 .new-item__header__share-post__icon').append('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share_post blog-icon-fill"><path d="M16.9410444,8.39109677 C17.0195644,8.46818967 17.0195644,8.59371274 16.9410444,8.67080564 L11.9026789,13.6176004 C11.7063789,13.8103326 11.3872657,13.8103326 11.1909657,13.6176004 C11.096339,13.5246935 11.0429857,13.3991705 11.0429857,13.2677172 L11.0429857,11.0013834 C7.27402658,11.0013834 4.38690723,12.7339971 2.38263435,16.1972475 C2.27794104,16.3781194 1.99204777,16.3049799 2.0001011,16.0964337 C2.24975438,10.0357454 5.2637137,6.69011101 11.0429857,6.05953059 L11.0429857,3.79418524 C11.0429857,3.52040659 11.268479,3.29999995 11.5463189,3.29999995 C11.6802056,3.29999995 11.8080522,3.35139522 11.9026789,3.44430206 L16.9410444,8.39109677 Z M3.43409745,13.1243046 C5.43837033,11.0576217 7.98624309,10.0139024 11.0434891,10.0139024 L12.0501555,10.0139024 L12.0501555,12.0746551 L15.6600614,8.53035818 L12.0501555,4.98704968 L12.0501555,6.94501178 L11.1542224,7.0418721 C6.94635665,7.50146442 4.39949056,9.49994971 3.43409745,13.1243046 Z"></path></svg>');
        }

        checkIssetShare1 = $('.comment-item__share svg').length;
        if(checkIssetShare1 == 0) {
          $('.comment-item__share').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share blog-post-homepage-description-fill blog-post-homepage-link-hashtag-hover-fill"><path d="M2.44398805,5.99973295 C1.62345525,5.9690612 0.980075653,5.28418875 1.00047182,4.46312144 C1.02086799,3.64205413 1.69745853,2.98998831 2.51850166,3.0001164 C3.33954478,3.01024449 3.99985313,3.67880182 4,4.50012255 C3.98424812,5.34399206 3.28763905,6.0153508 2.44398805,5.99973295 L2.44398805,5.99973295 Z M2.44398805,10.9997329 C1.62345525,10.9690612 0.980075653,10.2841888 1.00047182,9.46312144 C1.02086799,8.64205413 1.69745853,7.98998831 2.51850166,8.0001164 C3.33954478,8.01024449 3.99985313,8.67880182 4,9.50012255 C3.98424812,10.3439921 3.28763905,11.0153508 2.44398805,10.9997329 L2.44398805,10.9997329 Z M2.44398805,15.9997329 C1.62345525,15.9690612 0.980075653,15.2841888 1.00047182,14.4631214 C1.02086799,13.6420541 1.69745853,12.9899883 2.51850166,13.0001164 C3.33954478,13.0102445 3.99985313,13.6788018 4,14.5001225 C3.98424812,15.3439921 3.28763905,16.0153508 2.44398805,15.9997329 L2.44398805,15.9997329 Z"></path></svg>');
        }

        checkIssetShareComment = $('.comment-item__share-comment__icon svg').length;
        if(checkIssetShareComment == 0) {
          $('.comment-item__share-comment__icon').append('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share_post blog-icon-fill"><path d="M16.9410444,8.39109677 C17.0195644,8.46818967 17.0195644,8.59371274 16.9410444,8.67080564 L11.9026789,13.6176004 C11.7063789,13.8103326 11.3872657,13.8103326 11.1909657,13.6176004 C11.096339,13.5246935 11.0429857,13.3991705 11.0429857,13.2677172 L11.0429857,11.0013834 C7.27402658,11.0013834 4.38690723,12.7339971 2.38263435,16.1972475 C2.27794104,16.3781194 1.99204777,16.3049799 2.0001011,16.0964337 C2.24975438,10.0357454 5.2637137,6.69011101 11.0429857,6.05953059 L11.0429857,3.79418524 C11.0429857,3.52040659 11.268479,3.29999995 11.5463189,3.29999995 C11.6802056,3.29999995 11.8080522,3.35139522 11.9026789,3.44430206 L16.9410444,8.39109677 Z M3.43409745,13.1243046 C5.43837033,11.0576217 7.98624309,10.0139024 11.0434891,10.0139024 L12.0501555,10.0139024 L12.0501555,12.0746551 L15.6600614,8.53035818 L12.0501555,4.98704968 L12.0501555,6.94501178 L11.1542224,7.0418721 C6.94635665,7.50146442 4.39949056,9.49994971 3.43409745,13.1243046 Z"></path></svg>');
        }

        // Add icon page search
        checkIssetAuthorSearch = $('.new-item-path-search .new-item__header__icon-author a svg').length;
        if(checkIssetAuthorSearch == 0) {
          $('.new-item-path-search .new-item__header__icon-author a').append('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" class="icon-author blog-post-homepage-description-fill" style="fill-rule: evenodd;"><path d="M15.3812,6.495914 L12.6789333,8.77258837 C12.6191333,8.84477644 12.5099333,8.85722265 12.4354,8.79997005 C12.4215333,8.79001308 12.4094,8.77756686 12.3998667,8.76429089 L9.78686667,6.14327115 C9.67766667,5.99225704 9.46186667,5.95491839 9.305,6.05863687 C9.26946667,6.08186981 9.23913333,6.11091099 9.21573333,6.14493065 L6.60013333,8.81075677 C6.5464,8.88626383 6.43893333,8.90534803 6.3592,8.85390366 C6.34446667,8.84394669 6.33146667,8.83233022 6.32106667,8.81905425 L3.61966667,6.50587098 C3.5018,6.36149485 3.28426667,6.33577266 3.13346667,6.44861837 C3.0494,6.51167921 3,6.60792997 3,6.70998895 L4,14 L15,14 L16,6.70169148 C16,6.51831719 15.8448667,6.36979232 15.6533333,6.36979232 C15.5476,6.36979232 15.4470667,6.41625821 15.3812,6.495914 Z"></path></svg>');
        }

        checkIssetShareSearch = $('.new-item-path-search .new-item__header__share svg').length;
        if(checkIssetShareSearch == 0) {
          $('.new-item-path-search .new-item__header__share').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share blog-post-homepage-description-fill blog-post-homepage-link-hashtag-hover-fill"><path d="M2.44398805,5.99973295 C1.62345525,5.9690612 0.980075653,5.28418875 1.00047182,4.46312144 C1.02086799,3.64205413 1.69745853,2.98998831 2.51850166,3.0001164 C3.33954478,3.01024449 3.99985313,3.67880182 4,4.50012255 C3.98424812,5.34399206 3.28763905,6.0153508 2.44398805,5.99973295 L2.44398805,5.99973295 Z M2.44398805,10.9997329 C1.62345525,10.9690612 0.980075653,10.2841888 1.00047182,9.46312144 C1.02086799,8.64205413 1.69745853,7.98998831 2.51850166,8.0001164 C3.33954478,8.01024449 3.99985313,8.67880182 4,9.50012255 C3.98424812,10.3439921 3.28763905,11.0153508 2.44398805,10.9997329 L2.44398805,10.9997329 Z M2.44398805,15.9997329 C1.62345525,15.9690612 0.980075653,15.2841888 1.00047182,14.4631214 C1.02086799,13.6420541 1.69745853,12.9899883 2.51850166,13.0001164 C3.33954478,13.0102445 3.99985313,13.6788018 4,14.5001225 C3.98424812,15.3439921 3.28763905,16.0153508 2.44398805,15.9997329 L2.44398805,15.9997329 Z"></path></svg>');
        }

        checkIssetSharePostSearch = $('.new-item-path-search .new-item__header__share-post__icon svg').length;
        if(checkIssetSharePostSearch == 0) {
          $('.new-item-path-search .new-item__header__share-post__icon').append('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share_post blog-icon-fill"><path d="M16.9410444,8.39109677 C17.0195644,8.46818967 17.0195644,8.59371274 16.9410444,8.67080564 L11.9026789,13.6176004 C11.7063789,13.8103326 11.3872657,13.8103326 11.1909657,13.6176004 C11.096339,13.5246935 11.0429857,13.3991705 11.0429857,13.2677172 L11.0429857,11.0013834 C7.27402658,11.0013834 4.38690723,12.7339971 2.38263435,16.1972475 C2.27794104,16.3781194 1.99204777,16.3049799 2.0001011,16.0964337 C2.24975438,10.0357454 5.2637137,6.69011101 11.0429857,6.05953059 L11.0429857,3.79418524 C11.0429857,3.52040659 11.268479,3.29999995 11.5463189,3.29999995 C11.6802056,3.29999995 11.8080522,3.35139522 11.9026789,3.44430206 L16.9410444,8.39109677 Z M3.43409745,13.1243046 C5.43837033,11.0576217 7.98624309,10.0139024 11.0434891,10.0139024 L12.0501555,10.0139024 L12.0501555,12.0746551 L15.6600614,8.53035818 L12.0501555,4.98704968 L12.0501555,6.94501178 L11.1542224,7.0418721 C6.94635665,7.50146442 4.39949056,9.49994971 3.43409745,13.1243046 Z"></path></svg>');
        }

        // Add title social media sharing post
        checkIssetH4Post = $('.modal--social-media.share-post .social-media-sharing h4').length;
        if (checkIssetH4Post == 0) {
          $('.modal--social-media.share-post .social-media-sharing').prepend('<h4>Share Post</h4>');
        }

        // Add title social media sharing comment
        checkIssetH4Comment = $('.modal--social-media.share-comment .social-media-sharing h4').length;
        if (checkIssetH4Comment == 0) {
          $('.modal--social-media.share-comment .social-media-sharing').prepend('<h4>Share Comment</h4>');
        }
        
        // Add icon close social media 
        $('.modal--social-media').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="icon-close" viewBox="0 0 30 30" style="fill: rgb(255, 255, 255); fill-rule: evenodd;"><path d="M10976.4,1024.73l-14.3,14.28,13.9,13.92-0.7.74-14-13.92-14.2,14.25-0.8-.74,14.3-14.25-14.6-14.61,0.7-.74,14.6,14.61,14.3-14.28Z" transform="translate(-10946.15 -1023.83)"></path></svg>');
        
        setTimeout(function(){ 
          $('.modal--social-media.share-post svg.icon-close').click(function (e) { 
            e.preventDefault();   
            $('.modal--social-media.share-post').removeClass("active-share-post");
          });
        }, 1000);

        setTimeout(function(){ 
          $('.modal--social-media.share-comment svg.icon-close').click(function (e) { 
            e.preventDefault();   
            $('.modal--social-media.share-comment').removeClass("active-share-comment");
          });
        }, 1000);

        // Event click show menu mb
        checkIssetIconMenu = $('.region-header #block-mainnavigation-2 svg').length;
        if (checkIssetIconMenu == 0) {
          $('.region-header #block-mainnavigation-2').append('<i class="fas fa-bars" id="icon-menu-mb"></i>');
        }
        
        checkIssetModal = $('body .modal-body-mb').length;
        if(checkIssetModal == false) {
          $('body').prepend('<div class="modal-body-mb"></div>');
        }

        setTimeout(function(){ 
          $('.region-header #icon-menu-mb').click(function (e) { 
            e.preventDefault();   
            $('.region-header #block-mainnavigation-2 ul').toggleClass("active");
            $('body').toggleClass('active-menu');
          });
        }, 1000);

        $('.modal-body-mb').click(function (e) { 
          e.preventDefault();
          $('body').removeClass('active-menu');
          $('.region-header #block-mainnavigation-2 ul').removeClass('active');
        });
  
        // Event click search page news and node/*
        $('#search-block-form .input-group svg.icon-search').click(function (e) { 
          e.preventDefault();   
          $('#search-block-form .input-group').toggleClass('active');
        });
      
        $('#search-block-form .input-group svg.icon-close').click(function (e) { 
          e.preventDefault();   
          $('#search-block-form .input-group').removeClass('active');
        });

        // Add icon search and close page search/node
        checkIssetIconPageSearch = $('.path-search #views-exposed-form-node-functions-page-1 .form-item svg').length;
        if (checkIssetIconPageSearch == 0) {
          $('.path-search #views-exposed-form-node-functions-page-1 .form-type-textfield').append('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-search blog-desktop-header-search-icon-fill"><path d="M12.8617648,11.8617648 L15.8633394,14.8633394 C15.9414442,14.9414442 15.9414442,15.0680772 15.8633394,15.1461821 L15.1461821,15.8633394 C15.0680772,15.9414442 14.9414442,15.9414442 14.8633394,15.8633394 L11.8617648,12.8617648 C10.9329713,13.578444 9.76865182,14.0047607 8.50476074,14.0047607 C5.46719462,14.0047607 3.00476074,11.5423269 3.00476074,8.50476074 C3.00476074,5.46719462 5.46719462,3.00476074 8.50476074,3.00476074 C11.5423269,3.00476074 14.0047607,5.46719462 14.0047607,8.50476074 C14.0047607,9.76865182 13.578444,10.9329713 12.8617648,11.8617648 Z M8.5,13 C10.9852814,13 13,10.9852814 13,8.5 C13,6.01471863 10.9852814,4 8.5,4 C6.01471863,4 4,6.01471863 4,8.5 C4,10.9852814 6.01471863,13 8.5,13 Z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" class="icon-close blog-desktop-header-search-icon-fill" style="fill-rule: evenodd;"><path d="M3144.99,617.882l-1.11,1.109-3.88-3.882-3.88,3.882-1.11-1.109,3.88-3.882-3.88-3.882,1.11-1.109,3.88,3.882,3.88-3.882,1.11,1.109L3141.11,614Z" transform="translate(-3135 -609)"></path></svg>');
        } 

        setTimeout(function() {
          $('#views-exposed-form-node-functions-page-1 .form-type-textfield svg.icon-search').click(function (e) { 
            e.preventDefault();   
            $('#views-exposed-form-node-functions-page-1 .form-type-textfield').toggleClass('active');
          });
        }, 1000);

        setTimeout(function() {
          $('#views-exposed-form-node-functions-page-1 .form-type-textfield svg.icon-close').click(function (e) { 
            e.preventDefault();   
            $('#views-exposed-form-node-functions-page-1 .form-type-textfield').removeClass('active');
          });
        }, 1000);
        
        // Event click change icon share
        var new_item_share = document.querySelectorAll(".new-item__header__share svg.icon-share");
        var i;
        
        for (i = 0; i < new_item_share.length; i++) { 
          new_item_share[i].addEventListener("click", function() { 
            // this.parentElement.classList.toggle("active");
            $(this).parent().toggleClass("active");
          });
        }

        // Event click show modal social media
        var new_item_sharePost = document.querySelectorAll(".new-item__header__share-post");
        var i;
    
        for (i = 0; i < new_item_sharePost.length; i++) { 
          new_item_sharePost[i].addEventListener("click", function() {
            $('.modal--social-media').addClass('active-share-post');
          });
        }

        // Event click change icon share comment
        var new_item_share = document.querySelectorAll(".comment-item__share svg.icon-share");
        var i;
        
        for (i = 0; i < new_item_share.length; i++) { 
          new_item_share[i].addEventListener("click", function() { 
            $(this).parent().toggleClass("active");
            // this.parentElement.classList.toggle("active");
          });
        }

        // Event click show modal social media
        var new_item_sharePost = document.querySelectorAll(".comment-item__share-comment");
        var i;
    
        for (i = 0; i < new_item_sharePost.length; i++) { 
          new_item_sharePost[i].addEventListener("click", function() {
            $('.modal--social-media').addClass('active-share-comment');
          });
        }
        
        // our clients slide
        checkHome = $('body').hasClass('path-frontpage');
        if(checkHome == true && $(window).width() > 991) {
          mouse_prev = document.querySelector(".view-display-id-block_1 .owl-prev");
          mouse_prev.addEventListener("mouseenter", mouseEnterPrev);
          mouse_prev.addEventListener("mouseleave", mouseLeavePrev);

          mouse_next = document.querySelector(".view-display-id-block_1 .owl-next");
          mouse_next.addEventListener("mouseenter", mouseEnterNext);
          mouse_next.addEventListener("mouseleave", mouseLeaveNext);

          htmlOwl_wrapper = $(".owl-wrapper").html();
          widthOwl_wrapper = $(".owl-wrapper").width();
          lastWidth = 0 - ((widthOwl_wrapper / 2) - 980);
          leftStartup = lastWidth / 2;
          i = leftStartup;
          var setPrev, setNext;

          document.querySelector(".view-display-id-block_1 .owl-wrapper").style.left = i + "px";

          function mouseEnterPrev() { 
            setPrev = setInterval(function() {
              if(i < 0) {
                i = i + 1;
                document.querySelector(".view-display-id-block_1 .owl-wrapper").style.left = i + "px";
              }
              else {
                // i = lastWidth;
              }
            }
            ,10)
          } 

          function mouseLeavePrev() { 
            clearInterval(setPrev);
          }

          function mouseEnterNext() { 
            setNext = setInterval(function() {
              if(i > lastWidth) {
                i = i - 1;
                document.querySelector(".view-display-id-block_1 .owl-wrapper").style.left = i + "px";
              }
              else {
                // i = 0;
              }
            }
            ,10)
          } 

          function mouseLeaveNext() { 
            clearInterval(setNext);
          }
        }

        // add icon social sharing
        checkIssetIconFacebook_share = $('#block-socialsharingblock-2 .social-media-sharing .facebook-share.share svg').length;
        if (checkIssetIconFacebook_share == 0) {
          $('#block-socialsharingblock-2 .social-media-sharing .facebook-share.share').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share-facebook"><path d="M8.08865986,17 L8.08865986,10.2073504 L5.7890625,10.2073504 L5.7890625,7.42194226 L8.08865986,7.42194226 L8.08865986,5.08269399 C8.08865986,3.38142605 9.46779813,2.00228778 11.1690661,2.00228778 L13.5731201,2.00228778 L13.5731201,4.50700008 L11.8528988,4.50700008 C11.3123209,4.50700008 10.874068,4.94525303 10.874068,5.48583089 L10.874068,7.42198102 L13.5299033,7.42198102 L13.1628515,10.2073892 L10.874068,10.2073892 L10.874068,17 L8.08865986,17 Z"></path></svg>');
        }

        checkIssetIconLinkedin_share = $('#block-socialsharingblock-2 .social-media-sharing .linkedin.share svg').length;
        if (checkIssetIconLinkedin_share == 0) {
          $('#block-socialsharingblock-2 .social-media-sharing .linkedin.share').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share-linkedin"><path d="M17,17 L13.89343,17 L13.89343,12.1275733 C13.89343,10.9651251 13.87218,9.47069458 12.2781416,9.47069458 C10.660379,9.47069458 10.4126568,10.7365137 10.4126568,12.0434478 L10.4126568,17 L7.30623235,17 L7.30623235,6.98060885 L10.2883591,6.98060885 L10.2883591,8.3495072 L10.3296946,8.3495072 C10.7445056,7.56190587 11.7585364,6.7312941 13.2709225,6.7312941 C16.418828,6.7312941 17,8.80643844 17,11.5041407 L17,17 Z M3.80289931,5.61098151 C2.80647978,5.61098151 2,4.80165627 2,3.80498046 C2,2.80903365 2.80647978,2 3.80289931,2 C4.79669898,2 5.60434314,2.80903365 5.60434314,3.80498046 C5.60434314,4.80165627 4.79669898,5.61098151 3.80289931,5.61098151 Z M2.24786773,17 L2.24786773,6.98060885 L5.35662096,6.98060885 L5.35662096,17 L2.24786773,17 Z"></path></svg>');
        }

        checkIssetIconTwitterk_share = $('#block-socialsharingblock-2 .social-media-sharing .twitter.share svg').length;
        if (checkIssetIconTwitterk_share == 0) {
          $('#block-socialsharingblock-2 .social-media-sharing .twitter.share').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" role="img" class="icon-share-twitter"><path d="M18,4.65548179 C17.3664558,4.9413444 16.6940105,5.12876845 16.0053333,5.21143556 C16.7308774,4.76869949 17.2742158,4.07523994 17.5353333,3.25870539 C16.8519351,3.66952531 16.1046338,3.95967186 15.3253333,4.116758 C14.3449436,3.05903229 12.8270486,2.71461351 11.4952673,3.24769481 C10.1634861,3.78077611 9.28740204,5.08344943 9.28466667,6.53469742 C9.28603297,6.80525838 9.31643401,7.07486596 9.37533333,7.33876278 C6.57168283,7.1960128 3.95976248,5.85317869 2.19,3.64465676 C1.87608497,4.18262214 1.71160854,4.79663908 1.714,5.42164122 C1.61438697,6.56033644 2.09783469,7.6712643 2.99466667,8.36452045 C2.36720064,8.27274888 1.74900117,8.12475716 1.14733333,7.9222845 L1.14733333,7.96708243 C1.26738074,9.69877048 2.5327167,11.1265052 4.21866667,11.4326042 C3.96602896,11.5152522 3.7021383,11.5571156 3.43666667,11.55666 C3.23854288,11.557327 3.0409356,11.5361435 2.84733333,11.4934834 C3.31534048,12.9376046 4.63446966,13.9228162 6.134,13.9481801 C4.90488101,14.9328579 3.38271245,15.4661427 1.816,15.4609716 C1.5432586,15.4614617 1.27074516,15.4449665 1,15.411579 C4.05446938,17.394368 7.93290025,17.5303291 11.1152384,15.7661758 C14.2975765,14.0020226 16.2768505,10.6187983 16.2773333,6.94247342 C16.2773333,6.789701 16.266,6.63692858 16.266,6.4830075 C16.9469737,5.98359293 17.5342367,5.3646551 18,4.65548179 L18,4.65548179 Z"></path></svg>');
        }


        //Add flag language
        // $("#block-chuyendoingonngu ul li.vi").append("");
        
      });
    }
  };
})
(jQuery, Drupal);
