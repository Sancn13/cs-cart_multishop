<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:45:53
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\payments_by_country\hooks\payments\tabs_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122746932160b30a71efb344-50662277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5649b205c34cd069e82367ab61f45564e1cca364' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\payments_by_country\\hooks\\payments\\tabs_list.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122746932160b30a71efb344-50662277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b30a72020889_66260789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b30a72020889_66260789')) {function content_60b30a72020889_66260789($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('countries'));
?>
<li id="tab_payments_by_country_countries_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("countries");?>
</a></li><?php }} ?>
