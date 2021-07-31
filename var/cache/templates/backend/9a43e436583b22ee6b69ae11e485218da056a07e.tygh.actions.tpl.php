<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:03:08
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\pages\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158021653460cb642c584bc6-23455906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a43e436583b22ee6b69ae11e485218da056a07e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\pages\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '158021653460cb642c584bc6-23455906',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb642c598375_88797751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb642c598375_88797751')) {function content_60cb642c598375_88797751($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone_selected'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[pages.m_clone]",'form'=>"pages_tree_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[pages.m_delete]",'form'=>"pages_tree_form"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
