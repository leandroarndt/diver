<?php
/**
 * Plugin Name: Diver
 * Plugn URI: http://github.com/leandroarndt/diver/
 * Description: Adds <div> tags directly in the visual editor.
 * Version: 0.1
 * Author: Leandro Arndt
 * Author URI: http://www.caritasinveritate.teo.br/
 * License: BSD
 */
 
/******************************************************************************
Copyright © 2015, Leandro Arndt
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice, this
list of conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright notice,
this list of conditions and the following disclaimer in the documentation
and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
******************************************************************************/

// Avoid using away from WP
defined( 'ABSPATH' ) OR DIE( 'Not running Wordpress?' );

// We need this inclusion in order to use the "embed" parameter
require_once( ABSPATH . WPINC . 'media.php' );

// Shortcode
function div_shortcode( $atts, $content='' ) {
	$a = shortcode_atts( array(
		'float' => 'left',
		'embed' => 'false'
	), $atts );
	if ( $a['embed'] ) {
		return '<div class="float'.$a['float'].' '.$a['class'].'" style="'.$a['style'].'">'.wp_oembed_get($a['embed']).$content.'</div>';
	} else {
		return '<div class="float'.$a['float'].' '.$a['class'].'" style="'.$a['style'].'">
		
		'.$content.'
		
		</div>';
	}
}

add_shortcode( 'div', 'div_shortcode' );

?>