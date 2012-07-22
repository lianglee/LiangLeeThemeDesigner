<?php
/* LiangLeeThemeDesigner
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLeeThemeDesigner
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File layout.php 
 */
/*
 * Include a settings css library.
 *
 * @access admin
 */  
LiangLee_include('LiangLeeThemeDesigner','lib/LiangLeeThemeDesigner');
/*
 * Call a settings css library.
 *
 * @access public
 */
LiangLeeThemeDesigner_lib();
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
 * Register Global Variables for Body Background color.
 *
 * @access public
 */

global $liangbody_color;
/*
 * Register Global Variables for Body Background image.
 *
 * @access public
 */
global $liangheader_bgimg;

/*
 * Fetch Settings For Topbar color or image
 *
 * @access public
 */
$bgorcolor =  elgg_get_plugin_setting("Leethemed_tbar_bgorcolor", "LiangLeeThemeDesigner");
/*
 * Fetch Settings For head color or image
 *
 * @access public
 */
$headbgorcolor = elgg_get_plugin_setting("Leethemed_header_bgorimg", "LiangLeeThemeDesigner");
/*
 * Set Default Valuse if topbar is not set
 *
 * @access public
 */
if(!$bgorcolor){
$lee_elgg_page_topbar = '#333333 url('.elgg_get_site_url().'_graphics/toptoolbar_background.gif) repeat-x top left';
}
/*
 * Set a custom image for topbar
 *
 * @access public
 */
if($bgorcolor == 'image'){
$lee_elgg_page_topbar = '#333333 url('.$liangtopbar_bg.') repeat-x top left';
}
/*
 * Set a custom color for topbar 
 *
 * @access public
 */
if($bgorcolor == 'color'){
$lee_elgg_page_topbar = ''.$liangtopbar_color; 
} 
/*
 * Set a default headr color
 *
 * @access public
 */
if(!$headbgorcolor){
$lee_elgg_page_header = '#4690D6 url('.elgg_get_site_url().'_graphics/header_shadow.png) repeat-x bottom left';
}
/*
 * Sett a header imageurl if set to image
 *
 * @access public
 */
if($headbgorcolor == 'image'){
$lee_elgg_page_header = 'url('.$liangheader_bgimg.')';
}
/*
 * Sett a header color if set to color
 *
 * @access public
 */
if($headbgorcolor == 'color'){
$lee_elgg_page_header = $liangheader_color; 
} 
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 90px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: <?php echo $lee_elgg_page_topbar; ?>;
	border-bottom: 1px solid #000000;
	position: relative;
	height: <?php echo $liangtopbar_height; ?>px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
	background:<?php echo $lee_elgg_page_header; ?>;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/sidebar_background.gif) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}