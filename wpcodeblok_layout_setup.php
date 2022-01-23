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
        #adminmenuback, 
        #adminmenuwrap, 
        #adminmenu, 
        #adminmenu .wp-submenu {
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
            height: 100vh;
        }
        #wpbody, #wpbody-content, #root, #root > .App, #root .snippet-list-wrap, #root .edit-snippet-wrap{
            height: calc(100vh - 50px);
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
        }
        ::-webkit-scrollbar-corner {
            background: #000;
        }
        #wpcontent input,
        #wpcontent textarea,
        #wpcontent select option{
            font-size: 12px !important;
        }
        .list-container{
            max-width: 220px !important;
        }
        .list-container .title{
            line-height: 1 !important;
            font-size: 12px !important;
        }
        </style>
        
        <style type="text/css">
        /* Main colors
        ---------------------------------------------- */
        body.toplevel_page_wpcb_menu_page_php, body.tools_page_wpcb_menu_page_php {
            background-color: #3d4348 !important;
        }
        .toplevel_page_wpcb_menu_page_php .list-container,
        .toplevel_page_wpcb_menu_page_php .edit-snippet-form,
        .toplevel_page_wpcb_menu_page_php .editor-wrap .actions,
        .toplevel_page_wpcb_menu_page_php .conditions-builder,
        .toplevel_page_wpcb_menu_page_php .snippet-list-wrap h2,
        .toplevel_page_wpcb_menu_page_php .settings-wrap .settings-form,
        .toplevel_page_wpcb_menu_page_php .snippet-list-wrap h3,
        .tools_page_wpcb_menu_page_php .list-container,
        .tools_page_wpcb_menu_page_php .edit-snippet-form,
        .tools_page_wpcb_menu_page_php .editor-wrap .actions,
        .tools_page_wpcb_menu_page_php .conditions-builder,
        .tools_page_wpcb_menu_page_php .snippet-list-wrap h2,
        .tools_page_wpcb_menu_page_php .settings-wrap .settings-form,
        .tools_page_wpcb_menu_page_php .snippet-list-wrap h3 
        {
            background-color: #3d4348 !important;
            color: #c4c4c4 !important;
            border-radius: 0 !important;
        }
        
        /* Layout
        ---------------------------------------------- */
        .toplevel_page_wpcb_menu_page_php #wpcontent,
        .tools_page_wpcb_menu_page_php #wpcontent
        {
            padding-left: 5px;
        }
        .toplevel_page_wpcb_menu_page_php .snippet-list-wrap, 
        .tools_page_wpcb_menu_page_php .snippet-list-wrap 
        
        {
            margin-top: 15px;
        }
        .toplevel_page_wpcb_menu_page_php .list-container,
        .tools_page_wpcb_menu_page_php .snippet-container
        {
            margin-right: 0;
        }
        
        
        /* Snippet Options
        ---------------------------------------------- */
        .toplevel_page_wpcb_menu_page_php .snippet-list-wrap input, 
        .toplevel_page_wpcb_menu_page_php .snippet-list-wrap  select, 
        .toplevel_page_wpcb_menu_page_php .snippet-list-wrap  textarea,  
        .toplevel_page_wpcb_menu_page_php .snippet-list-wrap .wpcb-select-container > div > div, 
        .toplevel_page_wpcb_menu_page_php .wpcb-select-container > div, 
        .toplevel_page_wpcb_menu_page_php .css-1r2rbfw-control, 
        .toplevel_page_wpcb_menu_page_php .css-1uccc91-singleValue, 
        .toplevel_page_wpcb_menu_page_php .css-26l3qy-menu,
        
        .tools_page_wpcb_menu_page_php .snippet-list-wrap input, 
        .tools_page_wpcb_menu_page_php .snippet-list-wrap  select, 
        .tools_page_wpcb_menu_page_php .snippet-list-wrap  textarea,  
        .tools_page_wpcb_menu_page_php .snippet-list-wrap .wpcb-select-container > div > div, 
        .tools_page_wpcb_menu_page_php .wpcb-select-container > div, 
        .tools_page_wpcb_menu_page_php .css-1r2rbfw-control, 
        .tools_page_wpcb_menu_page_php .css-1uccc91-singleValue, 
        .tools_page_wpcb_menu_page_php .css-26l3qy-menu
        {
            background-color: #24292e !important;
            border: 1px solid #24292e !important;
            color: rgba(255,255,255,.85);
        }
        .toplevel_page_wpcb_menu_page_php .wpcb-select-container > div > div > div > div:hover, 
        .tools_page_wpcb_menu_page_php .wpcb-select-container > div > div > div > div:hover 
        {
            background-color: rgba(38, 132, 255, .5) !important;
        }
        
        .toplevel_page_wpcb_menu_page_php .wpcb-select-container > div > div > div > span + div:hover, 
        .tools_page_wpcb_menu_page_php .wpcb-select-container > div > div > div > div:hover 
        
        {
            background-color: #24292e !important;
        }
        
        .toplevel_page_wpcb_menu_page_php .wpcb-select-container > div > span + div > div > div,
        .tools_page_wpcb_menu_page_php .wpcb-select-container > div > span + div > div > div 
        {
            color: rgba(255,255,255,.85);
        }
        
        .toplevel_page_wpcb_menu_page_php .css-1n7v3ny-option,
        .tools_page_wpcb_menu_page_php .css-1n7v3ny-option
        {
            background-color: rgba(38, 132, 255, .5) !important;
        }
        
        .toplevel_page_wpcb_menu_page_php .edit-snippet-form svg:hover,
        .tools_page_wpcb_menu_page_php .edit-snippet-form svg:hover 
        {
            color: #fff;
        }
        .toplevel_page_wpcb_menu_page_php .edit-snippet-wrap > div:nth-child(2),
        .tools_page_wpcb_menu_page_php .edit-snippet-wrap > div:nth-child(2)
        {
            background-color: unset !important;
        }
        .toplevel_page_wpcb_menu_page_php .edit-snippet-wrap > div:nth-child(2) svg,
        .tools_page_wpcb_menu_page_php .edit-snippet-wrap > div:nth-child(2) svg
        {
            fill: #c4c4c4;
        }
        
        /* Snippet List
        ---------------------------------------------- */
        
        .toplevel_page_wpcb_menu_page_php .list-actions>div.active, 
        .toplevel_page_wpcb_menu_page_php .list-actions>div:hover, 
        .tools_page_wpcb_menu_page_php .list-actions>div.active, 
        .tools_page_wpcb_menu_page_php .list-actions>div:hover 
        {
            color: #fff !important;
        }
            
        .toplevel_page_wpcb_menu_page_php .new-snippet-list, 
        .toplevel_page_wpcb_menu_page_php .folder-title-container,
        .tools_page_wpcb_menu_page_php .new-snippet-list, 
        .tools_page_wpcb_menu_page_php .folder-title-container
         {
            background-color: #24292e !important;
            color: #e3e1e1 !important;
        }
        
        .toplevel_page_wpcb_menu_page_php .folder-title-container,
        .tools_page_wpcb_menu_page_php .folder-title-container
        {
            color: #c1c1c1 !important;
        }
        .toplevel_page_wpcb_menu_page_php .new-snippet-list li:hover, 
        .toplevel_page_wpcb_menu_page_php .new-snippet-list li:hover .folder-title-container,
        .toplevel_page_wpcb_menu_page_php .repo-snippet-list li:hover,
        .toplevel_page_wpcb_menu_page_php .filter-list li:hover,
        .tools_page_wpcb_menu_page_php .new-snippet-list li:hover, 
        .tools_page_wpcb_menu_page_php .new-snippet-list li:hover .folder-title-container,
        .tools_page_wpcb_menu_page_php .repo-snippet-list li:hover,
        .tools_page_wpcb_menu_page_php  .filter-list li:hover
        {
            background-color: #1a1a1a !important;
        }
        
        /* Editor top bar
        ---------------------------------------------- */
        .toplevel_page_wpcb_menu_page_php .editor-wrap .actions .react-switch-bg, 
        .tools_page_wpcb_menu_page_php .editor-wrap .actions .react-switch-bg 
        {
                opacity: 0.5;
        }
        .toplevel_page_wpcb_menu_page_php .editor-wrap .react-switch-handle,
        .tools_page_wpcb_menu_page_php .editor-wrap .react-switch-handle
        {
            height: 20px !important;
            width: 20px !important;
            top:2px !important;
            background:#ccc !important;
        }
        .toplevel_page_wpcb_menu_page_php .actions>div:not(.first):hover,
        .tools_page_wpcb_menu_page_php .actions>div:not(.first):hover 
        {
            background-color: #1a1a1a !important;
        }
        
        .toplevel_page_wpcb_menu_page_php .actions>div:last-child svg,
        .tools_page_wpcb_menu_page_php .actions>div:last-child svg 
        {
            color: #c4c4c4 !important;
        }
        
        /* Editor
        ---------------------------------------------- */
        
        .toplevel_page_wpcb_menu_page_php #acs-editor,
        .tools_page_wpcb_menu_page_php #acs-editor
        {
            border-radius: 0;
            line-height: 1.6;
        }
        .toplevel_page_wpcb_menu_page_php .ace_comment,
        .toplevel_page_wpcb_menu_page_php .modal-main,
        .tools_page_wpcb_menu_page_php .ace_comment,
        .tools_page_wpcb_menu_page_php .modal-main
        {
            color: #999 !important;
        }
        
        /* Condition builder
        ----------------------------------------*/
        .toplevel_page_wpcb_menu_page_php .condition-group,
        .tools_page_wpcb_menu_page_php .condition-group 
        {
            background-color: #1D2327 !important;
        }
        
        /* Modal Overlay
        ----------------------------*/
        .toplevel_page_wpcb_menu_page_php .react-confirm-alert-overlay,
        .tools_page_wpcb_menu_page_php .react-confirm-alert-overlay
        {
            background: rgba(49, 55, 60, 0.9) !important;
        }
        .toplevel_page_wpcb_menu_page_php .react-confirm-alert-body h1,
        .tools_page_wpcb_menu_page_php .react-confirm-alert-body h1
        {
           color: rgba(255,255,255,.85) !important;
        }
        
        .toplevel_page_wpcb_menu_page_php .react-confirm-alert-body,
        .tools_page_wpcb_menu_page_php .react-confirm-alert-body
        {
            color: rgba(255,255,255,.85) !important;
            background-color: #3D4348 !important;
        }
        
        /* Repository
        ----------------------------*/
        
        .toplevel_page_wpcb_menu_page_php .modal-main,
        .tools_page_wpcb_menu_page_php .modal-main
        {
            background-color: #3D4348 !important;
            color: rgba(255,255,255,.85) !important;
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
