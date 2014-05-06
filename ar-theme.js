/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

jQuery(function($) {

    var config = $('html').data('config') || {};

    // Social buttons
    $('article[data-permalink]').socialButtons(config);

    // honeycomb init
    $('.honeycombs').honeycombs();
    // $('.tm-logo .fa').pulsate({color: '#ccc',onHover:false});

    var last_position = 0;
    $('.gform_button').addClass('uk-button uk-button-primary');

    $('.sidebar-post').effect();
    //side blog
    $('.tm-logo').click(function(){
        if($(this).hasClass('open')){
            $(this).removeClass('open');
            $('.uk-container,.tm-headerbar').stop(true,false).animate({
                'left':'350px'
            },200,function(){
                $(this).animate({
                    'left':'0'
                },500,function(){
                    // $('.side-blog').css({'box-shadow':'none'});       
                });
            });
            $.ajax({
                type: 'GET',
                url: '/wp-content/themes/allroads/layouts/tracker.php?menu=0',
                success: function(msg){
                },
                error: function(error){
                }
            });     
        }else{
            $(this).addClass('open');
            // $('.side-blog').show();                    
            // $('.side-blog').css({'background':'#464646','box-shadow':'-5px 0 5px #000 inset'});
            $('.uk-container,.tm-headerbar').stop(true,false).animate({
                'left':'350px'
            },500,function(){
                $(this).animate({
                    'left':'335px'
                },200,function(){
                    // $('.sidebar-post').fadeIn('200');                                      
                });
            }); 
            $.ajax({
                type: 'GET',
                url: '/wp-content/themes/allroads/layouts/tracker.php?menu=1',
                success: function(msg){
                },
                error: function(error){
                }
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
        };
    });
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
        $('#allroads-emp h4').html(position);
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
        $('#allroads-emp h4').html('');
        $('#allroads-emp p').html('');
        $('#allroads-emp a').attr('href','');
        // $('#allroads-emp').fadeIn(300);        
    }
});
