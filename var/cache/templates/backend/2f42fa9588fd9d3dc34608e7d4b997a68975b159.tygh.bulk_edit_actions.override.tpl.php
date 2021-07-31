<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:47:59
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\bulk_edit_actions.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:825176360af5cbf51c962-91394247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f42fa9588fd9d3dc34608e7d4b997a68975b159' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\bulk_edit_actions.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '825176360af5cbf51c962-91394247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_bulk_edit_actions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cbf55f814_17685453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cbf55f814_17685453')) {function content_60af5cbf55f814_17685453($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone_selected','export_selected'));
?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_bulk_edit_actions']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range.master]",'form'=>"manage_products_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>

    </li>
<?php }?><?php }} ?>
