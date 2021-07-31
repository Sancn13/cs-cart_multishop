<?php /* Smarty version Smarty-3.1.21, created on 2021-05-28 04:02:46
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\product_features\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2977471860b04136362bb2-24970009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3bbdb612507e0b210413576cebd8d3cb07d0d01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\product_features\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2977471860b04136362bb2-24970009',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b04136387939_26724448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b04136387939_26724448')) {function content_60b04136387939_26724448($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('delete_selected','create_filters'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'text'=>$_smarty_tpl->__("delete_selected"),'dispatch'=>"dispatch[product_features.m_delete]",'form'=>"manage_product_features_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("create_filters"),'dispatch'=>"dispatch[product_filters.m_create_by_features]",'form'=>"manage_product_features_form"));?>

</li>
<?php }} ?>
