.farbtastic {
  position: relative;
}
.farbtastic * {
  position: absolute;
  cursor: crosshair;
}
.farbtastic, .farbtastic .wheel {
  width: 195px;
  height: 195px;
}
.farbtastic .color, .farbtastic .overlay {
  top: 47px;
  left: 47px;
  width: 101px;
  height: 101px;
}
.farbtastic .wheel {
  background: url(<?php echo elgg_get_site_url(); ?>mod/LiangLeeThemeDesigner/media/wheel.png) no-repeat;
  width: 195px;
  height: 195px;
}
.farbtastic .overlay {
  background: url(<?php echo elgg_get_site_url(); ?>mod/LiangLeeThemeDesigner/media/mask.png) no-repeat;
}
.farbtastic .marker {
  width: 17px;
  height: 17px;
  margin: -8px 0 0 -8px;
  overflow: hidden; 
  background: url(marker.png) no-repeat;
}
