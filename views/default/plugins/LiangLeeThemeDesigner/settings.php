<?php
/* LiangLee Theme Designer
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLee Theme Designer
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File settings.php
 */
/**
* Get Veersion
**/
$plug_ver = LiangLee_version('LiangLeeThemeDesigner');
$plug_rel = LiangLee_release('LiangLeeThemeDesigner');
include(LiangLee_plugin_path('LiangLeeThemeDesigner','views').'default/LiangLeeThemeDesigner/admin/admin.php'); 

?>	  
<hr/>
  <?php 
/*
* Add Version
*/
echo "Version: ".$plug_ver; 
echo '<br/>';
/*
* Add release
*/ 
echo 'Release: '.$plug_rel;
echo '<br/>';
/*
* Add copyright
*/
echo elgg_echo('lianglee:copyr:12');  
echo '<br/>';
?>