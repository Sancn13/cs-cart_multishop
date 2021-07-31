<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:47:06
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\hooks\companies\list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77176053560af4e7a9a13c7-06765052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c15fd3deef68d229facede820b11b52d529f2b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\hooks\\companies\\list_extra_td.post.tpl',
      1 => 1618544578,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '77176053560af4e7a9a13c7-06765052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af4e7a9c7c67_25992110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af4e7a9c7c67_25992110')) {function content_60af4e7a9c7c67_25992110($_smarty_tpl) {?><td width="16%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }} ?>
