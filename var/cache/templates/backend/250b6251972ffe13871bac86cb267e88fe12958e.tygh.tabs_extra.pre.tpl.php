<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:24
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\tabs_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119676019560af5cd8871de7-45651569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250b6251972ffe13871bac86cb267e88fe12958e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\tabs_extra.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '119676019560af5cd8871de7-45651569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd88d4e29_81473118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd88d4e29_81473118')) {function content_60af5cd88d4e29_81473118($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view','view'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_for_vendor'] = clone $_smarty_tpl->tpl_vars['hide_for_vendor'];?>
    <?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable("cm-hide-inputs", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_inputs'] = clone $_smarty_tpl->tpl_vars['hide_inputs'];?>
    <?php $_smarty_tpl->tpl_vars['edit_link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['edit_link_text'] = clone $_smarty_tpl->tpl_vars['edit_link_text'];?>
    <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['link_text'] = clone $_smarty_tpl->tpl_vars['link_text'];?>
    <?php $_smarty_tpl->tpl_vars['skip_delete'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['skip_delete'] = clone $_smarty_tpl->tpl_vars['skip_delete'];?>
<?php }?><?php }} ?>
