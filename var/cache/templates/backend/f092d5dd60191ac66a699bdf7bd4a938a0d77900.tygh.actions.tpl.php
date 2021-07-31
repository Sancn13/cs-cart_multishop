<?php /* Smarty version Smarty-3.1.21, created on 2021-05-28 04:02:37
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\product_options\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177950608960b0412d524695-51117514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f092d5dd60191ac66a699bdf7bd4a938a0d77900' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\product_options\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '177950608960b0412d524695-51117514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b0412d5bede0_61686372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b0412d5bede0_61686372')) {function content_60b0412d5bede0_61686372($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('apply_to_products'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("apply_to_products"),'dispatch'=>"dispatch[product_options.apply]",'class'=>"cm-submit",'process'=>true,'form'=>"manage_product_options_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[product_options.m_delete]",'form'=>"manage_product_options_form"));?>

</li>
<?php }} ?>
