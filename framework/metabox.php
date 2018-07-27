<?php
//meta box teached by https://code.tutsplus.com/tutorials/how-to-create-custom-wordpress-writemeta-boxes--wp-20336

//add meta box
add_action( 'add_meta_boxes', 'sin_meta_box_add' );
function sin_meta_box_add()
{
    add_meta_box( 'my-meta-box-id', 'Attraction form', 'sin_meta_box_attForm', 'attractions', 'normal', 'high' );
}

//render meta box


function sin_meta_box_attForm($post)
{
	$values = get_post_custom( $post->ID);
	//esc is a data validator function https://codex.wordpress.org/Data_Validation
	$localName = isset ($values['local-name'][0]) ? esc_attr( $values['local-name'][0]): '';
    $localNameGlob = isset ($values['local-name-glob'][0]) ? esc_attr( $values['local-name-glob'][0]): '';
    $attType = isset ($values['attType'][0]) ? esc_attr($values['attType'][0]): '';
    $centuryWhere = isset ($values['centuryWhere'][0]) ? esc_attr($values['centuryWhere'][0]): '';
    $century = isset ($values['century'][0]) ? esc_attr($values['century'][0]): '';
    $bsAd = isset ($values['bsAd'][0]) ? esc_attr($values['bsAd'][0]): '';
    $openHr = isset ($values['openHr'][0]) ? esc_attr($values['openHr'][0]): '';
    $stAm = isset ($values['stAm'][0]) ? esc_attr($values['stAm'][0]): '';
    $endHr = isset ($values['endHr'][0]) ? esc_attr($values['endHr'][0]): '';
    $endAm = isset ($values['endAm'][0]) ? esc_attr($values['endAm'][0]): '';
    $contact = isset ($values['contact'][0]) ? esc_attr($values['contact'][0]): '';
    $disFrom = isset ($values['disFrom'][0]) ? esc_attr($values['disFrom'][0]): '';
    $durTime = isset ($values['durTime'][0]) ? esc_attr($values['durTime'][0]): '';
    $ticPrice = isset ($values['ticPrice'][0]) ? esc_attr($values['ticPrice'][0]): '';
    $impNotes = isset ($values['impNotes'][0]) ? esc_attr($values['impNotes'][0]): '';


	// teached https://codex.wordpress.org/WordPress_Nonces
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
 ?>

 <!-- local Name -->
    <label for="local-name">Local Name(in local languge) </label>
    <input type="text" name="local-name" id="local-name" value="<?php echo $localName ?>"><br>
    <label for="local-name-glob">Local Name(in Global Languge)</label>
    <input type="text" name="local-name-glob" id="local-name-glob" value="<?php echo $localNameGlob ?>">

 <!-- End local Name -->
    <br>

 <!-- Type of Attractions -->   
    <label for="attType">Type of Attraction</label>
     <select name="attType" id="attType">
        <option value="palace" <?php selected( $attType, 'Palace')?>>Palace</option>
        <option value="squer" <?php selected( $attType, 'Squer')?>>Squer</option>
        <option value="shopping" <?php selected( $attType, 'Shopping')?>>Shopping</option>
        <option value="Nature" <?php selected( $attType, 'Nature')?>>Nature</option>
    </select>
<!-- End Type of Attractions -->     
    <br>
<!-- Location --> 
    <label for="location">Location</label>
    <input type="text" name="location" id="location" value="<?php echo $attType ?>"><br>
<!-- End Location --> 

<!--Year Built -->     
    <p>Year Built</p>    
    <select name="centuryWhere" id="centuryWhere">
        <option value="Beginning" <?php selected($centuryWhere, 'Beginning') ?>>Beginning</option>
        <option value="Middle" <?php selected($centuryWhere, 'Middle') ?>>Middle</option>
        <option value="End" <?php selected($centuryWhere, 'End') ?>>End</option>
    </select>
    <span>of the </span>
    <select name="century" id="century">
        <option value="First" <?php selected( $century , 'First') ?>>First</option>
        <option value="2nd" <?php selected( $century , '2nd') ?>>2nd</option>
        <option value="3th" <?php selected( $century , '3 th') ?>>3 th</option>
        <option value="4th" <?php selected( $century , '4th') ?>>4th</option>
        <option value="5th" <?php selected( $century , '5th') ?>>5th</option>
        <option value="6th" <?php selected( $century , '6th') ?>>6th</option>
        <option value="7th" <?php selected( $century , '7th') ?>>7th</option>
        <option value="8th" <?php selected( $century , '8th') ?>>8th</option>
        <option value="9th" <?php selected( $century , '9th') ?>>9th</option>
        <option value="10th" <?php selected( $century , '10th') ?>>10th</option>
        <option value="11th" <?php selected( $century , '11th') ?>>11th</option>
        <option value="12th" <?php selected( $century , '12th') ?>>12th</option>
        <option value="13th" <?php selected( $century , '13th') ?>>13th</option>
        <option value="14th" <?php selected( $century , '14th') ?>>14th</option>
        <option value="15th" <?php selected( $century , '15th') ?>>15th</option>
        <option value="16th" <?php selected( $century , '16th') ?>>16th</option>
        <option value="17th" <?php selected( $century , '17th') ?>>17th</option>
        <option value="18th" <?php selected( $century , '18th') ?>>18th</option>
        <option value="19th" <?php selected( $century , '19th') ?>>19th</option>
        <option value="20th" <?php selected( $century , '20th') ?>>20th</option>
        <option value="21th" <?php selected( $century , '21th') ?>>21th</option>
    </select>

    <select name="bcAd" id="bcAd">
        <option value="BC" <?php selected($bcAd , 'BC') ?>>BC</option>
        <option value="AD" <?php selected($bcAd , 'AD') ?>>AD</option>
    </select>
    <br><br>
<!--End Year Built -->  

<!--Opening Time -->
    <label for="openHr"> Start Time: </label>
    <select name="openHr" id="openHr">
        <option value="1" <?php selected($openHr , '1') ?>>1</option>
        <option value="2" <?php selected($openHr , '2') ?>>2</option>
        <option value="3" <?php selected($openHr , '3') ?>>3</option>
        <option value="4" <?php selected($openHr , '4') ?>>4</option>
        <option value="5" <?php selected($openHr , '5') ?>>5</option>
        <option value="6" <?php selected($openHr , '6') ?>>6</option>
        <option value="7" <?php selected($openHr , '7') ?>>7</option>
        <option value="8" <?php selected($openHr , '8') ?>>8</option>
        <option value="9" <?php selected($openHr , '9') ?>>9</option>
        <option value="10" <?php selected($openHr , '10') ?>>10</option>
        <option value="11" <?php selected($openHr , '11') ?>>11</option>
        <option value="12" <?php selected($openHr , '12') ?>>12</option>
    </select>
    <select name="stAm" id="stAm">
        <option value="AM" <?php selected($stAm , 'AM') ?>>AM</option>
        <option value="PM" <?php selected($stAm , 'PM') ?>>PM</option>
    </select>
    <span> ----------</span>
    <label for="endHr">End Time: </label>
    <select name="endHr" id="endHr">
        <option value="1" <?php selected($endHr , '1') ?>>1</option>
        <option value="2" <?php selected($endHr , '2') ?>>2</option>
        <option value="3" <?php selected($endHr , '3') ?>>3</option>
        <option value="4" <?php selected($endHr , '4') ?>>4</option>
        <option value="5" <?php selected($endHr , '5') ?>>5</option>
        <option value="6" <?php selected($endHr , '6') ?>>6</option>
        <option value="7" <?php selected($endHr , '7') ?>>7</option>
        <option value="8" <?php selected($endHr , '8') ?>>8</option>
        <option value="9" <?php selected($endHr , '9') ?>>9</option>
        <option value="10" <?php selected($endHr , '10') ?>>10</option>
        <option value="11" <?php selected($endHr , '11') ?>>11</option>
        <option value="12" <?php selected($endHr , '12') ?>>12</option>
    </select>
    <select name="endAm" id="endAm">
        <option value="AM" <?php selected($endAm , 'AM') ?>>AM</option>
        <option value="PM" <?php selected($endAm , 'PM') ?>>PM</option>
    </select>
    <br><br>

<!-- end Opening Time -->  

<!-- Contact Information -->  
    <label for="telNum">Tel Number</label>
    <input type="text" name="telNum" id="telNum" value="<?php echo $telNum ?>">
    <br><br>
<!-- end Contact Information -->

<!-- Distance From -->
    <label for="disFrom">Distance From</label>
    <input type="text" name="disFrom" id=disFromm" value="<?php echo $disFrom ?>">
    <br><br>

<!-- end Distance From -->

<!-- Suggested Duration of visit -->

    <label for="durTime">Suggested Duration of visit</label>
    <select name="durTime" id="durTime">
        <option value="1 hour" <?php selected($durTime , '1 hour') ?>> 1 hour</option>
        <option value="2 hours" <?php selected($durTime , '2 hours') ?>> 2 hours</option>
        <option value="3 hours" <?php selected($durTime , '3 hours') ?>> 3 hours</option>
        <option value="Half a day" <?php selected($durTime , 'Half a day') ?>> Half a day</option>
        <option value="A Copmplete Day" <?php selected($durTime , 'A Copmplete Day') ?>> A Copmplete Day</option>
    </select>
<!-- end Suggested Duration of visit -->
    <br><br>
<!-- Ticket price  -->
    <label for="ticPrice"> Ticket Price </label>
    <input type="text" name="ticPrice" id="ticPrice" value="<?php echo $ticPrice ?>">
     <br><br>
<!-- end Ticket price  -->

<!--Why this place (Important notes) -->
    <label for="impNotes">Why this place (Important notes)</label><br>
    <textarea name="impNotes" id="impNotes" style="width: 100%;" rows="10"><?php echo $impNotes ; ?></textarea>
    <br><br>
<!-- end Why this place (Important notes) -->

    <?php
}

//update and save meta box
add_action('save_post' , 'sin_meta_box_save');
function sin_meta_box_save($post_id){
	// Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;


     // now we can actually save the data
    
     
    // Make sure your data is set before trying to save it
    if( isset( $_POST['local-name'] ) )
        update_post_meta( $post_id, 'local-name', esc_attr( $_POST['local-name']) );

    if( isset( $_POST['local-name-glob'] ) )
        update_post_meta( $post_id, 'local-name-glob', esc_attr( $_POST['local-name-glob']) );
         
    if( isset( $_POST['attType'] ) )
        update_post_meta( $post_id, 'attType', esc_attr( $_POST['attType'] ) );

    if( isset( $_POST['centuryWhere'] ) )
        update_post_meta( $post_id, 'centuryWhere', esc_attr( $_POST['centuryWhere'] ) );

    if( isset( $_POST['century'] ) )
        update_post_meta( $post_id, 'century', esc_attr( $_POST['century'] ) );

    if( isset( $_POST['bcAd'] ) )
        update_post_meta( $post_id, 'bcAd', esc_attr( $_POST['bcAd'] ) );

     if( isset( $_POST['openHr'] ) )
        update_post_meta( $post_id, 'openHr', esc_attr( $_POST['openHr'] ) );

     if( isset( $_POST['stAm'] ) )
        update_post_meta( $post_id, 'stAm', esc_attr( $_POST['stAm'] ) );

     if( isset( $_POST['endHr'] ) )
        update_post_meta( $post_id, 'endHr', esc_attr( $_POST['endHr'] ) );

     if( isset( $_POST['endAm'] ) )
        update_post_meta( $post_id, 'endAm', esc_attr( $_POST['endAm'] ) );

     if( isset( $_POST['telNum'] ) )
        update_post_meta( $post_id, 'telNum', esc_attr( $_POST['telNum'] ) );    
         
     if( isset( $_POST['contact'] ) )
        update_post_meta( $post_id, 'contact', esc_attr( $_POST['contact'] ) ); 

     if( isset( $_POST['disFrom'] ) )
        update_post_meta( $post_id, 'disFrom', esc_attr( $_POST['disFrom'] ) );

     if( isset( $_POST['durTime'] ) )
        update_post_meta( $post_id, 'durTime', esc_attr( $_POST['durTime'] ) );  

     if( isset( $_POST['ticPrice'] ) )
        update_post_meta( $post_id, 'ticPrice', esc_attr( $_POST['ticPrice'] ) );  

     if( isset( $_POST['ticPrice'] ) )
        update_post_meta( $post_id, 'ticPrice', esc_attr( $_POST['ticPrice'] ) );
}

