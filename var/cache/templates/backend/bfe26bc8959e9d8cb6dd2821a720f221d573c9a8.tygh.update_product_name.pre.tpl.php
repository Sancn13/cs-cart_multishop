<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:09
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\update_product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121539806360af5cc91aaa66-40709328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe26bc8959e9d8cb6dd2821a720f221d573c9a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\update_product_name.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '121539806360af5cc91aaa66-40709328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cc91e8aa6_49320744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cc91e8aa6_49320744')) {function content_60af5cc91e8aa6_49320744($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.master_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']) {?>
    <div class="control-group">
        <label for="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="control-label"
        ><?php echo $_smarty_tpl->__("master_products.master_product");?>
:</label>
        <div class="controls" id="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a class="shift-input"
               href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['master_product_id'])), ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
    </div>
<?php }?><?php }} ?>
