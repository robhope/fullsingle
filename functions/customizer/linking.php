<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Smoother Section Linking
#-------------------------------------------------------------------------------

function fullsingle_customizer_internal_links() {
   ?>
   <script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            var api = wp.customize;
            api.bind('ready', function() {
                $(['control', 'section', 'panel']).each(function(i, type) {
                    $('a[rel="tc-'+type+'"]').click(function(e) {
                        e.preventDefault();
                        var id = $(this).attr('href').replace('#', '');
                        if(api[type].has(id)) {
                            api[type].instance(id).focus();
                        }
                    });
                });
            });
        });
    })(jQuery);
   </script>
   <?php
}
 
add_action('customize_controls_print_scripts', 'fullsingle_customizer_internal_links', 999);