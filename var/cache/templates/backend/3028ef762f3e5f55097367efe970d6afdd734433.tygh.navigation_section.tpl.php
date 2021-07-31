<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 11:11:44
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\notification_settings\components\navigation_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169375913360b348c0e9a7e8-18623434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3028ef762f3e5f55097367efe970d6afdd734433' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\notification_settings\\components\\navigation_section.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169375913360b348c0e9a7e8-18623434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_section' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b348c0efd7c0_13194175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b348c0efd7c0_13194175')) {function content_60b348c0efd7c0_13194175($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('customer_notifications','admin_notifications','vendor_notifications','code_snippets','documents'));
?>
<div class="sidebar-row">
    <ul class="nav nav-list">
        <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value=="customer_notifications") {?> active<?php }?>"><a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::CUSTOMER"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("notification_settings.manage?receiver_type=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("customer_notifications");?>
</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value=="admin_notifications") {?> active<?php }?>"><a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::ADMIN"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo htmlspecialchars(fn_url("notification_settings.manage?receiver_type=".$_tmp4), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("admin_notifications");?>
</a></li>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value=="vendor_notifications") {?> active<?php }?>"><a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::VENDOR"), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo htmlspecialchars(fn_url("notification_settings.manage?receiver_type=".$_tmp5), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_notifications");?>
</a></li>
        <?php }?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"notification_settings:dynamic_menu_user_types")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"notification_settings:dynamic_menu_user_types"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"notification_settings:dynamic_menu_user_types"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['email_templates']=="new")) {?>
            <?php if (fn_check_view_permissions("email_templates.snippets","GET")) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value=="code_snippets") {?> active<?php }?>"><a href="<?php echo htmlspecialchars(fn_url("email_templates.snippets"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("code_snippets");?>
</a></li>
            <?php }?>
            <?php if (fn_check_view_permissions("documents.manage","GET")) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['active_section']->value=="documents") {?> active<?php }?>"><a href="<?php echo htmlspecialchars(fn_url("documents.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("documents");?>
</a></li>
            <?php }?>
        <?php }?>
    </ul>
</div>
<hr>
<?php }} ?>
