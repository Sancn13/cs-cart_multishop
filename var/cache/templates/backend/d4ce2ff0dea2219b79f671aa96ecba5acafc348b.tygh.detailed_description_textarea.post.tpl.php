<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:03:19
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\blog\hooks\pages\detailed_description_textarea.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82774486860cb6437c572f3-25522995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4ce2ff0dea2219b79f671aa96ecba5acafc348b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_textarea.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82774486860cb6437c572f3-25522995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb6437c96442_38320777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb6437c96442_38320777')) {function content_60cb6437c96442_38320777($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }?><?php }} ?>
