<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:52:40
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\discussion\hooks\companies\tabs.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30279754160af4fc8af07a3-93532471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b497efa8687018c3107294bc6a75d1ec64cc8154' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\discussion\\hooks\\companies\\tabs.post.tpl',
      1 => 1621936853,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '30279754160af4fc8af07a3-93532471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'selected_section' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af4fc8b42f82_02355241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af4fc8b42f82_02355241')) {function content_60af4fc8b42f82_02355241($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="discussion") {?>hidden<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0);?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!="discussion") {?>hidden<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0);?>

</div><?php }?><?php }} ?>
