     jQuery(document).ready(function() {
     
               // Main collapsible function
               jQuery('.collapsible-head').click(function(){
                 jQuery(this).siblings(".collapsible-body").slideToggle(300);

                  jQuery.fn.extend({
                      toggleText: function(a, b) {
                          return this.text(this.text() == b ? a : b);
                      }
                  });

              if (jQuery(this).children().children().hasClass('add') || jQuery(this).children().hasClass('add')) { 
                      jQuery(this).children().children('.material-icons').toggleText('remove', 'add');
                      jQuery(this).children('.material-icons').toggleText('remove', 'add');
                    }

               })


               // Show All Button
               jQuery('.open-button').on("click", function() {
                   jQuery(this).parent().parent().closest('.materialize-wrapper').find(".collapsible-body").slideDown(300);
                   jQuery(this).parent().parent().closest('.materialize-wrapper').find('.collapsible-head').each(function(index) {

                    if (jQuery(this).children().children().hasClass('add')  || jQuery(this).children().hasClass('add')) {
                      jQuery(this).children().children('.material-icons').text('remove');
                      jQuery(this).children('.material-icons').text('remove');
                  }  
               });
             });


               // Hide All Button
               jQuery('.close-button').on("click", function() {
                   jQuery(this).parent().parent().closest('.materialize-wrapper').find(".collapsible-body").slideUp(300);
                   jQuery(this).parent().parent().closest('.materialize-wrapper').find('.collapsible-head').each(function(index) {

                 if (jQuery(this).children().children().hasClass('add')  || jQuery(this).children().hasClass('add')) {
                     jQuery(this).children().children('.material-icons').text('add');
                     jQuery(this).children('.material-icons').text('add');
                 }
               });
             });


                  // Keypress for accessibility  
             jQuery('.collapsible-head').keypress(function(event){
               let keycode = (event.keyCode ? event.keyCode : event.which);
               if(keycode == '13'){    
                 
                 if(jQuery(this).hasClass("active")){
                   jQuery(this).removeClass("active");
                 } else {
                   jQuery (this).addClass("active");
                 }

                 if(jQuery(this).parent().hasClass("active")){
                   jQuery(this).parent().removeClass("active");
                 } else { 
                   jQuery(this).parent().addClass("active");
                 }
                 
                 let isDisplay = jQuery (this).parent().find(".collapsible-body").css("display");
                 
                 if( isDisplay =="block"){
                   jQuery(this).parent().find(".collapsible-body").css("display", "none");
                 } else {
                   jQuery(this).parent().find(".collapsible-body").css("display", "block");
                 }
                 
               }
             });


             // Prevent accessibility line if clicked with a mouse
             jQuery('.collapsible-head, .open-button, .close-button').mousedown(function() {
                 jQuery(this).css("outline", "none");
             });

             // Add ability to open tab via url #
              let url = jQuery(location).attr('href'),
                  parts = url.split("/"),
                  last_part = parts[parts.length-1];
                 
                     switch (last_part) {
                       case "#1": jQuery(".single-section:eq(0) .collapsible-head").addClass("active"); 
                       jQuery(".single-section:eq(0) .collapsible-body" ).css("display", "block");
                       jQuery(".single-section:eq(0) .collapsible-head").children().children('.material-icons').text('remove');
                        break;
                       case "#2": jQuery(".single-section:eq(1) .collapsible-head").addClass("active"); 
                       jQuery(".single-section:eq(1) .collapsible-body" ).css("display", "block");
                       jQuery(".single-section:eq(1) .collapsible-head").children().children('.material-icons').text('remove');   
                       break;
                      case "#3": jQuery(".single-section:eq(2) .collapsible-head").addClass("active"); 
                       jQuery(".single-section:eq(2) .collapsible-body" ).css("display", "block");
                       jQuery(".single-section:eq(2) .collapsible-head").children().children('.material-icons').text('remove');        
                       break;
                      case "#4": jQuery(".single-section:eq(3) .collapsible-head").addClass("active"); 
                      jQuery(".single-section:eq(3) .collapsible-body" ).css("display", "block");
                      jQuery(".single-section:eq(3) .collapsible-head").children().children('.material-icons').text('remove');          
                       break;
                      case "#5": jQuery(".single-section:eq(4) .collapsible-head").addClass("active"); 
                      jQuery(".single-section:eq(4) .collapsible-body" ).css("display", "block");
                      jQuery(".single-section:eq(4) .collapsible-head").children().children('.material-icons').text('remove');          
                       break;  
                      case "#6": jQuery(".single-section:eq(5) .collapsible-head").addClass("active"); 
                      jQuery(".single-section:eq(5) .collapsible-body" ).css("display", "block");
                      jQuery(".single-section:eq(5) .collapsible-head").children().children('.material-icons').text('remove');      
                       break;  
                      case "#7": jQuery(".single-section:eq(6) .collapsible-head").addClass("active"); 
                      jQuery(".single-section:eq(6) .collapsible-body" ).css("display", "block");
                      jQuery(".single-section:eq(6) .collapsible-head").children().children('.material-icons').text('remove');       
                       break;  
                      case "#8": jQuery(".single-section:eq(7) .collapsible-head").addClass("active"); 
                      jQuery(".single-section:eq(7) .collapsible-body" ).css("display", "block");
                      jQuery(".single-section:eq(7) .collapsible-head").children().children('.material-icons').text('remove');        
                       break;  
                      case "#9": jQuery(".single-section:eq(8) .collapsible-head").addClass("active"); 
                      jQuery(".single-section:eq(8) .collapsible-body" ).css("display", "block");
                      jQuery(".single-section:eq(8) .collapsible-head").children().children('.material-icons').text('remove');     
                       break;  
                      case "#10": jQuery(".single-section:eq(9) .collapsible-head").addClass("active"); 
                      jQuery(".single-section:eq(9) .collapsible-body" ).css("display", "block");
                      jQuery(".single-section:eq(9) .collapsible-head").children().children('.material-icons').text('remove');        
                       break;        
                       default:
                       break;
                    }
     });  