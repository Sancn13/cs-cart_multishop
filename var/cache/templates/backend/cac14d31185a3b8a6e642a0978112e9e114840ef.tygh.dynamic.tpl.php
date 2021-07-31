<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 12:11:44
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\promotions\dynamic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161990013960b356d048c904-21852140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cac14d31185a3b8a6e642a0978112e9e114840ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\promotions\\dynamic.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161990013960b356d048c904-21852140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elm_id' => 0,
    'picker_selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b356d050e982_73941316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b356d050e982_73941316')) {function content_60b356d050e982_73941316($_smarty_tpl) {?><div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_REQUEST['condition']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/condition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_selected_companies'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value), 0);?>


<?php } elseif ($_REQUEST['group']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_REQUEST['bonus']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/bonus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
