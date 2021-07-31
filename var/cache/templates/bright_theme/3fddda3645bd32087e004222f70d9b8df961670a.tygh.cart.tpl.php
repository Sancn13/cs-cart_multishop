<?php /* Smarty version Smarty-3.1.21, created on 2021-06-13 17:02:48
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\direct_payments\views\separate_checkout\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138956377560c61008ac59d4-71946642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fddda3645bd32087e004222f70d9b8df961670a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\direct_payments\\views\\separate_checkout\\cart.tpl',
      1 => 1622942573,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '138956377560c61008ac59d4-71946642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'carts' => 0,
    'carts_total' => 0,
    'vendor_id' => 0,
    'vendors' => 0,
    'cart' => 0,
    'group_cart_products' => 0,
    'group_product_groups' => 0,
    'group_checkout_add_buttons' => 0,
    'group_take_surcharge_from_vendor' => 0,
    'group_payment_methods' => 0,
    'continue_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c61008f2c741_32954602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c61008f2c741_32954602')) {function content_60c61008f2c741_32954602($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('cart_contents','total_cost','text_cart_empty','cart_contents','total_cost','text_cart_empty'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/cart_content.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['carts']->value) {?>
    <h1 class="ty-mainbox-title <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['carts']->value)>1) {?>ty-mve-title<?php }?>"><?php echo $_smarty_tpl->__("cart_contents");?>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['carts']->value)>1) {?>
            <div class="ty-mve-total ty-float-right"
                 id="checkout_totals_header_general">
                <?php echo $_smarty_tpl->__("total_cost");?>
:&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['carts_total']->value,'class'=>"ty-price"), 0);?>

            <!--checkout_totals_header_general--></div>
        <?php }?>
    </h1>

    <?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_smarty_tpl->tpl_vars['vendor_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
 $_smarty_tpl->tpl_vars['vendor_id']->value = $_smarty_tpl->tpl_vars['cart']->key;
?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/direct_payments/views/separate_checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('vendor_id'=>$_smarty_tpl->tpl_vars['vendor_id']->value,'vendor'=>$_smarty_tpl->tpl_vars['vendors']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'cart'=>$_smarty_tpl->tpl_vars['cart']->value,'cart_products'=>$_smarty_tpl->tpl_vars['group_cart_products']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'product_groups'=>$_smarty_tpl->tpl_vars['group_product_groups']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'checkout_add_buttons'=>$_smarty_tpl->tpl_vars['group_checkout_add_buttons']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'take_surcharge_from_vendor'=>$_smarty_tpl->tpl_vars['group_take_surcharge_from_vendor']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'payment_methods'=>$_smarty_tpl->tpl_vars['group_payment_methods']->value[$_smarty_tpl->tpl_vars['vendor_id']->value]), 0);?>

    <?php } ?>
<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

    <div class="buttons-container wrap">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0);?>

    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/direct_payments/views/separate_checkout/cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/direct_payments/views/separate_checkout/cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/cart_content.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['carts']->value) {?>
    <h1 class="ty-mainbox-title <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['carts']->value)>1) {?>ty-mve-title<?php }?>"><?php echo $_smarty_tpl->__("cart_contents");?>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['carts']->value)>1) {?>
            <div class="ty-mve-total ty-float-right"
                 id="checkout_totals_header_general">
                <?php echo $_smarty_tpl->__("total_cost");?>
:&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['carts_total']->value,'class'=>"ty-price"), 0);?>

            <!--checkout_totals_header_general--></div>
        <?php }?>
    </h1>

    <?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_smarty_tpl->tpl_vars['vendor_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
 $_smarty_tpl->tpl_vars['vendor_id']->value = $_smarty_tpl->tpl_vars['cart']->key;
?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/direct_payments/views/separate_checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('vendor_id'=>$_smarty_tpl->tpl_vars['vendor_id']->value,'vendor'=>$_smarty_tpl->tpl_vars['vendors']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'cart'=>$_smarty_tpl->tpl_vars['cart']->value,'cart_products'=>$_smarty_tpl->tpl_vars['group_cart_products']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'product_groups'=>$_smarty_tpl->tpl_vars['group_product_groups']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'checkout_add_buttons'=>$_smarty_tpl->tpl_vars['group_checkout_add_buttons']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'take_surcharge_from_vendor'=>$_smarty_tpl->tpl_vars['group_take_surcharge_from_vendor']->value[$_smarty_tpl->tpl_vars['vendor_id']->value],'payment_methods'=>$_smarty_tpl->tpl_vars['group_payment_methods']->value[$_smarty_tpl->tpl_vars['vendor_id']->value]), 0);?>

    <?php } ?>
<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

    <div class="buttons-container wrap">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0);?>

    </div>
<?php }?>
<?php }?><?php }} ?>
