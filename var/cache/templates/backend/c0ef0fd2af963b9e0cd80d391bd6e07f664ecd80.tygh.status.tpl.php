<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:47:06
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\companies\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37164074560af4e7a31e836-66677558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ef0fd2af963b9e0cd80d391bd6e07f664ecd80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\companies\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '37164074560af4e7a31e836-66677558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_statuses' => 0,
    'status_name' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af4e7a36b355_72243311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af4e7a36b355_72243311')) {function content_60af4e7a36b355_72243311($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status'));
?>
<?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['c_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("change_to_status",array("[status]"=>((string)$_smarty_tpl->tpl_vars['status_name']->value))),'dispatch'=>"dispatch[companies.m_update_statuses]",'form'=>"companies_form",'class'=>"cm-process-items cm-dialog-opener",'data'=>array("data-ca-target-id"=>"content_selected_make_status_".((string)$_smarty_tpl->tpl_vars['status']->value))));?>

    </li>
<?php } ?><?php }} ?>
