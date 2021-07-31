<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:47:06
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\companies\components\status_on_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188246440460af4e7ac14ae6-79391692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c597f24f572108f5c68523f16a6c489f635475b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\companies\\components\\status_on_manage.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '188246440460af4e7ac14ae6-79391692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'settings' => 0,
    'id' => 0,
    'approve_status' => 0,
    'status' => 0,
    'items_status' => 0,
    'runtime' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af4e7ac8e657_38256210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af4e7ac8e657_38256210')) {function content_60af4e7ac8e657_38256210($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_vendor'));
?>


<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['company']->value['status']===smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Vendors']['allow_approve_vendors_in_two_steps']==smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->tpl_vars['approve_status'] = new Smarty_variable(smarty_modifier_enum("VendorStatuses::PENDING"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['approve_status'] = new Smarty_variable(smarty_modifier_enum("VendorStatuses::ACTIVE"), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/approve_disapprove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'dispatch'=>"companies.update_status",'approve_status'=>$_smarty_tpl->tpl_vars['approve_status']->value), 0);?>

<?php } elseif (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['company']->value['status']!==smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'items_status'=>$_smarty_tpl->tpl_vars['items_status']->value,'object_id_name'=>"company_id",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'update_controller'=>"companies",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_vendor"),'status_target_id'=>"pagination_contents",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value)), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_status_switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['company']->value), 0);?>

<?php }?><?php }} ?>
