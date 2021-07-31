<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:28:58
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\store_locator\addons\geo_maps\hooks\store_locator\select_coordinates.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11428531460bf2a4a841548-05717275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69caae8bb3f9b3cf5ef8cfd63d73e35bd5d4f4f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\store_locator\\addons\\geo_maps\\hooks\\store_locator\\select_coordinates.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11428531460bf2a4a841548-05717275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2a4a882ea4_49824201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2a4a882ea4_49824201')) {function content_60bf2a4a882ea4_49824201($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener cm-hide-with-inputs",'but_id'=>"store_locator_picker_opener"), 0);?>
<?php }} ?>
