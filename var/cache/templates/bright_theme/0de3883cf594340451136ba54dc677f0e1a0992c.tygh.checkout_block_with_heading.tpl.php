<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:33:11
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\blocks\lite_checkout\wrappers\checkout_block_with_heading.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69406821460acd26753a5e4-43194090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de3883cf594340451136ba54dc677f0e1a0992c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\blocks\\lite_checkout\\wrappers\\checkout_block_with_heading.tpl',
      1 => 1617678751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '69406821460acd26753a5e4-43194090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd267558876_59118763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd267558876_59118763')) {function content_60acd267558876_59118763($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="litecheckout__container">
        <div class="litecheckout__group">
            <div class="litecheckout__item">
                <h2 class="litecheckout__step-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/wrappers/checkout_block_with_heading.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/wrappers/checkout_block_with_heading.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="litecheckout__container">
        <div class="litecheckout__group">
            <div class="litecheckout__item">
                <h2 class="litecheckout__step-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
<?php }
}?><?php }} ?>
