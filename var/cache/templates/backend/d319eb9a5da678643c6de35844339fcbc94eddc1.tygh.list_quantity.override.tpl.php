<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:00
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\products\list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34998060760af5cc05eea60-79865520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd319eb9a5da678643c6de35844339fcbc94eddc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\products\\list_quantity.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34998060760af5cc05eea60-79865520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cc0628120_90775530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cc0628120_90775530')) {function content_60af5cc0628120_90775530($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['warehouse_amount'])) {?>
    <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['warehouse_amount'], ENT_QUOTES, 'UTF-8');?>
" disabled class="input-full input-hidden" />
<?php }?>
<?php }} ?>
