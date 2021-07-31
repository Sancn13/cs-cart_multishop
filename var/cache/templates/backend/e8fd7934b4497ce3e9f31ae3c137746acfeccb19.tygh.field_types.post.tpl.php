<?php /* Smarty version Smarty-3.1.21, created on 2021-07-06 05:29:14
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_plans\hooks\profile_fields\field_types.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99121646560e3bffa4bd174-32840042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8fd7934b4497ce3e9f31ae3c137746acfeccb19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\profile_fields\\field_types.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99121646560e3bffa4bd174-32840042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile_type' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60e3bffa4f4e24_19317811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e3bffa4f4e24_19317811')) {function content_60e3bffa4f4e24_19317811($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['profile_type']->value==smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
    <option value="<?php echo htmlspecialchars((defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_plan");?>
</option>
<?php }?>
<?php }} ?>
