<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:47:59
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\products\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190327323760af5cbf176a70-09005848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf47a15a16d7c9408c93b4211a71f0fd90e5fef8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\products\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190327323760af5cbf176a70-09005848',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cbf1b6b93_41734823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cbf1b6b93_41734823')) {function content_60af5cbf1b6b93_41734823($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_edit.make_active','bulk_edit.make_disabled','bulk_edit.make_hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_active");
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[products.m_activate]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_disabled");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[products.m_disable]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_hidden");
$_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp4,'dispatch'=>"dispatch[products.m_hide]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
