<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 10:47:14
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\direct_payments\hooks\checkout\order_confirmation.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45866773260bc7d824c9c36-97274128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7276eede84a6f5fd3f901bd3ce9b84969c50bc64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\direct_payments\\hooks\\checkout\\order_confirmation.post.tpl',
      1 => 1622942573,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45866773260bc7d824c9c36-97274128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'carts' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc7d82588095_88329514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc7d82588095_88329514')) {function content_60bc7d82588095_88329514($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('direct_payments.pending_carts_notice','direct_payments.pending_carts_notice'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['carts']->value) {?>
<div class="ty-checkout-complete__iv-pending-carts-notice">
    <?php echo $_smarty_tpl->__("direct_payments.pending_carts_notice",array("[cart_url]"=>fn_url("checkout.cart")));?>

</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/direct_payments/hooks/checkout/order_confirmation.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/direct_payments/hooks/checkout/order_confirmation.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['carts']->value) {?>
<div class="ty-checkout-complete__iv-pending-carts-notice">
    <?php echo $_smarty_tpl->__("direct_payments.pending_carts_notice",array("[cart_url]"=>fn_url("checkout.cart")));?>

</div>
<?php }
}?><?php }} ?>
