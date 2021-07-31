<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:04:59
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\profiles\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39520470060af52ab5fa5b3-02117615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ee9483553f88b2276d1af6d9c3b486441564c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\profiles\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39520470060af52ab5fa5b3-02117615',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af52ab63bb99_38884637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af52ab63bb99_38884637')) {function content_60af52ab63bb99_38884637($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status','active','change_to_status','disabled','notify_user'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("active")));
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp5,'dispatch'=>"dispatch[profiles.m_activate]",'form'=>"userlist_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("disabled")));
$_tmp6=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp6,'dispatch'=>"dispatch[profiles.m_disable]",'form'=>"userlist_form"));?>

</li>

<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0);?>

<?php }} ?>
