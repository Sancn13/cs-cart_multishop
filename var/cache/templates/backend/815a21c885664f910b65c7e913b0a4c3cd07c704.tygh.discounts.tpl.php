<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 06:50:10
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\order_management\components\discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187657386960b1b9f24c9489-28577141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '815a21c885664f910b65c7e913b0a4c3cd07c704' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\order_management\\components\\discounts.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187657386960b1b9f24c9489-28577141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b1b9f24cd5d9_44063834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b1b9f24cd5d9_44063834')) {function content_60b1b9f24cd5d9_44063834($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <input type="text" name="coupon_code" placeholder="<?php echo $_smarty_tpl->__("discount_coupon_code");?>
" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
