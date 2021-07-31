<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:40:28
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\store_locator\stores_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39186338260bf2cfc437020-73420911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84911d784d49893cccd5cb67a269ff9bf2ffbcb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\store_locator\\stores_list.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39186338260bf2cfc437020-73420911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loc' => 0,
    'store_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2cfc467123_08486487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2cfc467123_08486487')) {function content_60bf2cfc467123_08486487($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.store_type'));
?>
<td data-th="<?php echo $_smarty_tpl->__("warehouses.store_type");?>
">
    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_type'], ENT_QUOTES, 'UTF-8');?>
" name="store_locators[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][store_type]"/>
    <span class="row-status">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_types']->value[$_smarty_tpl->tpl_vars['loc']->value['store_type']], ENT_QUOTES, 'UTF-8');?>

    </span>
</td>
<?php }} ?>
