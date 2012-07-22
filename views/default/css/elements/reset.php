<?php
/* LiangLeeThemeDesigner
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLeeThemeDesigner
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File reset.php
 */
/*
 * Include a main css library.
 *
 * @access admin
 */ 
LiangLee_include('LiangLeeThemeDesigner','lib/LiangLeeThemeDesigner_css_main');
/*
 * Call a main css library
 *
 * @access public
 */
LiangLeeThemeDesigner_css_main();
/*
 * Register Global Variables for Body background Color
 *
 * @access public
 */
global $liangbody_color;

?>

/****************************************
	RESET CSS
*************************************** */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
}
body {
	background:<?php echo $liangbody_color; ?>;

}
<?php // force vertical scroll bar ?>
html, body {
	height: 100%;
	margin-bottom: 1px;
}
img {
	border-width:0;
	border-color:transparent;
}
:focus {
	outline: 0 none;
}
ol, ul {
	list-style: none;
}
em, i {
	font-style:italic;
}
ins {
	text-decoration:none;
}
del {
	text-decoration:line-through;
}
strong, b {
	font-weight:bold;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
	vertical-align: top;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}
a {
	text-decoration: none;
}
