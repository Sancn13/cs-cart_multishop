<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:24
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\product_variations\hooks\products\update_product_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7972441060af5cd850a6b3-04248843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84de568c3011d7b6e261b69c8b59df398c1eb2dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_buttons.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7972441060af5cd850a6b3-04248843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'is_form_readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd8547304_71010803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd8547304_71010803')) {function content_60af5cd8547304_71010803($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save','save'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_group_id']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php } elseif (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>}
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[product_variations.add_product]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php }?>

<?php }} ?>
