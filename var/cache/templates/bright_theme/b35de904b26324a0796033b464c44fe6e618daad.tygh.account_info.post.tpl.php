<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 14:01:44
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\age_verification\hooks\profiles\account_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91194949560acd9186ee859-32863880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b35de904b26324a0796033b464c44fe6e618daad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\age_verification\\hooks\\profiles\\account_info.post.tpl',
      1 => 1621936852,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91194949560acd9186ee859-32863880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'nothing_extra' => 0,
    'user_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd918708bd1_44248597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd918708bd1_44248597')) {function content_60acd918708bd1_44248597($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('age_verification','birthday','age_verification','birthday'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-age-verification-birthday">
    <?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("age_verification")), 0);?>

    <?php }?>

    <div class="ty-control-group">
        <label class="ty-control-group__title" for="birthday"><?php echo $_smarty_tpl->__("birthday");?>
</label>
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"birthday",'date_name'=>"user_data[birthday]",'date_val'=>$_smarty_tpl->tpl_vars['user_data']->value['birthday']), 0);?>

    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/age_verification/hooks/profiles/account_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/age_verification/hooks/profiles/account_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-age-verification-birthday">
    <?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("age_verification")), 0);?>

    <?php }?>

    <div class="ty-control-group">
        <label class="ty-control-group__title" for="birthday"><?php echo $_smarty_tpl->__("birthday");?>
</label>
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"birthday",'date_name'=>"user_data[birthday]",'date_val'=>$_smarty_tpl->tpl_vars['user_data']->value['birthday']), 0);?>

    </div>
</div><?php }?><?php }} ?>
