<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:28:48
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\required_products\hooks\products\options_advanced.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148635570760acd160be2950-80183941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3265124057fcf631c571d6057abc369fb76ca049' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\required_products\\hooks\\products\\options_advanced.pre.tpl',
      1 => 1621936855,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '148635570760acd160be2950-80183941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_product_status' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd160c00935_43000627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd160c00935_43000627')) {function content_60acd160c00935_43000627($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bought','bought'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['show_product_status']->value&&$_smarty_tpl->tpl_vars['product']->value['bought']=="Y") {?>
<p><strong><?php echo $_smarty_tpl->__("bought");?>
</strong></p>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/required_products/hooks/products/options_advanced.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/required_products/hooks/products/options_advanced.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_product_status']->value&&$_smarty_tpl->tpl_vars['product']->value['bought']=="Y") {?>
<p><strong><?php echo $_smarty_tpl->__("bought");?>
</strong></p>
<?php }
}?><?php }} ?>
