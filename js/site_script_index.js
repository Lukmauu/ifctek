

$(document).on('click', '.false', function (e) {
    e.preventDefault();
    e.stopPropagation();
    return false;
}).on('click', '#hook', function (e) {
    e.preventDefault();
    $('.mob-nav-bar').slideToggle('slow'); //$('.mob-bottom-nav, #white-space').fadeToggle(100);
});
if ($.browser.mobile) {
    $(document).on('tap', '.top', function (e) {
        e.preventDefault();
        $('.mob-nav-bar').slideToggle('slow'); //$('.mob-bottom-nav, #white-space').fadeToggle(100);
    });
}

$(function () {
  
    
    $('.flexslider').flexslider({
        animation : 'slide'
    });


            $('.first_column .headerBanner, .second_column .headerBanner').click(function (e) {
               
                

                var brother = $(this).siblings('p'),
                    thisP = $(this).parent().parent().find('.p-verdana'),
                    flex = $('.flexslider');
                
                e.preventDefault();

                if ($(this).parent().parent().hasClass('second_column') && !$(this).siblings().hasClass('flexslider')) {

                    flex.hide(25);

                }
                
                $(this).parent().parent().find('.p-verdana').not(brother).hide(25);
                
                $(this).parent().parent().find('.headerBanner').removeClass('active_header');

                $(this).siblings().fadeIn(25, function () {

                    var $this = $(this);
                    if ($(this).parent().parent().find('.p-verdana').is(':visible')) {
                        $this.siblings('.headerBanner')
                            .addClass('active_header')
                            .removeClass('headerBannerClass');
                    }
                        
                    
                    
                    if($(this).closest('.flexslider').length > 0) { 
                    
                        $this.siblings('.headerBanner')
                            .addClass('active_header')
                            .removeClass('headerBannerClass');
                    } 
                });
                
            });/* end of columns click function() */
            
            $('.first_column .headerBanner').first().click();
            
            $('.second_column .headerBanner').last().click();
            
            
                //$('.col_slide').cycle({
                //    delay : 3000 ,
                //    speed : 500 ,
                //    nowrap : true
                //});/* FIRST START CYCLE */

                //    $('#testimonial_slide').cycle({
                //        delay: 3000,
                //        speed: 500,
                //        nowrap: true
                //    });/* ANOTHER CYCLE FOR THE CLIENTS TESTIMONIALS */
            
        });/* end */