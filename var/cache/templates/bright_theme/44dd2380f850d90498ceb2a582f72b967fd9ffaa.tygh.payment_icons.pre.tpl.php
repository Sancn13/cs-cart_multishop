<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 11:24:38
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\stripe\hooks\index\payment_icons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178178066060b34bc6330ca5-25038596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44dd2380f850d90498ceb2a582f72b967fd9ffaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\stripe\\hooks\\index\\payment_icons.pre.tpl',
      1 => 1622347336,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '178178066060b34bc6330ca5-25038596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'stripe_payment_buttons_icons' => 0,
    'payment_type' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b34bc63640f3_58111228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b34bc63640f3_58111228')) {function content_60b34bc63640f3_58111228($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['payment_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stripe_payment_buttons_icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_type']->key => $_smarty_tpl->tpl_vars['payment_type']->value) {
$_smarty_tpl->tpl_vars['payment_type']->_loop = true;
?>
    <span class="ty-payment-icons__item stripe-payment-icon stripe-payment-icon--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_type']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
<?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/stripe/hooks/index/payment_icons.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/stripe/hooks/index/payment_icons.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['payment_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stripe_payment_buttons_icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_type']->key => $_smarty_tpl->tpl_vars['payment_type']->value) {
$_smarty_tpl->tpl_vars['payment_type']->_loop = true;
?>
    <span class="ty-payment-icons__item stripe-payment-icon stripe-payment-icon--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_type']->value, ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
<?php } ?>
<?php }?><?php }} ?>
