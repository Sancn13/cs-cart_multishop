<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:28:05
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\product_variations\hooks\shipments\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47271051660adc04526b1c3-09274063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13433af0902588ba1a1e5850e34ecfc36204ad4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\product_variations\\hooks\\shipments\\product_info.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47271051660adc04526b1c3-09274063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'product' => 0,
    'variation_features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc045299620_47209384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc045299620_47209384')) {function content_60adc045299620_47209384($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']||$_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>

    <?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['oi']->value['variation_features'], null, 0);?>
    <?php } else { ?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_features'], null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
