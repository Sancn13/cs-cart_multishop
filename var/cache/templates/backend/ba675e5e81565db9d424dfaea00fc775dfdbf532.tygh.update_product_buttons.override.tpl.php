<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:23
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\update_product_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32318764260af5cd7df8af1-10417362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba675e5e81565db9d424dfaea00fc775dfdbf532' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\update_product_buttons.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '32318764260af5cd7df8af1-10417362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd7e2fa83_35312183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd7e2fa83_35312183')) {function content_60af5cd7e2fa83_35312183($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.sell_this'));
?>
<?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']) {?>
    <!-- Overridden by the Common Products for Vendors add-on -->
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn btn-primary",'text'=>$_smarty_tpl->__("master_products.sell_this"),'href'=>"products.sell_master_product?master_product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'method'=>"post"));?>

<?php }?><?php }} ?>
