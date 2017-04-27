<?php
/*
Plugin Name: WPLMS H5p Plugin
Plugin URI: http://www.vibethemes.com
Description: Plugin to integrate wplms and H5p .Requires h5p plugin .
Version: 1.1
Author: VibeThemes,alexhal
Author URI: http://www.vibethemes.com
License: GPL2
*/
/*
Copyright 2014  VibeThemes  (email : vibethemes@gmail.com)

wplms_h5p program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

wplms_h5p program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with wplms_h5p program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


include_once 'classes/wplms.h5p.class.php';



if(class_exists('Wplms_H5p_Class'))
{	
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('Wplms_H5p_Class', 'activate'));
    register_deactivation_hook(__FILE__, array('Wplms_H5p_Class', 'deactivate'));

    // instantiate the plugin class
    add_action('init',function(){
    	if ( in_array( 'vibe-customtypes/vibe-customtypes.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && in_array( 'vibe-course-module/loader.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && in_array( 'h5p/h5p.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )) {
    		$wplms_h5p = Wplms_H5p_Class::init();
    	}
    });
   	 
}
add_action('plugins_loaded','wplms_h5p_translations');
function wplms_h5p_translations(){
  $locale = apply_filters("plugin_locale", get_locale(), 'wplms-h5p');
  $lang_dir = dirname( __FILE__ ) . '/languages/';
  $mofile        = sprintf( '%1$s-%2$s.mo', 'wplms-h5p', $locale );
  $mofile_local  = $lang_dir . $mofile;
  $mofile_global = WP_LANG_DIR . '/plugins/' . $mofile;

  if ( file_exists( $mofile_global ) ) {
      load_textdomain( 'wplms-h5p', $mofile_global );
  } else {
      load_textdomain( 'wplms-h5p', $mofile_local );
  }  
}