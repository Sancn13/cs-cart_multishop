<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 12:29:14
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\categories\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82018198760b2096aeca2a0-68157102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c935d0962075c0eb863e8557add6b1a7de06f36b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\categories\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82018198760b2096aeca2a0-68157102',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b2096aef9599_89139394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b2096aef9599_89139394')) {function content_60b2096aef9599_89139394($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status','active','change_to_status','disabled','change_to_status','hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("active")));
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1,'dispatch'=>"dispatch[categories.m_activate]",'form'=>"category_tree_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("disabled")));
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[categories.m_disable]",'form'=>"category_tree_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("hidden")));
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[categories.m_hide]",'form'=>"category_tree_form"));?>

</li>
<?php }} ?>
