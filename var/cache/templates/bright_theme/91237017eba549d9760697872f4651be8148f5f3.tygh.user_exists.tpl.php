<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 10:43:29
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\views\checkout\components\user_exists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37006730460bc7ca15673c8-13925397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91237017eba549d9760697872f4651be8148f5f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\views\\checkout\\components\\user_exists.tpl',
      1 => 1617678753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '37006730460bc7ca15673c8-13925397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'email' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc7ca1638ba2_88265177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc7ca1638ba2_88265177')) {function content_60bc7ca1638ba2_88265177($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('checkout.email_exists.popup.message','checkout.email_exists.popup.cancel_btn','checkout.email_exists.popup.sign_in_btn','checkout.email_exists.popup.message','checkout.email_exists.popup.cancel_btn','checkout.email_exists.popup.sign_in_btn'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="login_by_otp_container">
    <div class="ty-product-notification__body cm-notification-max-height">
        <?php echo $_smarty_tpl->__("checkout.email_exists.popup.message");?>

    </div>
    <div class="ty-product-notification__buttons clearfix">
        <div class="ty-float-left">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.cancel_btn"),'but_meta'=>"cm-notification-close"), 0);?>

        </div>
        <div class="ty-right">
            <form id="checkout_user_exist_notification_form">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="container_id" value="login_by_otp_container">
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
">
            </form>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.sign_in_btn"),'but_href'=>"auth.send_otp",'but_meta'=>"ty-btn__secondary cm-ajax cm-ajax-send-form cm-post",'but_target_id'=>"login_by_otp_container",'but_target_form'=>"#checkout_user_exist_notification_form",'but_title'=>$_smarty_tpl->__('checkout.email_exists.popup.title')), 0);?>

        </div>
    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/user_exists.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/user_exists.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="login_by_otp_container">
    <div class="ty-product-notification__body cm-notification-max-height">
        <?php echo $_smarty_tpl->__("checkout.email_exists.popup.message");?>

    </div>
    <div class="ty-product-notification__buttons clearfix">
        <div class="ty-float-left">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.cancel_btn"),'but_meta'=>"cm-notification-close"), 0);?>

        </div>
        <div class="ty-right">
            <form id="checkout_user_exist_notification_form">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="container_id" value="login_by_otp_container">
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_url("checkout.checkout"), ENT_QUOTES, 'UTF-8');?>
">
            </form>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_text'=>$_smarty_tpl->__("checkout.email_exists.popup.sign_in_btn"),'but_href'=>"auth.send_otp",'but_meta'=>"ty-btn__secondary cm-ajax cm-ajax-send-form cm-post",'but_target_id'=>"login_by_otp_container",'but_target_form'=>"#checkout_user_exist_notification_form",'but_title'=>$_smarty_tpl->__('checkout.email_exists.popup.title')), 0);?>

        </div>
    </div>
</div><?php }?><?php }} ?>
