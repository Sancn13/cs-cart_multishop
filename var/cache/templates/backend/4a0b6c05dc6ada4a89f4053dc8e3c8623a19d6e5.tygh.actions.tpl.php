<?php /* Smarty version Smarty-3.1.21, created on 2021-06-05 05:44:32
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\shipments\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20518852760bae510315cd0-11801594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a0b6c05dc6ada4a89f4053dc8e3c8623a19d6e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\shipments\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20518852760bae510315cd0-11801594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bae510349181_37632523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bae510349181_37632523')) {function content_60bae510349181_37632523($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_print_packing_slip'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shipments:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shipments:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_print_packing_slip"),'dispatch'=>"dispatch[shipments.packing_slip]",'form'=>"manage_shipments_form",'class'=>"cm-new-window"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shipments:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <li class="divider"></li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[shipments.m_delete]",'form'=>"manage_shipments_form"));?>

    </li>
<?php }} ?>
