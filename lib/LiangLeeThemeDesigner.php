<?php
/* LiangLeeThemeDesigner
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLeeThemeDesigner
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File LiangLeeThemeDesigner.php 
 */
 
function LiangLeeThemeDesigner_lib(){
/*
 * Register Global Variables.
 *
 * @access public
 */
/*
 * Register Global Variables for Topbar Background image.
 *
 * @access public
 */
global $liangtopbar_bg;
/*
 * Register Global Variables for Topbar Background color.
 *
 * @access public
 */
global $liangtopbar_color;
/*
 * Register Global Variables for Topbar height.
 *
 * @access public
 */
global $liangtopbar_height;
/*
 * Register Global Variables for Header Background Color.
 *
 * @access public
 */
global $liangheader_color;
/*
 * Register Global Variables for Head Logo.
 *
 * @access public
 */
global $lianglogo;
/*
 * Register Global Variables for Header Background image.
 *
 * @access public
 */
global $liangheader_bgimg;
/*
 * Register Global Variables for Search Bar Border Color.
 *
 * @access public
 */
global $liangsearch_br;

/*
 * Register Global Variables for Header Height.
 *
 * @access public
 */
global $liangheader_height;
/*
 * Register Global Variables for WalledGarden Image.
 *
 * @access public
 */
global $liangwalledg_bgimg;

/*
 * Fetch Settings for Header Height.
 *
 * @access public
 */
$liang_walledg = elgg_get_plugin_setting("Leethemed_walledg_background", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_walledg_background", "LiangLeeThemeDesigner")) {
    $liangwalledg_bgimg = '90px';
    } else { 
    $liangwalledg_bgimg = $liang_walledg;
}

/*
 * Fetch Settings for Header Height.
 *
 * @access public
 */
$liang_header_height = elgg_get_plugin_setting("Leethemed_header_height", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_header_height", "LiangLeeThemeDesigner")) {
    $liangheader_height = '90px';
    } else { 
    $liangheader_height = $liang_header_height;
}
/*
 * Fetch Settings for Topbar Background.
 *
 * @access public
 */
$liang_topbar_bg = elgg_get_plugin_setting("Leethemed_background", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_background", "LiangLeeThemeDesigner")) {
     $liangtopbar_bg = elgg_get_site_url().'_graphics/toptoolbar_background.gif';
     } else { 
     $liangtopbar_bg = $liang_topbar_bg;
}

/*
 * Fetch Settings for Topbar Background Color.
 *
 * @access public
 */
$liang_topbar_color = elgg_get_plugin_setting("Leethemed_tbar_bgcolor", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_tbar_bgcolor", "LiangLeeThemeDesigner")) {
    $liangtopbar_color = '#333333';
    } else { 
    $liangtopbar_color = $liang_topbar_color;
}
/*
 * Fetch Settings for Topbar Height.
 *
 * @access public
 */
$liang_topbar_height = elgg_get_plugin_setting("Leethemed_tbar_height", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_tbar_height", "LiangLeeThemeDesigner")) {
     $liangtopbar_height = '24';
     } else { 
     $liangtopbar_height = $liang_topbar_height;
}
/*
 * Fetch Settings for Header Background image.
 *
 * @access public
 */
$liang_header_bgimg = elgg_get_plugin_setting("Leethemed_header_bgimg", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_header_bgimg", "LiangLeeThemeDesigner")) {
     $liangheader_bgimg = '#4690D6 url('.elgg_get_site_url().'_graphics/header_shadow.png) repeat-x bottom left';
     } else { 
      $liangheader_bgimg = $liang_header_bgimg;
}
/*
 * Fetch Settings for Header Background Image.
 *
 * @access public
 */
$liang_header_color = elgg_get_plugin_setting("Leethemed_header_bgcolor", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_header_bgcolor", "LiangLeeThemeDesigner")) {
     $liangheader_color = '#4690D6';
     } else { 
     $liangheader_color = $liang_header_color;
}
/*
 * Fetch Settings for Topbar Logo.
 * Display ($site->name) site name if logo not setup.
 * @access public
 */
$liang_logo = elgg_get_plugin_setting("Leethemed_logo", "LiangLeeThemeDesigner");
if (!elgg_get_plugin_setting("Leethemed_logo", "LiangLeeThemeDesigner")) {
     $site = elgg_get_site_entity();
     $site_name = $site->name;
     $lianglogo = $site_name;
     } else { 
     $lianglogo = $liang_logo;
}

}
?>