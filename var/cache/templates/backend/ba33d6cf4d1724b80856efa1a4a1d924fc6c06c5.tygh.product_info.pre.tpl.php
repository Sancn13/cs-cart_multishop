<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:28:05
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\product_variations\hooks\orders\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93871484760adc0456214c2-19994382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba33d6cf4d1724b80856efa1a4a1d924fc6c06c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\product_variations\\hooks\\orders\\product_info.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93871484760adc0456214c2-19994382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc04564b4d0_64634606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc04564b4d0_64634606')) {function content_60adc04564b4d0_64634606($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
