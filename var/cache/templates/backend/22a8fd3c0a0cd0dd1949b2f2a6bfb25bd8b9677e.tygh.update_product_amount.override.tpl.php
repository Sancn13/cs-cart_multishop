<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:13
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\products\update_product_amount.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66801291360af5ccd0ece91-82024610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22a8fd3c0a0cd0dd1949b2f2a6bfb25bd8b9677e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\products\\update_product_amount.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '66801291360af5ccd0ece91-82024610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_warehouses_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5ccd121702_85306075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5ccd121702_85306075')) {function content_60af5ccd121702_85306075($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('in_stock'));
?>
<?php if (isset($_smarty_tpl->tpl_vars['product_warehouses_amount']->value)) {?>
    <div class="control-group">
        <label class="control-label" for="elm_in_stock"><?php echo $_smarty_tpl->__("in_stock");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[amount]" id="elm_in_stock" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_warehouses_amount']->value, ENT_QUOTES, 'UTF-8');?>
" disabled class="input-small" />
        </div>
    </div>
<?php }?>
<?php }} ?>
