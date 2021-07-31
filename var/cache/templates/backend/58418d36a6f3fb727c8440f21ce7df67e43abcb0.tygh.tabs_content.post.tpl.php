<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:34:51
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\store_locator\hooks\shippings\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121827612860acd2cb6af1e4-36027663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58418d36a6f3fb727c8440f21ce7df67e43abcb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\store_locator\\hooks\\shippings\\tabs_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '121827612860acd2cb6af1e4-36027663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_store_locator_configure_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2cb6de6f5_52400560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2cb6de6f5_52400560')) {function content_60acd2cb6de6f5_52400560($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_store_locator_configure_tab']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <input type="hidden"
           data-ca-store-locator-show-configure-tab="true"
    />
<?php }?>
<?php }} ?>
