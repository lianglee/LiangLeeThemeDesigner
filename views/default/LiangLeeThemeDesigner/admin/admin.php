<?php 
/**
* Add Farbtastic javascript
**/
echo LiangLee_inc_js('LiangLeeThemeDesigner','jquery/farbtastic.js');
/*
* Regiser Settings for topbar logo
*/
?>
<div class='elgg-module-inline'> 
<div class='elgg-head'> 
<h3><?php echo elgg_echo('leethemed:logo:1:0'); ?></h3> 
</div>		 
    <div> 
<br />
<?php
echo elgg_view('input/dropdown', array(
    'name' => 'params[Leethemed_logotop]',
    'value' => $vars['entity']->Leethemed_logotop,
    'options_values' => array(
	'Enable' => 'Enable Topbar Logo', 
	'disable' => 'Disable TopBar Logo'
	)));
?>			
<hr/> 
      <table border="0"> 
        <tr> 
          <td width=301><?php include_once(LiangLee_plugin_path('LiangLeeThemeDesigner','views').'default/LiangLeeThemeDesigner/forms/header.php');  ?></td> 
          <td width=52>&nbsp;&nbsp;&nbsp;</td> 
          <td width=360><?php echo Lianglee_view('LiangLeeThemeDesigner','forms/clr/header');  ?></td> 
        </tr> 
        <tr> 
          <td>&nbsp;</td> 
          <td>&nbsp;</td> 
          <td>&nbsp;</td> 
        </tr> 
        <tr> 
          <td><?php include_once(LiangLee_plugin_path('LiangLeeThemeDesigner','views').'default/LiangLeeThemeDesigner/forms/bodyandsrch.php'); 
 ?></td> 
          <td>&nbsp;</td> 
          <td width="360"><?php echo Lianglee_view('LiangLeeThemeDesigner','forms/clr/bodyandsrch');  ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><?php include_once(LiangLee_plugin_path('LiangLeeThemeDesigner','views').'default/LiangLeeThemeDesigner/forms/tbar.php');?></td>
          <td>&nbsp;</td>
          <td width="360"><?php echo Lianglee_view('LiangLeeThemeDesigner','forms/clr/topbar');  ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><?php include_once(LiangLee_plugin_path('LiangLeeThemeDesigner','views').'default/LiangLeeThemeDesigner/forms/walledg.php');?></td>
          <td>&nbsp;</td>
          <td><?php echo Lianglee_view('LiangLeeThemeDesigner','forms/clr/walledg');  ?></td>
        </tr> 
</table> 
      