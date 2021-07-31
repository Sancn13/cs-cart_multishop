<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:05:53
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\usergroups\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46027316960af52e1398e69-93264212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '481163bf7074a7e2ea4fc1148f57a7dadcc7521a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\usergroups\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '46027316960af52e1398e69-93264212',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af52e13bd474_31667873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af52e13bd474_31667873')) {function content_60af52e13bd474_31667873($_smarty_tpl) {?><li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[usergroups.m_delete]",'form'=>"usergroups_form"));?>

</li>
<?php }} ?>
