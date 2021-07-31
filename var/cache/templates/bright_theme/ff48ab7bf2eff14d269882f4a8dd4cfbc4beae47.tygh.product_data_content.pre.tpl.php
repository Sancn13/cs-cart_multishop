<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:29:18
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\master_products\hooks\products\product_data_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7970966560af585e22c9f2-66799549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff48ab7bf2eff14d269882f4a8dd4cfbc4beae47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\master_products\\hooks\\products\\product_data_content.pre.tpl',
      1 => 1622104001,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7970966560af585e22c9f2-66799549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'show_add_to_cart' => 0,
    'show_discount_label' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af585e263319_27741815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af585e263319_27741815')) {function content_60af585e263319_27741815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
        <?php $_smarty_tpl->tpl_vars['show_view_offers_btn'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_view_offers_btn'] = clone $_smarty_tpl->tpl_vars['show_view_offers_btn'];?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['show_master_product_discount_label'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_discount_label']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_master_product_discount_label'] = clone $_smarty_tpl->tpl_vars['show_master_product_discount_label'];?>
    <?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
    <?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
    <?php $_smarty_tpl->tpl_vars['show_product_amount'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_amount'] = clone $_smarty_tpl->tpl_vars['show_product_amount'];?>
    <?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_add_to_cart'] = clone $_smarty_tpl->tpl_vars['show_add_to_cart'];?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_data_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/master_products/hooks/products/product_data_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
        <?php $_smarty_tpl->tpl_vars['show_view_offers_btn'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_view_offers_btn'] = clone $_smarty_tpl->tpl_vars['show_view_offers_btn'];?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['show_master_product_discount_label'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_discount_label']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_master_product_discount_label'] = clone $_smarty_tpl->tpl_vars['show_master_product_discount_label'];?>
    <?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
    <?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
    <?php $_smarty_tpl->tpl_vars['show_product_amount'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_amount'] = clone $_smarty_tpl->tpl_vars['show_product_amount'];?>
    <?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_add_to_cart'] = clone $_smarty_tpl->tpl_vars['show_add_to_cart'];?>
<?php }
}?><?php }} ?>
