<?php /* Smarty version Smarty-3.1.21, created on 2021-06-23 09:50:15
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\store_locator\tab_list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171998281560d2d9a7887f44-09267436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541d7500c5a2bb49a893dfcc94d76eaf4a1da699' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\store_locator\\tab_list_extra_td.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '171998281560d2d9a7887f44-09267436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store' => 0,
    'store_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d2d9a7993c78_50468129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d2d9a7993c78_50468129')) {function content_60d2d9a7993c78_50468129($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.store_type'));
?>
<?php if ($_smarty_tpl->tpl_vars['store']->value) {?>
    <td data-th="<?php echo $_smarty_tpl->__("warehouses.store_type");?>
">
        <span class="row-status">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_types']->value[$_smarty_tpl->tpl_vars['store']->value['store_type']], ENT_QUOTES, 'UTF-8');?>

        </span>
    </td>
<?php }?>
<?php }} ?>
