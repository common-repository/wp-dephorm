<?php
/*
Plugin Name: wp-dephorm
Plugin URI: http://dev.squarecows.com/projects/wp-dephorm
Description: Block phorm from spying on your blog users.
Version: 0.2
Author: Richard Harvey
Author URI: http://dev.squarecows.com

Copyright 2009 Richard Harvey  (email : richard@squarecows.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

depormation.php is covered by a separate license which specificaly denies its use to ISP's. The Rest of the code and images are covered by the GPL version 3 licence. This is at the requestion of https://www.dephormation.org.uk


*/

# Check wordpress version and compatability

global $wp_version;
$required_ver="2.7";
$exit_msg='This plugin requires Wordpress '.$required_ver.' or newer. <a href="http://codex.wordpress.org/Upgrading_WordPress">Please Check for an upgrade</a>';

if (version_compare($wp_version,$required_ver,"<")) {
	exit ($exit_msg);
}

if(!class_exists('wpdephorm') ) :
class wpdephorm {
	var $plugin_url;

function wpdephorm() {
	$this->plugin_url = trailingslashit( WP_PLUGIN_URL.'/'.dirname( plugin_basename(__FILE__)));
	add_action('wp_footer', array(&$this, 'insert_dephorm'),'9');
}

function insert_dephorm() {


   echo '<center>You are protected by wp-dephorm: <a href="http://dev.squarecows.com/projects/wp-dephorm"><img src="'.$this->plugin_url.'dephormation.php" /></a></center>';

}

# end class
}

else :
	exit ("Class wprdfa already declared!");
endif;

$wpdephorm = new wpdephorm();

if(isset($wpdephorm)) {
	register_activation_hook( __FILE__, array(&$wpdephorm, 'install') );

}

?>
