<script>
    jQuery(document).ready(function() {
	    jQuery('#blog-filter a').click(function(){
	    	jQuery('#blog-filter a .fa').css({'border':'1px solid transparent'});
	    	jQuery('.fa',this).css({'border':'1px solid #fff'});
	        var filter = jQuery(this).attr('data-filter');
	        var theUrl = '/wp-content/plugins/allroads/filter.php?filter=' + filter;
	    	jQuery.ajax({
	    		type: 'POST',
	    		url : theUrl,
	    		success: function(msg){
	    			jQuery('.sidebar-post').slideUp(700,function(){
	    				jQuery('.sidebar-posts').html(msg);
	    				jQuery('.sidebar-post').hide().delay(100).slideDown(700);
	    			});
	    		},
	    		error: function(error){

	    		}
	    	});	        
	    });
    });

</script>
