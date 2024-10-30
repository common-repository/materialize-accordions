<?php

/**
 * Admin area view for the plugin
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Materialize_accordions
 * @subpackage Materialize_accordions/admin/partials
 */
?>

		 <script>
		 	// FUNCTION FOR ADDING SECTIONS
		 	let startingContent = <?php echo $total_all_data_value; ?>;
		 	jQuery('#add_content').click(function(e) {
		 	    e.preventDefault();
		 	    startingContent++;
		 	    
		 	    let contentID = 'material_accordion_field_' + startingContent,
		 	        contentRow = '<div class="accordion-section">' +
		 	                        '<label for="material_accordion_title_' + startingContent + '">' +
		 	                            '<h2 class="material-labels the">ACCORDION TITLE</h2>' +
		 	                        '</label>' +
		 	                        '<input type="text" class="material-accordion-title" id="material_accordion_title_'+startingContent+'" name="material_accordion_title[]" value="" /><br>' +
		 	                        '<label for="material_accordion_field_' + startingContent + '">' +
		 	                            '<h2 class="material-labels">ACCORDION DESCRIPTION</h2>' +
		 	                        '</label>' +
		 	                        '<textarea name="material_accordion_field[]" id="material_accordion_field_' + startingContent + '" class="accordion-editor" rows="10"></textarea><br>' +
		 	                        '<label for="material_accordion_settings_for_yes_' + startingContent + '">' +
		 	                            '<a class="content-delete" href="#">Delete Section</a>' +
		 	                        '</div>';

		 	    // Add the new content row after the last accordion section
		 	    jQuery('.accordion-section').eq(jQuery('.accordion-section').length - 1).after(contentRow);
		 	    
		 	    // Update the total content count
		 	    jQuery('.total_all_data_content').val(startingContent);

				// Re-initialize TinyMCE editor for the new textarea
				wp.editor.remove(contentID); // Ensure any old editor instance is removed
					wp.editor.initialize(
					    contentID,
					    {
					        tinymce: {
					            wpautop: false, // Enable automatic paragraphs
					            plugins: 'advlist charmap colorpicker compat3x directionality hr image lists media paste tabfocus textcolor wordpress wpautoresize wpdialogs wpeditimage wpemoji wpgallery wplink wptextpattern wpview fullscreen',
					            toolbar1: 'bold,italic,underline,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink',
					            toolbar2: 'formatselect,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo',	          
					            menubar: true, // Enable the menubar for File, Edit, View, etc.
					            valid_elements: 'p[style],br,strong,em,ul,ol,li,blockquote,hr,a[href|title],b,i,span[style],div[style],img[src|alt|width|height]', // Specify valid HTML elements
					            valid_children: '+body[style|script]', // Define valid child elements for body
								forced_root_block: 'p',
						        verify_html: false, // Disable automatic HTML verification
					            remove_linebreaks: false // Allow line breaks to remain
					        },
					        menubar: "insert",
					        quicktags: true, // Enable quick tags
					        mediaButtons: true // Show media buttons
					    }
					);
		 	});

		 	// FUNCTION FOR DELETING SECTIONS
		 	jQuery(document).on('click', '.content-delete', function(e) {
		 	    e.preventDefault();
		 	    
		 	    if (jQuery('.accordion-section').length > 1 && confirm('Are you sure you want to delete this content?')) {
		 	        // Get the textarea ID
		 	        let textareaID = jQuery(this).closest('.accordion-section').find('.accordion-editor').attr('id');
		 	        
		 	        // Remove TinyMCE instance for the textarea
		 	        try {
		 	            wp.editor.remove(textareaID);
		 	        } catch (error) {
		 	            console.log(error);
		 	        }

		 	        // Remove the section
		 	        jQuery(this).closest('.accordion-section').remove();

		 	        // Update the total content count
		 	        let totalrowdata = jQuery(".total_all_data_content").val();
		 	        jQuery('.total_all_data_content').val(totalrowdata - 1);
		 	    }
		 	});

		 	// FUNCTION FOR SORTING SECTIONS
		 	jQuery('.advanced-sortables').sortable({
		 	    revert: true,
		 	    start: function(event, ui) {
		 	        // Turn off TinyMCE during sorting
		 	        let textareaID = jQuery(ui.item).find('.wp-editor-area').attr('id');
		 	        
		 	        try {
		 	            wp.editor.remove(textareaID);
		 	        } catch (error) {
		 	            console.log(error);
		 	        }

		 	         textareaID = jQuery(ui.item).find('.accordion-editor').attr('id');
		 	        
		 	        try {
		 	            wp.editor.remove(textareaID);
		 	        } catch (error) {
		 	            console.log(error);
		 	        }

		 	    },

		 		stop: function(event, ui) {
		 		// Re-initialize TinyMCE after sorting is complete
		 		let textareaID = jQuery(ui.item).find('.wp-editor-area').attr('id');

		 			wp.editor.initialize(
		 			    textareaID, {
		 			        tinymce: {
		 			            wpautop: false,
		 			            plugins: 'advlist charmap colorpicker compat3x directionality hr image lists media paste tabfocus textcolor wordpress wpautoresize wpdialogs wpeditimage wpemoji wpgallery wplink wptextpattern wpview',
		 			           	toolbar1: 'bold,italic,underline,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink',
		 			            toolbar2: 'formatselect,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo',	          
		 			            menubar: true, // Enable the menubar for File, Edit, View, etc.
		 			            forced_root_block: 'p',
		 			            remove_linebreaks: false,
		 			            verify_html: false,
		 			            valid_elements: 'p[style],br,strong,em,ul,ol,li,blockquote,hr,a[href|title],b,i,span[style],div[style],img[src|alt|width|height]', // Allow <p> and <br> tags
		 			        },
		 			        menubar: "insert",
		 			        quicktags: true,
		 			        mediaButtons: true
		 			    }
		 			);

		 			textareaID = jQuery(ui.item).find('.accordion-editor').attr('id');
		 			wp.editor.initialize(
		 			    textareaID, {
		 			        tinymce: {
		 			            wpautop: false,
		 			            plugins: 'advlist charmap colorpicker compat3x directionality hr image lists media paste tabfocus textcolor wordpress wpautoresize wpdialogs wpeditimage wpemoji wpgallery wplink wptextpattern wpview',
		 			            toolbar1: 'bold,italic,underline,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink',
		 			            toolbar2: 'formatselect,alignjustify,forecolor,pastetext,removeformat,charmap,outdent,indent,undo,redo',
		 			            menubar: true, // Enable the menubar for File, Edit, View, etc.
		 			            forced_root_block: 'p',
		 			            remove_linebreaks: false,
		 			            verify_html: false,
		 			            valid_elements: 'p[style],br,strong,em,ul,ol,li,blockquote,hr,a[href|title],b,i,span[style],div[style],img[src|alt|width|height]', // Allow <p> and <br> tags
		 			        },
		 			        menubar: "insert",
		 			        quicktags: true,
		 			        mediaButtons: true
		 			    }
		 			);
		 		}
		 	}).disableSelection();

		</script>