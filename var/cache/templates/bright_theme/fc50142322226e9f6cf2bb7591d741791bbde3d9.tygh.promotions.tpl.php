<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 14:03:41
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\views\orders\components\promotions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76600174960acd98d938402-94371260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc50142322226e9f6cf2bb7591d741791bbde3d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\views\\orders\\components\\promotions.tpl',
      1 => 1617678753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '76600174960acd98d938402-94371260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'promotions' => 0,
    'promotion' => 0,
    'promotion_id' => 0,
    'order_info' => 0,
    'bonus' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd98d98e6d9_73626882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd98d98e6d9_73626882')) {function content_60acd98d98e6d9_73626882($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('promotions','coupon_code','promotions','coupon_code'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-orders-promotion">
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("promotions")), 0);?>


<?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_smarty_tpl->tpl_vars["promotion_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
 $_smarty_tpl->tpl_vars["promotion_id"]->value = $_smarty_tpl->tpl_vars["promotion"]->key;
?>
<h5 class="ty-orders-promotion__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>

    <?php  $_smarty_tpl->tpl_vars["bonus"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bonus"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['promotions'][$_smarty_tpl->tpl_vars['promotion_id']->value]['bonuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bonus"]->key => $_smarty_tpl->tpl_vars["bonus"]->value) {
$_smarty_tpl->tpl_vars["bonus"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['bonus']->value['bonus']=="give_coupon") {?>
    <div class="ty-control-group">
        <label class="ty-orders-promotion__coupon-title"><?php echo $_smarty_tpl->__("coupon_code");?>
:</label>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value['coupon_code'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <?php }?>
    <?php } ?>

<div class="ty-orders-promotion__description"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
<?php } ?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/promotions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/promotions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-orders-promotion">
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("promotions")), 0);?>


<?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_smarty_tpl->tpl_vars["promotion_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
 $_smarty_tpl->tpl_vars["promotion_id"]->value = $_smarty_tpl->tpl_vars["promotion"]->key;
?>
<h5 class="ty-orders-promotion__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h5>

    <?php  $_smarty_tpl->tpl_vars["bonus"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bonus"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['promotions'][$_smarty_tpl->tpl_vars['promotion_id']->value]['bonuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bonus"]->key => $_smarty_tpl->tpl_vars["bonus"]->value) {
$_smarty_tpl->tpl_vars["bonus"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['bonus']->value['bonus']=="give_coupon") {?>
    <div class="ty-control-group">
        <label class="ty-orders-promotion__coupon-title"><?php echo $_smarty_tpl->__("coupon_code");?>
:</label>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus']->value['coupon_code'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <?php }?>
    <?php } ?>

<div class="ty-orders-promotion__description"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
<?php } ?>
</div><?php }?><?php }} ?>
