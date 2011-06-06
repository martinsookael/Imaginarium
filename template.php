<?

function imaginarium_preprocess_page(&$vars)
{
	$css	= $vars['css'];
	//var_dump($css);
	
	/* Lightboxi lisamooduli stiil */

  unset($css['screen']['module']['sites/all/modules/jlightbox/css/jlightbox.css']);
 
  /* CT theme stiilid */

  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/reset.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/typography.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/layout.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/edit-form.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/article.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/dashboard.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/map_popup.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/facebox/facebox.css']);

  //unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/jquery.ui/jquery.ui.core.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/jquery.ui/jquery.ui.theme.css']);
  unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/jquery.ui/jquery.ui.datepicker.css']);
  //unset($css['screen']['theme']['sites/all/themes/cmtls_theme/styles/jquery.ui/jquery.ui.button.css']);
  
  unset($css['screen']['module']['sites/all/modules/cmtls/modules/cmtls_map/css/cmtls_map.css']);
  
  /* Drupal core stiilid */
  
  unset($css['all']['module']['modules/node/node.css']);
  unset($css['all']['module']['modules/system/defaults.css']);
  unset($css['all']['module']['modules/system/system.css']);
  unset($css['all']['module']['modules/system/system-menus.css']);
  unset($css['all']['module']['modules/user/user.css']);

  /* Erinevate Drupali lisamoodulite stiilid */
  
  unset($css['all']['module']['sites/all/modules/cck/theme/content-module.css']);
  unset($css['all']['module']['sites/all/modules/ctools/css/ctools.css']);
  unset($css['all']['module']['sites/all/modules/date/date.css']);
  unset($css['all']['module']['sites/all/modules/date/date_popup/themes/datepicker.1.7.css']);
  unset($css['all']['module']['sites/all/modules/date/date_popup/themes/jquery.timeentry.css']);
  unset($css['all']['module']['sites/all/modules/filefield/filefield.css']);
  unset($css['all']['module']['sites/all/modules/og/theme/og.css']);
  unset($css['all']['module']['sites/all/modules/wysiwyg_imageupload/plugins/imgupload/imgupload.css']);
  unset($css['all']['module']['sites/all/modules/cck/modules/fieldgroup/fieldgroup.css']);
  unset($css['all']['module']['sites/all/modules/views/css/views.css']);

  unset($css['all']['module']['sites/all/modules/ckeditor/ckeditor.css']);
  unset($css['all']['module']['modules/openid/openid.css']);

  /* Natuke veel CT stiile */

  unset($css['all']['module']['sites/all/modules/cmtls/css/context_menu.css']);
  unset($css['all']['module']['sites/all/modules/cmtls/css/cmtls.css']);

  /* jälle natuke Drupali lisamoodulite stiile */
  
  unset($css['all']['module']['sites/all/modules/modalframe/css/modalframe.parent.css']);
  unset($css['all']['module']['sites/all/modules/cmtls/modules/cmtls_forum/css/forum.css']);
  unset($css['all']['module']['sites/all/modules/jquery_ui_dialog/css/jquery_ui_dialog-dialog/jquery_ui_dialog.css']);
  unset($css['all']['module']['sites/all/modules/jquery_ui_dialog/css/jquery_ui_dialog.main.css']);
  unset($css['all']['module']['sites/all/modules/openlayers/openlayers.css']);

	//var_dump($css);
	$vars['styles'] = drupal_get_css($css);
	
	

    // JAVASCRIPT
    $scripts = drupal_add_js();
	
	//var_dump($scripts);

    //unset($scripts['core']['misc/jquery.js']);
    //unset($scripts['core']['misc/drupal.js']);
	
    unset($scripts['module']['sites/all/modules/jlightbox/js/jlightbox.js']);
    unset($scripts['module']['sites/all/modules/og/og.js']);
	
    unset($scripts['module']['sites/all/modules/cmtls/js/jquery.contextMenu.js']);
    unset($scripts['module']['sites/all/modules/cmtls/js/app.js']);
    unset($scripts['module']['sites/all/modules/cmtls/js/jquery.livequery.min.js']);
	
    //unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.core.min.js']);
    unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.widget.min.js']);
    unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.position.min.js']);
    unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.mouse.min.js']);
    unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.resizable.min.js']);
    unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.draggable.min.js']);
    //unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.button.min.js']);
    unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.dialog.min.js']);
    unset($scripts['module']['sites/all/modules/modalframe/js/parent.js']);
	
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_article/js/app.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_comment/js/app.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_event/js/app.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_map/js/cmtls_map.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_place/js/cmtls_place.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_problem/js/app.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_stance/js/app.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_filter/js/app.js']);
	
    unset($scripts['module']['sites/all/modules/jquery_ui/jquery.ui/ui/minified/jquery.ui.datepicker.min.js']);
    unset($scripts['module']['sites/all/modules/date/date_popup/lib/jquery.timeentry.pack.js']);
    unset($scripts['module']['sites/all/modules/date/date_popup/date_popup.js']);
    unset($scripts['module']['modules/openid/openid.js']);
	
    unset($scripts['module']['sites/all/libraries/openlayers/OpenLayers.js']);
    unset($scripts['module']['sites/all/modules/openlayers/js/openlayers.js']);
    unset($scripts['module']['sites/all/modules/openlayers/includes/layer_types/js/xyz.js']);
    unset($scripts['module']['sites/all/modules/openlayers/includes/layer_types/js/google.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_map/js/cmtls_map_vector.js']);
    unset($scripts['module']['sites/all/modules/openlayers/includes/behaviors/js/openlayers_behavior_navigation.js']);
    unset($scripts['module']['sites/all/modules/openlayers/includes/behaviors/js/openlayers_behavior_panzoom.js']);
    unset($scripts['module']['sites/all/modules/openlayers/includes/behaviors/js/openlayers_behavior_zoomtolayer.js']);
    unset($scripts['module']['sites/all/modules/cmtls/modules/cmtls_map/js/cmtls_map_behavior_popup.js']);
	
    unset($scripts['theme']['sites/all/themes/cmtls_theme/scripts/main.js']);
    unset($scripts['theme']['sites/all/themes/cmtls_theme/scripts/jquery.cookie.js']);



    // recreate the tempalate variables
    $vars['scripts'] = drupal_get_js('header', $scripts);



}

?>