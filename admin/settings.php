<?php  ?>

<div class="metadata-wrapper">
	<h4 class="labels"> HIDE SECTION TITLE</h4>
	  <div class='switchboxWrapper'>
	    <span class="left">OFF</span> <span class="right">ON</span>
	  <input class='switch default' id='_hide_section_title'  type="checkbox" name="_hide_section_title" value="1" <?php if ($setting_check_data == 1) { echo "checked='checked'"; } ?> />
	  <label for='_hide_section_title'></label>
	</div>
</div>

 <div class="metadata-wrapper">
 	<h4 class="labels"> HIDE OPEN/CLOSE LINKS</h4>
 	  <div class='switchboxWrapper'>
 	    <span class="left">OFF</span> <span class="right">ON</span>
 	  <input class='switch default' id='_show_hide_links'  type="checkbox" name="_show_hide_links" value="1" <?php if ($setting_check_data2 == 1) { echo "checked='checked'"; } ?> />
 	  <label for='_show_hide_links'></label>
 	</div>
 </div>
 
<div class="metadata-wrapper">
	<h4 class="labels">TITLE BACKGROUND</h4>
	<input id="_title_bg_clr" name="_title_bg_clr" type="text" value="<?php echo $_title_bg_clr; ?>"  class="my-color-field"   />
</div>
 
<div class="metadata-wrapper">
	<h4 class="labels">TITLE FONT COLOR</h4>
	<input id="_title_font_clr" name="_title_font_clr" type="text" value="<?php echo $_title_font_clr; ?>"  class="my-color-field"   />
</div>

<div class="metadata-wrapper">
	<h4 class="labels">DESCRIPTION BACKGROUND</h4>
	<input id="_desc_bg_clr" name="_desc_bg_clr" type="text" value="<?php echo $_desc_bg_clr; ?>"  class="my-color-field"   />
</div>

<div class="metadata-wrapper">
	<h4 class="labels">DESCRIPTION FONT COLOR</h4>
	<input id="_desc_font_clr" name="_desc_font_clr" type="text" value="<?php echo $_desc_font_clr; ?>"  class="my-color-field"   />
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels">HIDE ICON</h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	  <div class='switchboxWrapper'>
	    <span class="left">OFF</span> <span class="right">ON</span>
	  <input class='switch default' id='hide_icon_checkbox'  disabled="disabled" type="checkbox" name="hide_icon_checkbox" value="1" <?php if ($hide_icon == 1) { echo "checked='checked'"; } ?> />
	  <label for='hide_icon_checkbox'></label>
	</div>
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels">MOVE ICON TO LEFT</h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	  <div class='switchboxWrapper'>
	    <span class="left">OFF</span> <span class="right">ON</span>
	  <input class='switch default' id='move_icon_checkbox'  disabled="disabled" type="checkbox" name="move_icon_checkbox" value="1" <?php if ($move_icon_checkbox == 1) { echo "checked='checked'"; } ?> />
	  <label for='move_icon_checkbox'></label>
	</div>
</div>


<div class="metadata-wrapper material-metapro">
	<h4 class="labels">SLOWER TAB OPENING</h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	  <div class='switchboxWrapper'>
	    <span class="left">OFF</span> <span class="right">ON</span>
	  <input class='switch default' id='slower_tabs'  disabled="disabled" type="checkbox" name="slower_tabs" value="1" <?php if ($slower_tabs == 1) { echo "checked='checked'"; } ?> />
	  <label for='slower_tabs'></label>
	</div>
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels"> REMOVE SHOW/HIDE BUTTONS</h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	  <div class='switchboxWrapper'>
	    <span class="left">OFF</span> <span class="right">ON</span>
	  <input class='switch default' id='show_hide_links'  disabled="disabled" type="checkbox" name="show_hide_links" value="1" <?php if ($show_hide_links == 1) { echo "checked='checked'"; } ?> />
	  <label for='show_hide_links'></label>
	</div>
</div>

<div class="metadata-wrapper material-metapro">
   <h4 class="labels">  CHANGE SHOW/HIDE POSITION </h4>
<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	<div class='switchboxWrapper show-hide'>
	  <?php if(!isset($show_hide_pos) ) $show_hide_pos = "right"; ?>	
	  <p>
       <label>
        <input disabled="disabled" type="radio" name="show_hide_pos" value="right" <?php if($show_hide_pos == "right" ) { echo "checked"; } ?>   />
         <span> Right Side  </span>
       </label>
       </p>
	     <p>
          <label>
           	<input disabled="disabled" type="radio" name="show_hide_pos" value="center" <?php if($show_hide_pos == "center" ) { echo "checked"; } ?>   />
            <span> Center   </span>
          </label>
        </p>
        <p>
         <label>
          	<input disabled="disabled" type="radio" name="show_hide_pos" value="left" <?php if($show_hide_pos == "left" ) { echo "checked"; } ?>   />
           <span> Left Side   </span>
         </label>
       </p> 
	 </div>
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels"> TITLE FONT SIZE </h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	 <div class="range-slider">
	   <input class="range-slider__range" disabled="disabled" type="range" id="title_size" name="title_size" value="<?php echo $title_size ?>" min="5" max="30">
	   <span class="range-slider__value">0</span>
	 </div>
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels"> TITLE BORDER RADIUS </h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	 <div class="range-slider">
	   <input class="range-slider__range" disabled="disabled" type="range" id="title_border" name="title_border" value="<?php echo $title_border ?>" min="0" max="20">
	   <span class="range-slider__value">0</span>
	 </div>
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels"> DESCRIPTION FONT SIZE </h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	 <div class="range-slider">
	   <input class="range-slider__range" disabled="disabled" type="range" id="desc_size" name="desc_size" value="<?php echo $desc_size ?>" min="5" max="30">
	   <span class="range-slider__value">0</span>
	 </div>
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels"> DESCRIPTION BORDER <br>RADIUS </h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	 <div class="range-slider">
	   <input class="range-slider__range" disabled="disabled" type="range" id="desc_border" name="desc_border" value="<?php echo $desc_border ?>" min="0" max="20">
	   <span class="range-slider__value">0</span>
	 </div>
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels">ICON FONT COLOR</h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	<input id="_icon_font_clr" name="_icon_font_clr" disabled="disabled" type="text" value="<?php echo $icon_font_clr; ?>"  class="my-color-field"   />
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels">SHOW & HIDE LINKS BACKGROUND </h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	<input id="_show_hide_clr" name="_show_hide_clr" disabled="disabled" type="text" value="<?php echo $show_hide_clr; ?>"  class="my-color-field"   />
</div>

<div class="metadata-wrapper material-metapro">
	<h4 class="labels">SHOW & HIDE LINKS<br> FONT COLOR </h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
	<input id="_show_hide_font_clr" name="_show_hide_font_clr" disabled="disabled" type="text" value="<?php echo $show_hide_font_clr; ?>"  class="my-color-field"   />
</div>



  <div class="metadata-wrapper material-metapro">
 	<h4 class="labels"> ANIMATIONS</h4>
 	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a>
 	  <div class='switchboxWrapper'>
 	  	<?php if(!isset($font_animation)) $font_animation = "Initial";?>	
 	  	<select name="font_animation" id="font_animation" class="font-dropdown">
 	  		<optgroup label="Animations">

 	  			<option value="default" <?php if($font_animation == 'No Animation' ) { echo "selected"; } ?>>No Animation</option>
 	  			<option value="slideInLeft" <?php if($font_animation == 'slideInLeft' ) { echo "selected"; } ?>>slideInLeft</option>
 	  			<option value="slideInRight"  <?php if($font_animation == 'slideInRight' ) { echo "selected"; } ?>>slideInRight</option>
 	  			<option value="slideInUp" <?php if($font_animation == 'slideInUp' ) { echo "selected"; } ?>>slideInUp</option>
 	  			<option value="slideInDown"  <?php if($font_animation == 'slideInDown' ) { echo "selected"; } ?>>slideInDown</option>

 	  			<option value="zoomInLeft" <?php if($font_animation == 'zoomInLeft' ) { echo "selected"; } ?>>zoomInLeft</option>
 	  			<option value="zoomInRight"  <?php if($font_animation == 'zoomInRight' ) { echo "selected"; } ?>>zoomInRight</option>
 	  			<option value="zoomInUp" <?php if($font_animation == 'zoomInUp' ) { echo "selected"; } ?>>zoomInUp</option>
 	  			<option value="zoomInDown"  <?php if($font_animation == 'zoomInDown' ) { echo "selected"; } ?>>zoomInDown</option>

 	  			<option value="fadeInLeft" <?php if($font_animation == 'fadeInLeft' ) { echo "selected"; } ?>>fadeInLeft</option>
 	  			<option value="fadeInRight"  <?php if($font_animation == 'fadeInRight' ) { echo "selected"; } ?>>fadeInRight</option>
 	  			<option value="fadeInUp" <?php if($font_animation == 'fadeInUp' ) { echo "selected"; } ?>>fadeInUp</option>
 	  			<option value="fadeInDown"  <?php if($font_animation == 'fadeInDown' ) { echo "selected"; } ?>>fadeInDown</option>

 	  			<option value="rotateIn"    <?php if($font_animation == 'rotateIn' ) { echo "selected"; } ?>>rotateIn</option>
 	  			<option value="shakeIn"    <?php if($font_animation == 'shakeIn' ) { echo "selected"; } ?>>shakeIn</option>
 	  			<option value="flipIn"    <?php if($font_animation == 'flipIn' ) { echo "selected"; } ?>>flipIn</option>
 	  			<option value="rubberBand"    <?php if($font_animation == 'rubberBand' ) { echo "selected"; } ?>>rubberBand</option>
 	  			 
 	  		</optgroup>
 	  	</select>
 	</div>
 </div>
 		
 

 <div class="metadata-wrapper material-metapro">
	<h4 class="labels"> FONT FAMILY</h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a></a>
	  <div class='switchboxWrapper'>
		  <?php 
		  
		  if(!isset($font_family)) $font_family = "Initial";

		  ?>	
	  	<select name="font_family" id="font_family" class="font-dropdown">
	  		<optgroup label="<?php   $font_group = "Basic Fonts"; echo $font_group; ?>">
	  			<option value="default" <?php if($font_family == 'default' ) { echo "selected"; } ?>>  Default</option>
	  			<option value="Arial"           <?php if($font_family == 'Arial' ) { echo "selected"; } ?>>Arial</option>
	  			<option value="Arial Black"    <?php if($font_family == 'Arial Black' ) { echo "selected"; } ?>>Arial Black</option>
	  			<option value="Courier New"     <?php if($font_family == 'Courier New' ) { echo "selected"; } ?>>Courier New</option>
	  			<option value="Monospace"   <?php if($font_family == 'Monospace' ) { echo "selected"; } ?>>Monospace</option>
	  			<option value="Georgia"         <?php if($font_family == 'Georgia' ) { echo "selected"; } ?>>Georgia</option>
	  			<option value="Grande"          <?php if($font_family == 'Grande' ) { echo "selected"; } ?>>Grande</option>
	  			<option value="Helvetica" 	<?php if($font_family == 'Helvetica' ) { echo "selected"; } ?>>Helvetica Neue</option>
	  			<option value="Impact"         <?php if($font_family == 'Impact' ) { echo "selected"; } ?>>Impact</option>
	  			<option value="Tahoma"         <?php if($font_family == 'Tahoma' ) { echo "selected"; } ?>>Tahoma</option>
	  			<option value="Times New Roman"          <?php if($font_family == 'Times New Roman' ) { echo "selected"; } ?>>Times New Roman</option>
	  			<option value="Trebuchet"      <?php if($font_family == 'Trebuchet' ) { echo "selected"; } ?>>Trebuchet</option>
	  			<option value="Verdana"        <?php if($font_family == 'Verdana' ) { echo "selected"; } ?>>Verdana</option>
	  		</optgroup>

	  		<optgroup label="<?php  $font_group = "Google Fonts"; echo $font_group; ?>">
	  			<option value="Alegreya" <?php if($font_family == 'Alegreya' ) { echo "selected"; } ?>>  Alegreya</option>
  				<option value="B612" <?php if($font_family == 'B612' ) { echo "selected"; } ?>>  B612</option>
	  			<option value="Montserrat" <?php if($font_family == 'Montserrat' ) { echo "selected"; } ?>>  Montserrat</option>
				<option value="Raleway" <?php if($font_family == 'Raleway' ) { echo "selected"; } ?>> Raleway</option>
				<option value="Muli" <?php if($font_family == 'Muli' ) { echo "selected"; } ?>>  Muli</option>
	  			<option value="Titillium Web" <?php if($font_family == 'Titillium Web' ) { echo "selected"; } ?>>  Titillium Web</option>
				<option value="Varela" <?php if($font_family == 'Varela' ) { echo "selected"; } ?>> Varela</option>
				<option value="Vollkorn" <?php if($font_family == 'Vollkorn' ) { echo "selected"; } ?>>  Vollkorn</option>
  				<option value="IBM Plex" <?php if($font_family == 'IBM Plex' ) { echo "selected"; } ?>>  IBM Plex</option>
	  			<option value="Crimson Text" <?php if($font_family == 'Crimson Text' ) { echo "selected"; } ?>>  Crimson Text</option>
				<option value="Cairo" <?php if($font_family == 'Cairo' ) { echo "selected"; } ?>> Cairo</option>
				<option value="BioRhyme" <?php if($font_family == 'BioRhyme' ) { echo "selected"; } ?>>  BioRhyme</option>
	  			<option value="Playfair Display" <?php if($font_family == 'Playfair Display' ) { echo "selected"; } ?>>  Playfair Display</option>
				<option value="Archivo" <?php if($font_family == 'Archivo' ) { echo "selected"; } ?>> Archivo</option>
				<option value="Spectral" <?php if($font_family == 'Spectral' ) { echo "selected"; } ?>>  Spectral</option>
  				<option value="Source Sans" <?php if($font_family == 'Source Sans' ) { echo "selected"; } ?>>  Source Sans</option>
	  			<option value="Cardo" <?php if($font_family == 'Cardo' ) { echo "selected"; } ?>>  Cardo</option>
				<option value="Cormorant" <?php if($font_family == 'Cormorant' ) { echo "selected"; } ?>> Cormorant</option>
				<option value="Work Sans" <?php if($font_family == 'Work Sans' ) { echo "selected"; } ?>>  Work Sans</option>
	  			<option value="Rakkas" <?php if($font_family == 'Rakkas' ) { echo "selected"; } ?>>  Rakkas</option>
				<option value="Concert One" <?php if($font_family == 'Concert One' ) { echo "selected"; } ?>> Concert One</option>
				<option value="Yatra One" <?php if($font_family == 'Yatra One' ) { echo "selected"; } ?>>  Yatra One</option>
  				<option value="Arvo" <?php if($font_family == 'Arvo' ) { echo "selected"; } ?>>  Arvo</option>
	  			<option value="Lato" <?php if($font_family == 'Lato' ) { echo "selected"; } ?>>  Lato</option>
				<option value="Abril FatFace" <?php if($font_family == 'Abril FatFace' ) { echo "selected"; } ?>> Abril FatFace</option>
				<option value="Ubuntu" <?php if($font_family == 'Ubuntu' ) { echo "selected"; } ?>>  Ubuntu</option>
	  			<option value="PT Serif" <?php if($font_family == 'PT Serif' ) { echo "selected"; } ?>>  PT Serif</option>
				<option value="Old Standard TT" <?php if($font_family == 'Old Standard TT' ) { echo "selected"; } ?>> Old Standard TT</option>
				<option value="Fira Sans" <?php if($font_family == 'Fira Sans' ) { echo "selected"; } ?>>  Fira Sans</option>
  				<option value="Nunito" <?php if($font_family == 'Nunito' ) { echo "selected"; } ?>>  Nunito</option>
	  			<option value="Oxygen" <?php if($font_family == 'Oxygen' ) { echo "selected"; } ?>>  Oxygen</option>
				<option value="Exo 2" <?php if($font_family == 'Exo 2' ) { echo "selected"; } ?>> Exo 2</option>
				<option value="Open Sans" <?php if($font_family == 'Open Sans' ) { echo "selected"; } ?>>  Open Sans</option>
	  			<option value="Merriweather" <?php if($font_family == 'Merriweather' ) { echo "selected"; } ?>>  Merriweather</option>
				<option value="Noto Sans" <?php if($font_family == 'Noto Sans' ) { echo "selected"; } ?>> Noto Sans</option>
				<option value="Source Sans Pro" <?php if($font_family == 'Source Sans Pro' ) { echo "selected"; } ?>> Source Sans Pro</option>
 	  		</optgroup>
	  	</select>
	</div>
</div>



<div class="metadata-wrapper material-metapro">
   <h4 class="labels">CHOOSE ICON </h4>
	<a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><a href="http://criticalwebsolutions.com/wordpress-plugins?utm_source=WP-Plugin&utm_medium=pro-plugin&utm_campaign=admin_settings" class="btn"><div class="material-pro-label">Pro</div></a></a>

	<div class='switchboxWrapper icons'>
	 <img src="/wp-content/plugins/materialize-accordions/admin/img/icons.png">
	 </div>
</div>


 

<script >
jQuery(document).ready(function($){
    $('.my-color-field').wpColorPicker();
}); 
</script>