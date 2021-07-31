<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:27:41
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\master_products\views\products\master_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:967544960af57fd8edcf3-56425729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2e91a3c539d06ead06939a94bb8c892bdc2fd15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\master_products\\views\\products\\master_products.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '967544960af57fd8edcf3-56425729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af57fd95c110_55471922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af57fd95c110_55471922')) {function content_60af57fd95c110_55471922($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/master_products/views/components/manage_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_stock_control_in_bulk_edit'=>false,'show_bulk_edit_items_product_approval_control'=>false,'show_bulk_edit_actions'=>true,'show_bulk_edit_prices_block_title'=>true,'show_common_products_action_buttons'=>true,'show_list_quantity'=>true,'dispatch'=>"products.master_products",'delete_redirect_url'=>"products.master_products"), 0);?>

<?php }?><?php }} ?>
