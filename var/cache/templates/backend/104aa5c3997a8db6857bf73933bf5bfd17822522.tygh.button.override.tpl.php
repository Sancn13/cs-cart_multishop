<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:13:41
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\gift_certificates\hooks\statuses\button.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113652460260b302e51d5ac8-84314918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '104aa5c3997a8db6857bf73933bf5bfd17822522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\statuses\\button.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113652460260b302e51d5ac8-84314918',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b302e51dab55_93587272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b302e51dab55_93587272')) {function content_60b302e51dab55_93587272($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_gift_certificate'));
?>
<?php if ($_REQUEST['type']=='G') {?>
	<li><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_gift_certificate");?>
</a></li>
<?php }?><?php }} ?>
