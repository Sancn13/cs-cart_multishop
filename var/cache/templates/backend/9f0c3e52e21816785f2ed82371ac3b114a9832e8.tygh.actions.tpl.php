<?php /* Smarty version Smarty-3.1.21, created on 2021-07-30 03:56:55
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\datakeeper\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142322594261034e576b4b76-32105591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0c3e52e21816785f2ed82371ac3b114a9832e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\datakeeper\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '142322594261034e576b4b76-32105591',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61034e576e4ae6_15504465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61034e576e4ae6_15504465')) {function content_61034e576e4ae6_15504465($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"datakeeper:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"datakeeper:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[datakeeper.m_delete]",'form'=>"backups_form"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"datakeeper:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
