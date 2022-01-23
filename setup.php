<?php 
/**
 *   WPCodeBox Editor in the Middle layout v1.0.0
 *   Download the snippet and set it to run in the "Admin Area"
 */
 
add_action('admin_head', function(){
    
    if( isset( $_GET['page'] ) && $_GET['page'] === 'wpcb_menu_page_php') {
    
        echo <<<EOD
        <style type="text/css">
        .toplevel_page_wpcb_menu_page_php .list-container,
        .tools_page_wpcb_menu_page_php .list-container{
            order: 10;
            margin-right: 0px;
        }
        .snippet-container{
            margin-right:0px !important;
            margin-left: 0px !important;
        }
        #wpbody-content{
            padding-bottom: 0px !important;
        }
        .edit-snippet-wrap .editor-wrap{
            margin-right: 0px !important;
            margin-left: 0px !important;
        }
        .toplevel_page_wpcb_menu_page_php .editor-wrap .actions{
            margin-bottom: 0px !important;
        }
        .snippet-list-wrap{
            margin-top: 0px !important;
        }
        #wpfooter{
            display: none !important;
        }
        .editor-wrap > div,
        .editor-container,
        #acs-editor{
            height: 100% !important;
        }
        #adminmenu a.menu-top, #adminmenu .wp-submenu-head {
            font-size: 12px;
            line-height: 1;
        }
        #adminmenuback, #adminmenuwrap, #adminmenu, #adminmenu .wp-submenu {
            width: 140px;
        }
        #wpcontent, #wpfooter {
            margin-left: 140px;
        }
        #adminmenu .wp-submenu{
            left: 140px;
        }
        .edit-snippet-wrap .edit-snippet-form-parent{
            max-width: 200px;
        }
        #wpcontent{
            padding-left: 0px !important;
        }
        html.wp-toolbar{
            padding-top: 0px;
        }
        #wpadminbar{
            display: none;
        }
        #adminmenu{
            margin-top: 0px;
        }
        #menu-dashboard{
            display: none;
        }
        ::-webkit-scrollbar {
            height: 3px;
            width: 3px;
            background: #000;
        }
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            -webkit-border-radius: 1ex;
            -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
        }
        ::-webkit-scrollbar-corner {
            background: #000;
        }
        </style>
        
        <script>
            jQuery(document).ready(function(){ $=jQuery;
               $("#adminmenuwrap a, #wpadminbar a").attr("target", "_blank");
            });
        </script>
        
EOD;
}
});
