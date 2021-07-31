<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:35:28
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\destinations\destinations_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92148306660acd2f0131828-63606027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ecf337e6707a6a6eb1df10df5aa8dd94cd994ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\destinations\\destinations_list.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '92148306660acd2f0131828-63606027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'destination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2f015e741_08133131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2f015e741_08133131')) {function content_60acd2f015e741_08133131($_smarty_tpl) {?><td>
    <a class="badge"
       href="<?php echo htmlspecialchars(fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['destination']->value['destination_id'])."&selected_section=warehouses"), ENT_QUOTES, 'UTF-8');?>
"
    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['store_count'], ENT_QUOTES, 'UTF-8');?>
</a>
</td>
<?php }} ?>
