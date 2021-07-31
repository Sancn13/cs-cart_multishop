<?php /* Smarty version Smarty-3.1.21, created on 2021-06-09 13:29:17
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\block_manager\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67263169860c097fd3045d9-17764711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6470e23f6e41da2fd84432e37c260e281a20b4f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\block_manager\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '67263169860c097fd3045d9-17764711',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c097fd32ad65_65374970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c097fd32ad65_65374970')) {function content_60c097fd32ad65_65374970($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_manager:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_manager:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[block_manager.block.m_delete]",'form'=>"manage_blocks_form"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_manager:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
