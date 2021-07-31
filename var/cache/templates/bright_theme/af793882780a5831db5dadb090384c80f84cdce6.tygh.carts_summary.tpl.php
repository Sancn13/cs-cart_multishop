<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 10:40:27
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\direct_payments\blocks\carts_summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179460986460bc7bebd08805-10845392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af793882780a5831db5dadb090384c80f84cdce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\direct_payments\\blocks\\carts_summary.tpl',
      1 => 1622942573,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '179460986460bc7bebd08805-10845392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'carts' => 0,
    'block' => 0,
    'vendor_id' => 0,
    'cart' => 0,
    'vendors' => 0,
    'vendor_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc7bebe14b94_49633805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc7bebe14b94_49633805')) {function content_60bc7bebe14b94_49633805($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('direct_payments.paying_now','checkout','direct_payments.paying_now','checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if (count($_smarty_tpl->tpl_vars['carts']->value)>1) {?>
    <div id="checkout_carts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
        <table class="ty-checkout-summary__block">
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['vendor_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor_cart']->_loop = false;
 $_smarty_tpl->tpl_vars['vendor_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor_cart']->key => $_smarty_tpl->tpl_vars['vendor_cart']->value) {
$_smarty_tpl->tpl_vars['vendor_cart']->_loop = true;
 $_smarty_tpl->tpl_vars['vendor_id']->value = $_smarty_tpl->tpl_vars['vendor_cart']->key;
?>
                <tr>
                    <td class="ty-checkout-summary__item">
                        <?php if ($_smarty_tpl->tpl_vars['vendor_id']->value==$_smarty_tpl->tpl_vars['cart']->value['vendor_id']) {?><strong><?php }?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendors']->value[$_smarty_tpl->tpl_vars['vendor_id']->value]['company'], ENT_QUOTES, 'UTF-8');?>

                        (<?php if ($_smarty_tpl->tpl_vars['vendor_id']->value==$_smarty_tpl->tpl_vars['cart']->value['vendor_id']) {
echo $_smarty_tpl->__("direct_payments.paying_now");
} else { ?><a href="<?php echo htmlspecialchars(fn_url("checkout.checkout?vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("checkout");?>
</a><?php }?>)
                        <?php if ($_smarty_tpl->tpl_vars['vendor_id']->value==$_smarty_tpl->tpl_vars['cart']->value['vendor_id']) {?></strong><?php }?>
                    </td>
                    <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                        <span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['vendor_cart']->value['total']), 0);?>
</span>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <!--checkout_carts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/direct_payments/blocks/carts_summary.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/direct_payments/blocks/carts_summary.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if (count($_smarty_tpl->tpl_vars['carts']->value)>1) {?>
    <div id="checkout_carts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
        <table class="ty-checkout-summary__block">
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['vendor_cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor_cart']->_loop = false;
 $_smarty_tpl->tpl_vars['vendor_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor_cart']->key => $_smarty_tpl->tpl_vars['vendor_cart']->value) {
$_smarty_tpl->tpl_vars['vendor_cart']->_loop = true;
 $_smarty_tpl->tpl_vars['vendor_id']->value = $_smarty_tpl->tpl_vars['vendor_cart']->key;
?>
                <tr>
                    <td class="ty-checkout-summary__item">
                        <?php if ($_smarty_tpl->tpl_vars['vendor_id']->value==$_smarty_tpl->tpl_vars['cart']->value['vendor_id']) {?><strong><?php }?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendors']->value[$_smarty_tpl->tpl_vars['vendor_id']->value]['company'], ENT_QUOTES, 'UTF-8');?>

                        (<?php if ($_smarty_tpl->tpl_vars['vendor_id']->value==$_smarty_tpl->tpl_vars['cart']->value['vendor_id']) {
echo $_smarty_tpl->__("direct_payments.paying_now");
} else { ?><a href="<?php echo htmlspecialchars(fn_url("checkout.checkout?vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("checkout");?>
</a><?php }?>)
                        <?php if ($_smarty_tpl->tpl_vars['vendor_id']->value==$_smarty_tpl->tpl_vars['cart']->value['vendor_id']) {?></strong><?php }?>
                    </td>
                    <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                        <span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['vendor_cart']->value['total']), 0);?>
</span>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <!--checkout_carts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php }?><?php }} ?>
