<?php
/*
Plugin Name: anyvite.com RSVP
Plugin URI: http://labs.indyhall.org
Description: Shortcode drop-in for anyvite.com
Author: Alex Hillman and Dave Martorana
Version: 0.0.1
Author URI: http://labs.indyhall.org
*/

add_shortcode('anyviteRSVP', 'anyvite_rsvp_shortcode_handler');

function anyvite_rsvp_shortcode_handler($atts, $content=null) {
    extract(shortcode_atts(
        array(
            'id' => '0',
        ), 
    $atts ));
    
    // Ugly to begin with
    return _get_anyvite_rsvp_html($id);
}

function _get_anyvite_rsvp_html($id)
{
    $anyviteHtml = <<<ANYVITE
    <div id="rsvp" style="margin:0px;padding:0px;background-color:#F6F6F6;border:1px solid #CCC;width:260px;">
	<h2 style="font-size:16px;background-color:#E5E5EB;border-bottom:1px solid #DDD;color:#333;padding:3px 10px 3px 12px;font-family:Georgia;margin:0px;font-weight:100">RSVP Here</h2>
		<div style="margin:10px 12px">
			<div class="change_your_form">
				<form action="http://anyvite.com/events/public_reg/$id" method="post" style="margin:0px">    								
					<div style="width:110px;float:left">
						<label for="first_name">
						<p style="font-family:Verdana;font-size:12px;margin:0px 0px 3px;color:#333;">First Name</p>
						</label>
						<input type="text" name="first_name" value="" id="first_name" maxlength="100" size="50" style="width:100px;margin-bottom:3px;"  />    								
					</div>
					<div style="width:110px;float:right">
						<label for="last_name">
						<p style="font-family:Verdana;font-size:12px;margin:0px 0px 3px;color:#333;">Last Name</p>
						</label>
						<input type="text" name="last_name" value="" id="last_name" maxlength="100" size="50" style="width:100px;margin-bottom:3px;"  />    								
					</div>
					<div style="clear:both"></div>
					<label for="email_address">
					<p style="font-family:Verdana;font-size:12px;margin:10px 0px 3px;color:#333;">Email Address</p>
					</label>
					<input type="text" name="email_address" value="" id="email_address" maxlength="100" size="50" style="width:218px;margin-bottom:3px;"  />    								
					<p style="font-family:Verdana;font-size:12px;margin:10px 0px 10px;color:#333;">
						<label for="RSVP">Your RSVP: </label>
						<select name="response" id='response' class='input_rsvp'>
						<option value="Y">Yes</option>
						<option value="N">No</option>
						</select>   
						<select id="num_guests" class="input_rsvp" name="num_guests">
							<option value="0">+0</option>
							<option value="1">+1</option>
							<option value="2">+2</option>
							<option value="3">+3</option>
							<option value="4">+4</option>
							<option value="5">+5</option>
							<option value="6">+6</option>
							<option value="7">+7</option>
							<option value="8">+8</option>
							<option value="9">+9</option>
						</select> 								
					</p>
					<p style="font-family:Verdana;font-size:12px;margin:10px 0px 10px;color:#333;"><input type="checkbox" id="activity_emails" value="1" name="activity_emails"/> Send me daily activity updates </p>
					<div style="float:left">
						<input type="submit" name="submit" value="Submit" />
					</div>
					</form>
				<div style="float:right;font-family:Verdana;font-size:11px;margin:0px;color:#333;">
					Registered? 
					<a href="http://anyvite.com/events/response/bbslsfpyxc" style="color:#4e5c72">Login to RSVP!</a>    				            
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
</div>
    
ANYVITE;

    return $anyviteHtml;
}