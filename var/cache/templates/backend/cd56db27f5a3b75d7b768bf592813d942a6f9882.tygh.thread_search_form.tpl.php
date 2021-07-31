<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 04:19:03
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_communication\views\vendor_communication\components\thread_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93883789560bc228761fb25-21617260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd56db27f5a3b75d7b768bf592813d942a6f9882' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\thread_search_form.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93883789560bc228761fb25-21617260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'form_meta' => 0,
    'put_request_vars' => 0,
    'runtime' => 0,
    'period' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc228764bef6_90635802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc228764bef6_90635802')) {function content_60bc228764bef6_90635802($_smarty_tpl) {?><?php if (!is_callable('smarty_function_array_to_fields')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.array_to_fields.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','vendor_communication.customer_name','vendor'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"vendor_communication.threads",'view_type'=>"vc_threads",'view_additional_parameters'=>"&communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type'])), 0);?>


<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form name="thread_search_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_REQUEST['redirect_url']) {?>
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_REQUEST['communication_type']) {?>
            <input type="hidden" name="communication_type" value="<?php echo htmlspecialchars($_REQUEST['communication_type'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
            <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback"),'escape'=>array("data_id")),$_smarty_tpl);?>

        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['communication_type']==smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER")) {?>
                <div class="sidebar-field">
                    <label for="elm_customer"><?php echo $_smarty_tpl->__("vendor_communication.customer_name");?>
</label>
                    <div class="break">
                        <input type="text" name="customer_name" id="elm_customer" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['customer_name'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="sidebar-field">
                    <label for="elm_company"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                    <div class="break">
                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"elm_company",'input_name'=>"company_ids[]",'multiple'=>true,'show_advanced'=>false,'type'=>"selection",'close_on_select'=>false,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_ids']), 0);?>

                    </div>
                </div>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['period']->value,'display'=>"form"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"vc_thread",'in_popup'=>false,'but_permission_data'=>((string)$_smarty_tpl->tpl_vars['dispatch']->value)."?communication_type=".((string)$_smarty_tpl->tpl_vars['search']->value['communication_type'])), 0);?>


    </form>
</div><hr>
<?php }} ?>
