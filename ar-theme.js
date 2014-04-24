/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

jQuery(function($) {

    var config = $('html').data('config') || {};

    // Social buttons
    $('article[data-permalink]').socialButtons(config);

    // honeycomb init
    $('.honeycombs').honeycombs();

    // homepage Salient
    // $('.homepage-post').hover(function(){
    // 	$('.homepage-post').not($(this)).stop(true,false).animate({'opacity':'0.9'},300);
    // },function(){
    // 	$('.homepage-post').stop(true,false).animate({'opacity':'1'},200);
    // });
    // gravity forms buttons
    $('.gform_button').addClass('uk-button uk-button-primary');

    //side blog
    $('.tm-logo').click(function(){
        if($(this).hasClass('open')){
            
            $(this).removeClass('open');
            $('.uk-container,.tm-headerbar').animate({
                'left':'350px'
            },200,function(){
                $(this).animate({
                    'left':'0'
                },500,function(){
                    $('.side-blog').css({'background':'#ffffff','box-shadow':'none'});       
                });
                // $('.side-blog').hide();
                $('.sidebar-post').fadeOut(200);
            });     
        }else{
            $(this).addClass('open');
            // $('.side-blog').show();                    
            $('.side-blog').css({'background':'#464646','background-image':'url("/wp-content/uploads/noise-bg.png")','background-repeat':'repeat','box-shadow':'-5px 0 5px #000 inset'});
            $('.uk-container,.tm-headerbar').animate({
                'left':'350px'
            },500,function(){
                $(this).animate({
                    'left':'335px'
                },200,function(){
                    $('.sidebar-post').fadeIn('200');                                      
                });
            }); 
              
        }
    });

    //sidebar
    $('.sidebar-filter').click(function(){
        if($(this).hasClass('open')){
            $(this).removeClass('open');
            $('#sidebar-filter').animate({'right':'-95px'},400,function(){
                $('img',this).css({'-webkit-transform':'rotate(180deg)','left':'-3px'});   
            });
            
        }else{
            $(this).addClass('open');
            $('#sidebar-filter').animate({'right':'0'},475,function(){
                $('img',this).css({'-webkit-transform':'rotate(0deg)','left':'-0'});
            });
        }
    })
    // menu
    $('.uk-navbar-nav li:first-child a,.uk-navbar-nav li:nth-child(2) a,.uk-navbar-nav li:nth-child(3) a').prepend('<span>Learn</span>');

    // About Us
    $('#allroads-emp').hide();

    $('.comb').click(function(){
        resetComb();
        var image = $('.emp-pic',this).attr('data-image');
        var desc = $('.emp-pic',this).attr('data-desc');
        var url = $('.emp-pic',this).attr('data-url');
        var name = $('.emp-pic',this).attr('data-name');
        var position = $('.emp-pic',this).attr('data-position');

        // alert(image + desc + url + name + position);
        $('#allroads-emp .pic').css({'background-image':'url(' + image + ')'});
        $('#allroads-emp h3').html(name);
        $('#allroads-emp p').html(desc);
        $('#allroads-emp a').attr('href',url);
        $('#allroads-emp').fadeIn(300);
    });
    $('#allroads-emp .emp-close-box .fa').click(function(){
        resetComb();        
    })
    function resetComb(){
        $('#allroads-emp').hide();
        $('#allroads-emp .pic').css({'background-image':'url()'});
        $('#allroads-emp h3').html('');
        $('#allroads-emp p').html('');
        $('#allroads-emp a').attr('href','');
        // $('#allroads-emp').fadeIn(300);        
    }


});
