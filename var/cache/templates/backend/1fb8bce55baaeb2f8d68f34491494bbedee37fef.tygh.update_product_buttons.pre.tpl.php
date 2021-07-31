<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:24
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\update_product_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157636166660af5cd80b1a34-82740728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb8bce55baaeb2f8d68f34491494bbedee37fef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\update_product_buttons.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157636166660af5cd80b1a34-82740728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd80efd69_86684073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd80efd69_86684073')) {function content_60af5cd80efd69_86684073($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['allow_clone'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['allow_clone'] = clone $_smarty_tpl->tpl_vars['allow_clone'];?>
<?php }?><?php }} ?>
