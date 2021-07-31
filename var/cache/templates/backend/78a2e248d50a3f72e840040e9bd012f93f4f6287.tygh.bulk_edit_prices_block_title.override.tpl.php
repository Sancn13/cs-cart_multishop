<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:47:58
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\hooks\products\bulk_edit_prices_block_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186617710860af5cbedae700-03725817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a2e248d50a3f72e840040e9bd012f93f4f6287' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\bulk_edit_prices_block_title.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186617710860af5cbedae700-03725817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_bulk_edit_prices_block_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cbedddb18_45243790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cbedddb18_45243790')) {function content_60af5cbedddb18_45243790($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price'));
?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_bulk_edit_prices_block_title']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <?php echo $_smarty_tpl->__("price");?>

<?php }?><?php }} ?>
