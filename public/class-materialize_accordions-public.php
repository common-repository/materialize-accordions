<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Materialize_accordions
 * @subpackage Materialize_accordions/public
 * @author     Moe Himed <#>
 */
class Materialize_accordions_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action('init', array($this, 'material_creation') );


	}

	/**
	 * Setup the Materialize Accordion Creation
	 *
	 * @since    1.0.0
	 */


 	 
	function material_creation() {
		                    
 
		 function material_creation_inner( $atts ) {

			global $post;

			$custom_js =  (isset( $custom['custom_user_js'][0] ) ) ? $custom['custom_user_js'][0] : '';


				//  Check for and then get post ID
				if(!isset( $atts['id'])) 
					{
						$MA_ID = "";
					} 
				else 
					{
						$MA_ID =  $atts['id'];
					}

				
			    $accordion_args = array( 'p' => $MA_ID, 'post_type' => 'material_accordion');

			    $loop = new WP_Query( $accordion_args );

			    $html_out ='<div class="materialize-wrapper">';
				
				while ( $loop->have_posts() ) : $loop->the_post();

	 		
				 $total_all_data_value = get_post_meta( get_the_ID(), '_total_all_data_value', true );
				 $post_title = get_the_title();

					$html_out .= '<div class="post-wrap" >';

					 // "Hide or show the section title" 
					if (get_post_meta( get_the_ID(), '_hide_section_title', true) == '1')  {
						     $html_out .=  "";  
					}
					else {
						     $html_out .=  '<div class="section-title">'. $post_title .'</div>';
					}				  
			 
					 // "Show or hide the open/close all links" 
			 	  	 if (get_post_meta( get_the_ID(), '_show_hide_links', true) !== '1') {
					     $html_out .=  '<div class="btn-container">
								     	<button class="btn bk-bkg-text open-button" type="button"> Show All</button><button class="btn bk-bkg-text close-button" type="button"> Hide All</button>
						   				</div>'; 
					}
			


				 			$custom = get_post_custom( $post->ID );
				 	 		$_title_bg_clr = ( isset( $custom['_title_bg_clr'][0] ) ) ? $custom['_title_bg_clr'][0] : '';
				 	 		$_desc_bg_clr = ( isset( $custom['_desc_bg_clr'][0] ) ) ? $custom['_desc_bg_clr'][0] : '';
				 	 		$_title_font_clr = ( isset( $custom['_title_font_clr'][0] ) ) ? $custom['_title_font_clr'][0] : '';
				 	 		$_desc_font_clr = ( isset( $custom['_desc_font_clr'][0] ) ) ? $custom['_desc_font_clr'][0] : '';

				 	
			 	 		 for ($i = 0; $i <= $total_all_data_value; $i++) {
			 	 		
			 	 			 $html_out .= '<ul class="collapsible expandable" data-collapsible="expandable">';
			 	 			 $html_out .= '<li class="single-section">';
		 					
						 		 $html_out .= '<div class="collapsible-head" tabindex="0" style="background-color: ' . $_title_bg_clr . '" >';
						 	     $html_out .=  '<div class="title-wrap" style="color: ' . $_title_font_clr . ' ">';
						 		 $html_out .=  get_post_meta( get_the_ID(), '_title_meta_key_'.$i.'', true);
						 		 $html_out .= '</div>';
						 		 $html_out .= '<span class="material-icons add">add';
						 		 $html_out .= '</span>';
						 		 $html_out .= '</div>';
		 						 
								 $html_out .= '<div class="collapsible-body" style="background-color: ' . $_desc_bg_clr . ';color: ' . $_desc_font_clr . ' ">';
								 $html_out .= '<div>';
								 $html_out .=    get_post_meta( get_the_ID(), '_content_editor_meta_key_'.$i.'', true );   
								 $html_out .= '</div>';
								 $html_out .= '</div>';

							 $html_out .= '</li>';
							 $html_out .= '</ul>';
						 }	

		                 
	               endwhile;

	               $html_out .='</div>';
	               $html_out .='</div>';


   				    $custom_js =  (isset( $custom['custom_user_js'][0] ) ) ? $custom['custom_user_js'][0] : '';
   	                $custom_css =  (isset( $custom['custom_user_css'][0] ) ) ? $custom['custom_user_css'][0] : '';

                     // Custom CSS or JS added in the admin area shows here
   					$html_out.= "<script>jQuery(document).ready(function(jQuery){";
   					$html_out.= $custom_js; 
   					$html_out.= "})</script><style>";
                    $html_out.= $custom_css;  
   					$html_out.= "</style>";         
			 

			$html_out = do_shortcode($html_out);
						
	   	    return $html_out; 

	   		wp_reset_postdata();

 
		}
			 

	    add_shortcode( 'MA_shortcode', 'material_creation_inner' );
	}
 


	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */

	 


	public function enqueue_styles() {

  		global $post;
		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Materialize_accordions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Materialize_accordions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 // Conditionally Load Stylesheet
		 if ( strstr( $post->post_content, '[MA_shortcode ' ) ) {
					wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/materialize-accordions.css', array(), $this->version, 'all' );
		}
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		global $post;
		/**
		 * An instance of this class should be passed to the run() function
		 * defined in Materialize_accordions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Materialize_accordions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
	    // Conditionally Load Script
		if ( strstr( $post->post_content, '[MA_shortcode ' ) ) {
					wp_enqueue_script( "material-js", plugin_dir_url( __FILE__ ) . 'js/materialize-accordions.js', array( 'jquery' ), $this->version, false );
		}
 
	}

}