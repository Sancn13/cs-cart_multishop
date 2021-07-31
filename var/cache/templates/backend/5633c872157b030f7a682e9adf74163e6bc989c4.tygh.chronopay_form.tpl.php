<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:58:57
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\payments\components\cc_processors\chronopay_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145590812760b30d81007fc3-72008624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5633c872157b030f7a682e9adf74163e6bc989c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\payments\\components\\cc_processors\\chronopay_form.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '145590812760b30d81007fc3-72008624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b30d8100fc41_67670375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b30d8100fc41_67670375')) {function content_60b30d8100fc41_67670375($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_id','sharedsec'));
?>
<div class="control-group">
    <label class="control-label" for="product_id"><?php echo $_smarty_tpl->__("product_id");?>
:</label>
    <div class="controls">
    	<input type="text" name="payment_data[processor_params][product_id]" id="product_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="encrypt"><?php echo $_smarty_tpl->__("sharedsec");?>
:</label>
    <div class="controls">
    	<input type="text" name="payment_data[processor_params][sharedsec]" id="encrypt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['sharedsec'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div><?php }} ?>
