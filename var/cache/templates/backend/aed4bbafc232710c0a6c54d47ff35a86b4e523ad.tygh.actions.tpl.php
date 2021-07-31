<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:47:06
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\companies\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119010051860af4e7a42acf2-99524944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aed4bbafc232710c0a6c54d47ff35a86b4e523ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\companies\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '119010051860af4e7a42acf2-99524944',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af4e7a4910f9_54741241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af4e7a4910f9_54741241')) {function content_60af4e7a4910f9_54741241($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_vendor_products','view_vendor_admins','view_vendor_orders','export_selected'));
?>
<?php if (fn_check_view_permissions("products.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_vendor_products"),'dispatch'=>"dispatch[products.manage]",'form'=>"companies_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"company_ids")));?>

    </li>
<?php }?>

<?php if (fn_check_view_permissions("profiles.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_vendor_admins"),'dispatch'=>"dispatch[profiles.manage]",'form'=>"companies_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"company_ids")));?>

    </li>
<?php }?>

<?php if (fn_check_view_permissions("orders.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_vendor_orders"),'dispatch'=>"dispatch[orders.manage]",'form'=>"companies_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"company_ids")));?>

    </li>
<?php }?>

<?php if (fn_check_view_permissions("companies.update","POST")&&fn_check_view_permissions("companies.export_range","POST")) {?>
    <li class="divider"></li>
<?php }?>

<?php if (fn_check_view_permissions("companies.update","POST")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[companies.m_delete]",'form'=>"companies_form"));?>

    </li>
<?php }?>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[companies.export_range]",'form'=>"companies_form"));?>

</li>
<?php }} ?>
