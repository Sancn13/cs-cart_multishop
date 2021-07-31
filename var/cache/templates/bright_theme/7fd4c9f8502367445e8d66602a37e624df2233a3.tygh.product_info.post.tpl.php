<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 14:03:40
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\reward_points\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104566477160acd98c5529b8-94410535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fd4c9f8502367445e8d66602a37e624df2233a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\reward_points\\hooks\\orders\\product_info.post.tpl',
      1 => 1621936856,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '104566477160acd98c5529b8-94410535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd98c567726_96006907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd98c567726_96006907')) {function content_60acd98c567726_96006907($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points','price_in_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['product']->value) {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/orders/product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/orders/product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['product']->value) {?>
    <div class="ty-control-group product-list-field">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
        <span class="ty-control-group__item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
<?php }
}?><?php }} ?>
