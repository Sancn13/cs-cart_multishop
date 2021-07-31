<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:27:42
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\action_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91893263860af57fea4af42-45269029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6527ee4a33eb23a9c7147e7bd40751e4d5824954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\action_buttons.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91893263860af57fea4af42-45269029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_common_products_action_buttons' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af57fea73453_75107573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af57fea73453_75107573')) {function content_60af57fea73453_75107573($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_product_addition','export_found_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['show_common_products_action_buttons']->value) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_product_addition"),'href'=>"products.m_add"));?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_found_products"),'href'=>"products.export_found.master"));?>
</li>
    <?php }?>
<?php }?><?php }} ?>
