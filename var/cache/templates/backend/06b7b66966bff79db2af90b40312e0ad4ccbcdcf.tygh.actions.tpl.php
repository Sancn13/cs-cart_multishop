<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 12:29:15
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\categories\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50737439360b2096b09a8e4-75925065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b7b66966bff79db2af90b40312e0ad4ccbcdcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\categories\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50737439360b2096b09a8e4-75925065',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b2096b0c1ff5_17250356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b2096b0c1ff5_17250356')) {function content_60b2096b0c1ff5_17250356($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('category_deletion_side_effects','export_products'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[categories.m_delete]",'form'=>"category_tree_form",'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_smarty_tpl->__("category_deletion_side_effects"))));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_products"),'dispatch'=>"dispatch[products.export_range]",'form'=>"category_tree_form"));?>

</li>
<?php }} ?>
