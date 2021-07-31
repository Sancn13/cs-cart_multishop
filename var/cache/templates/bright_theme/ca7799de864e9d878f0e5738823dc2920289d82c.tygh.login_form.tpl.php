<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:37:46
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\discussion\views\discussion\components\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56293628660bf2c5a7be2e9-16286316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7799de864e9d878f0e5738823dc2920289d82c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\discussion\\views\\discussion\\components\\login_form.tpl',
      1 => 1621936853,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '56293628660bf2c5a7be2e9-16286316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2c5a90aa73_31162343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2c5a90aa73_31162343')) {function content_60bf2c5a90aa73_31162343($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','discussion.please_log_in_to_write_a_review','sign_in','discussion.please_log_in_to_write_a_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="new_discussion_post_login_form_popup" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <h3><?php echo $_smarty_tpl->__("discussion.please_log_in_to_write_a_review");?>
</h3>
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup"), 0);?>

    </div>
<!--new_discussion_post_login_form_popup--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="new_discussion_post_login_form_popup" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <h3><?php echo $_smarty_tpl->__("discussion.please_log_in_to_write_a_review");?>
</h3>
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup"), 0);?>

    </div>
<!--new_discussion_post_login_form_popup--></div>
<?php }?><?php }} ?>
