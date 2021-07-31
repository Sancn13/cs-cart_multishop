<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 04:14:50
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_plans\hooks\companies\payout_amount.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15670775560bc218aeabeb1-89364616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd617883736424b9a166e03c1afbcf0e5e8fedf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\companies\\payout_amount.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15670775560bc218aeabeb1-89364616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc218aeb4a98_20864857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc218aeb4a98_20864857')) {function content_60bc218aeb4a98_20864857($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.out_of_amount'));
?>
<?php if ($_smarty_tpl->tpl_vars['payout']->value['order_id']&&($_smarty_tpl->tpl_vars['payout']->value['commission']!=0||$_smarty_tpl->tpl_vars['payout']->value['commission_amount']!=0)) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("order_amount", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['order_amount']), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <br>
    <small class="muted">
        <?php echo $_smarty_tpl->__("vendor_plans.out_of_amount",array("[amount]"=>Smarty::$_smarty_vars['capture']['order_amount']));?>

    </small>
<?php }?><?php }} ?>
