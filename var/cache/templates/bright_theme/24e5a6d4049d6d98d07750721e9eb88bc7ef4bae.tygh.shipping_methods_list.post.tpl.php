<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:15:18
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\warehouses\hooks\checkout\shipping_methods_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132188240460acce36436d52-35530367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24e5a6d4049d6d98d07750721e9eb88bc7ef4bae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\warehouses\\hooks\\checkout\\shipping_methods_list.post.tpl',
      1 => 1621936858,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132188240460acce36436d52-35530367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acce3644e108_80894889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acce3644e108_80894889')) {function content_60acce3644e108_80894889($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.shipping_delay_for_products','warehouses.shipping_delay_for_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['warn_about_delay']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <?php echo $_smarty_tpl->__("warehouses.shipping_delay_for_products");?>

        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/warehouses/hooks/checkout/shipping_methods_list.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/warehouses/hooks/checkout/shipping_methods_list.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['warn_about_delay']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <?php echo $_smarty_tpl->__("warehouses.shipping_delay_for_products");?>

        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>
