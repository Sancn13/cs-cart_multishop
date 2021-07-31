<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:34:03
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\reward_points\hooks\checkout\checkout_discount.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161603298760adc1ab6e0686-73936604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae3f84b97ae6fb3aa8219cd92256ae58e86bf91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\reward_points\\hooks\\checkout\\checkout_discount.pre.tpl',
      1 => 1621936855,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161603298760adc1ab6e0686-73936604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'config' => 0,
    'use_ajax' => 0,
    '_redirect_url' => 0,
    'additional_ids' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc1ab735506_04607796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc1ab735506_04607796')) {function content_60adc1ab735506_04607796($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points_in_use','points_lowercase','points','points_in_use','points_lowercase','points'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {?>
    <li class="ty-cart-statistic__item">
        <?php $_smarty_tpl->tpl_vars["_redirect_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("cm-ajax", null, 0);
}?>
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->tpl_vars['additional_ids']->value)), 0);?>
</span>
    </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <li class="ty-cart-statistic__item">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points");?>
</span>
        <span class="ty-cart-statistic__value">+<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</span>
    </li>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/checkout_discount.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/checkout_discount.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {?>
    <li class="ty-cart-statistic__item">
        <?php $_smarty_tpl->tpl_vars["_redirect_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['use_ajax']->value) {
$_smarty_tpl->tpl_vars["_class"] = new Smarty_variable("cm-ajax", null, 0);
}?>
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete_points_in_use?redirect_url=".((string)$_smarty_tpl->tpl_vars['_redirect_url']->value),'but_meta'=>"cm-post ty-reward-points__delete-icon",'but_role'=>"delete",'but_target_id'=>"checkout_totals,subtotal_price_in_points,checkout_steps,litecheckout_form".((string)$_smarty_tpl->tpl_vars['additional_ids']->value)), 0);?>
</span>
    </li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <li class="ty-cart-statistic__item">
        <span class="ty-cart-statistic__title"><?php echo $_smarty_tpl->__("points");?>
</span>
        <span class="ty-cart-statistic__value">+<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</span>
    </li>
<?php }
}?><?php }} ?>
