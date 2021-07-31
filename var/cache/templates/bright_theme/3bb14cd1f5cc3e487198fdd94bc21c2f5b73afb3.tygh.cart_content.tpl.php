<?php /* Smarty version Smarty-3.1.21, created on 2021-06-13 17:02:49
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\direct_payments\views\separate_checkout\components\cart_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50328120960c610092d9e88-52668776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bb14cd1f5cc3e487198fdd94bc21c2f5b73afb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\direct_payments\\views\\separate_checkout\\components\\cart_content.tpl',
      1 => 1622942573,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50328120960c610092d9e88-52668776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_id' => 0,
    'suffix_key' => 0,
    'result_ids' => 0,
    'vendor' => 0,
    'cart' => 0,
    'continue_url' => 0,
    'payment_methods' => 0,
    'link_href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c6100936ca71_74020354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c6100936ca71_74020354')) {function content_60c6100936ca71_74020354($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('total','cannot_proccess_checkout_without_payment_methods','total','cannot_proccess_checkout_without_payment_methods'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['suffix_key'] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['result_ids'] = new Smarty_variable("cart_items".((string)$_smarty_tpl->tpl_vars['suffix_key']->value).",checkout_totals".((string)$_smarty_tpl->tpl_vars['suffix_key']->value).",checkout_steps".((string)$_smarty_tpl->tpl_vars['suffix_key']->value).",cart_status*,checkout_totals_header* ,checkout_cart".((string)$_smarty_tpl->tpl_vars['suffix_key']->value), null, 0);?>

<div class="clearfix">
    <form name="cart_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
          id="cart_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
          class="cm-check-changes cm-ajax cm-ajax-full-render"
          action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
          enctype="multipart/form-data"
    >
        <input type="hidden" name="redirect_mode" value="cart"/>
        <input type="hidden" name="vendor_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="submit" class="ty-btn--recalculate-cart hidden" name="dispatch[checkout.update]" />

        <?php if ($_smarty_tpl->tpl_vars['vendor']->value) {?>
            <div class="ty-float-right hidden ty-cart__title-total"
                 data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                 id="checkout_totals_header<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("total");?>
:
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['total']), 0);?>

            <!--checkout_totals_header<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <h2 class="ty-hand cm-combinations ty-cart-vendor__title"
                id="sw_cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company'], ENT_QUOTES, 'UTF-8');?>

                <i class="ty-sort-dropdown__icon ty-icon-down-micro hidden"
                   data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
                <i class="ty-sort-dropdown__icon ty-icon-up-micro"
                   data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
            </h2>
        <?php }?>

        <div data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/direct_payments/views/separate_checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('disable_ids'=>"button_cart"), 0);?>


        </div>
    </form>

    <div data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php echo $_smarty_tpl->getSubTemplate ("addons/direct_payments/views/separate_checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"cart"), 0);?>


        <div class="buttons-container ty-cart-content__bottom-buttons clearfix">
            <div class="ty-float-left ty-cart-content__left-buttons">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.clear&vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value),'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0);?>

            </div>

            <div class="ty-float-right ty-cart-content__right-buttons">
                <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['m_name'] = new Smarty_variable("checkout", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['link_href'] = new Smarty_variable("checkout.checkout&vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

                <?php }?>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <div class="clearfix ty-cart-content__payments-warning">
                    <p class="ty-float-right ty-cart-content__payments-warning__text"
                    ><?php echo $_smarty_tpl->__("cannot_proccess_checkout_without_payment_methods");?>
</p>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/direct_payments/views/separate_checkout/components/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/direct_payments/views/separate_checkout/components/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['suffix_key'] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['result_ids'] = new Smarty_variable("cart_items".((string)$_smarty_tpl->tpl_vars['suffix_key']->value).",checkout_totals".((string)$_smarty_tpl->tpl_vars['suffix_key']->value).",checkout_steps".((string)$_smarty_tpl->tpl_vars['suffix_key']->value).",cart_status*,checkout_totals_header* ,checkout_cart".((string)$_smarty_tpl->tpl_vars['suffix_key']->value), null, 0);?>

<div class="clearfix">
    <form name="cart_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
          id="cart_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
          class="cm-check-changes cm-ajax cm-ajax-full-render"
          action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
          enctype="multipart/form-data"
    >
        <input type="hidden" name="redirect_mode" value="cart"/>
        <input type="hidden" name="vendor_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="submit" class="ty-btn--recalculate-cart hidden" name="dispatch[checkout.update]" />

        <?php if ($_smarty_tpl->tpl_vars['vendor']->value) {?>
            <div class="ty-float-right hidden ty-cart__title-total"
                 data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                 id="checkout_totals_header<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("total");?>
:
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['total']), 0);?>

            <!--checkout_totals_header<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
            <h2 class="ty-hand cm-combinations ty-cart-vendor__title"
                id="sw_cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor']->value['company'], ENT_QUOTES, 'UTF-8');?>

                <i class="ty-sort-dropdown__icon ty-icon-down-micro hidden"
                   data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
                <i class="ty-sort-dropdown__icon ty-icon-up-micro"
                   data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
            </h2>
        <?php }?>

        <div data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php echo $_smarty_tpl->getSubTemplate ("addons/direct_payments/views/separate_checkout/components/cart_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('disable_ids'=>"button_cart"), 0);?>


        </div>
    </form>

    <div data-ca-switch-id="cart<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix_key']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php echo $_smarty_tpl->getSubTemplate ("addons/direct_payments/views/separate_checkout/components/checkout_totals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"cart"), 0);?>


        <div class="buttons-container ty-cart-content__bottom-buttons clearfix">
            <div class="ty-float-left ty-cart-content__left-buttons">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value)), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("buttons/clear_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.clear&vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value),'but_role'=>"text",'but_meta'=>"cm-confirm ty-cart-content__clear-button"), 0);?>

            </div>

            <div class="ty-float-right ty-cart-content__right-buttons">
                <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['m_name'] = new Smarty_variable("checkout", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['link_href'] = new Smarty_variable("checkout.checkout&vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value), null, 0);?>
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_smarty_tpl->tpl_vars['link_href']->value), 0);?>

                <?php }?>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['payment_methods']->value) {?>
                <div class="clearfix ty-cart-content__payments-warning">
                    <p class="ty-float-right ty-cart-content__payments-warning__text"
                    ><?php echo $_smarty_tpl->__("cannot_proccess_checkout_without_payment_methods");?>
</p>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php }?><?php }} ?>
