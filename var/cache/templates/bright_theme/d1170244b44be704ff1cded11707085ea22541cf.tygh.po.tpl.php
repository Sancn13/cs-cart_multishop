<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:38:57
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\views\orders\components\payments\po.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105662862660b308d1c4ab05-33167456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1170244b44be704ff1cded11707085ea22541cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\views\\orders\\components\\payments\\po.tpl',
      1 => 1617678753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '105662862660b308d1c4ab05-33167456',
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
  'unifunc' => 'content_60b308d1cbeff6_73070915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b308d1cbeff6_73070915')) {function content_60b308d1cbeff6_73070915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('po_number','company_name','buyer_name','position','po_number','company_name','buyer_name','position'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__group">
    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_po_number" size="35" type="text" name="payment_info[po_number]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['po_number'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus litecheckout__input" placeholder=" "/>
        <label for="elm_po_number" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("po_number");?>
:</label>
    </div>

    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_company_name" size="35" type="text" name="payment_info[company_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['company_name'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text litecheckout__input" placeholder=" "/>
        <label for="elm_company_name" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("company_name");?>
:</label>
    </div>

    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_buyer_name" size="35" type="text" name="payment_info[buyer_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['buyer_name'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text litecheckout__input" placeholder=" "/>
        <label for="elm_buyer_name" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("buyer_name");?>
:</label>
    </div>

    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_position" size="35" type="text" name="payment_info[position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['position'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text-short litecheckout__input" placeholder=" "/>
        <label for="elm_position" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("position");?>
:</label>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/po.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/po.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__group">
    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_po_number" size="35" type="text" name="payment_info[po_number]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['po_number'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-focus litecheckout__input" placeholder=" "/>
        <label for="elm_po_number" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("po_number");?>
:</label>
    </div>

    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_company_name" size="35" type="text" name="payment_info[company_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['company_name'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text litecheckout__input" placeholder=" "/>
        <label for="elm_company_name" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("company_name");?>
:</label>
    </div>

    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_buyer_name" size="35" type="text" name="payment_info[buyer_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['buyer_name'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text litecheckout__input" placeholder=" "/>
        <label for="elm_buyer_name" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("buyer_name");?>
:</label>
    </div>

    <div class="litecheckout__field litecheckout__field--medium">
        <input id="elm_position" size="35" type="text" name="payment_info[position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_info']['position'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text-short litecheckout__input" placeholder=" "/>
        <label for="elm_position" class="cm-required litecheckout__label"><?php echo $_smarty_tpl->__("position");?>
:</label>
    </div>
</div>
<?php }?><?php }} ?>
