<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:03:19
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\blog\hooks\pages\detailed_description_label.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148508353660cb64379ffc97-14200866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd830d25d7bd5654a4b2760a101de9420feb1ebbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_label.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '148508353660cb64379ffc97-14200866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb6437a57e10_95550902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb6437a57e10_95550902')) {function content_60cb6437a57e10_95550902($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }?>
<?php }} ?>
