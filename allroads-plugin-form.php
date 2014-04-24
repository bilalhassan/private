<?php
    error_reporting(E_ALL);
?>
<style>
    .left{ float: left;}
    .right {float: right;}
    .center{text-align: center;}
    .width70{ width: 70%;}
    .width25{ width: 25%;}
    #gopro{
        width: 100%;
        display: block;
        clear: both;
        padding: 10px;
        margin: 10px 8px 15px 5px;
        border: 1px solid #e1e1e1;
        background: #f9f9f9;
        overflow: hidden;
    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    #datetimepicker{
        background: url('<?php echo plugins_url() ?>/wp-construction-maintenance_pro/images/calendar.png')
            no-repeat 100%;
        background-size: 22px;
        cursor: pointer;
    }
    table.widefat{
        margin-bottom: 15px;
    }
    table.widefat tr{
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    table.widefat tr:hover{
        /*background: #E6E6E6;*/
    }    
    table.widefat tbody tr td:first-child{
        width: 30%;
    }
    #wrapper input[type='text']{
        width: 90%;
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    #wrapper input[type='text']:focus{
        border: 1px solid #1784c9;
        box-shadow: 0 0 7px #1784c9;
        -moz-box-shadow: 0 0 5px #1784c9;
        -webkit-box-shadow: 0 0 5px #1784c9;
    }
    #wrapper input[type='text'].small-text{
        width: 20%;
    }
    .proversion{
        color: red;
        font-style: italic;
    }
    .choose-time,.choose-progress{
        display: none;
    }
</style>
<?php
    $args = array(
        'numberposts' => -1
    );
    $posts = get_posts($args);
?>
<div id="wrapper">
    <div id="gopro">
        <div class="left">
            <h1><b>All Roads Homepage Customizer</b></h1>
            <div></div>
        </div>
    </div>

    <div class="width25 right">
        <table class="widefat">
            <thead>
                <tr>
                    <th>
                        <img src="http://allroads.me/wp-content/themes/yoo_infinite_wp/styles/allroads/images/logo.png"/>
                    </th>
                </tr>
                <tr>
                    <td>
                        <?php
                        _e("Do you have any questions ? Do you need any help ? Let us know on our website!");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class='center'>
                        <a href='http://smartcatdesign.net/wp-construction-mode-pro-wordpress-plugin/' target='_blank' class='button-primary'>Support</a>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <div class="width70 left">
        <form name="post_form" method="post" action="" enctype="multipart/form-data">
            <table class="widefat">
                <thead>
                    <tr>
                        <th colspan="2">General Settings</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php _E('Row1 - Post')?></td>
                        <td>
                            <select name='allroads_post1'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post1 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    <tr>                    
                    <tr>
                        <td><?php _E('Row2 - Post #1')?></td>
                        <td>
                            <select name='allroads_post2'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post2 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>                     
                    <tr>
                        <td><?php _E('Row2 - Post #2')?></td>
                        <td>
                            <select name='allroads_post3'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post3 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>  
                    <tr>
                        <td><?php _E('Row3 - Post #1')?></td>
                        <td>
                            <select name='allroads_post4'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post4 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>  
                    <tr>
                        <td><?php _E('Row3 - Post #2')?></td>
                        <td>
                            <select name='allroads_post5'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post5 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>      
                    <tr>
                        <td><?php _E('Row5 - Post #1')?></td>
                        <td>
                            <select name='allroads_post6'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post6 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr> 		
                    <tr>
                        <td><?php _E('Row6 - Post #1')?></td>
                        <td>
                            <select name='allroads_post7'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post7 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr> 
                    <tr>
                        <td><?php _E('Row6 - Post #2')?></td>
                        <td>
                            <select name='allroads_post8'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post8 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>
                    <tr>
                        <td><?php _E('Row7 - Post #1')?></td>
                        <td>
                            <select name='allroads_post9'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post9 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>        
                    <tr>
                        <td><?php _E('Row7 - Post #2')?></td>
                        <td>
                            <select name='allroads_post10'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post10 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>        
                    <tr>
                        <td><?php _E('Row8 - Post #1')?></td>
                        <td>
                            <select name='allroads_post11'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post11 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr>  		
                    <tr>
                        <td><?php _E('Row8 - Post #2')?></td>
                        <td>
                            <select name='allroads_post12'>
                                <option value='nochange' selected=selected>No Change</option>
                            <?php
                                foreach ($posts as $post) { ?>
                                    <option value='<?php echo $post->ID; ?>' <?php echo ($allroads_post12 == $post->ID ? 'selected=selected' : '') ?>><?php echo get_the_title($post->ID); ?></option>

                                <?php } ?>
                            </select>
                        </td>
                    <tr> 					
            </table>
            <input type="submit" name="submit" value="Update" class="button button-primary" />
            <input type="hidden" name="act_allroads" value="save" />
        </form>

    </div>
<?php


?>
