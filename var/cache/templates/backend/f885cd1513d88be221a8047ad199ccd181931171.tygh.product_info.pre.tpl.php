<?php /* Smarty version Smarty-3.1.21, created on 2021-06-05 06:08:54
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\product_variations\hooks\cart\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63607288360baeac6b5a908-71622116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f885cd1513d88be221a8047ad199ccd181931171' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\product_variations\\hooks\\cart\\product_info.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '63607288360baeac6b5a908-71622116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_product' => 0,
    'product' => 0,
    'variation_features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60baeac6b9d010_85957939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60baeac6b9d010_85957939')) {function content_60baeac6b9d010_85957939($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['_product']->value['product_id']&&$_smarty_tpl->tpl_vars['_product']->value['variation_features']) {?>
    
    <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['_product']->value['variation_features'], null, 0);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['_product']->value['product_id']&&$_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    
    <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_features'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['variation_features']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
