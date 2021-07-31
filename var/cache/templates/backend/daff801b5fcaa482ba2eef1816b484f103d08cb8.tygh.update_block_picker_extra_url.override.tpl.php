<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:17:01
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\blog\hooks\block_manager\update_block_picker_extra_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6158314060cb676d42e050-38194968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daff801b5fcaa482ba2eef1816b484f103d08cb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\blog\\hooks\\block_manager\\update_block_picker_extra_url.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6158314060cb676d42e050-38194968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_object_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb676d4b4970_01750068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb676d4b4970_01750068')) {function content_60cb676d4b4970_01750068($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch']=="pages.view?page_type=".((string)(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null))) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars((defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null), ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
