<?php /* Smarty version Smarty-3.1.21, created on 2021-06-05 06:08:54
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\gift_certificates\hooks\cart\products_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138740214360baeac6d44ff2-66777007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9196bbea7c90626ed51f798cbfebc921dab4e8d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\cart\\products_list.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '138740214360baeac6d44ff2-66777007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60baeac6d80ca2_31087639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60baeac6d80ca2_31087639')) {function content_60baeac6d80ca2_31087639($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['item_type']=="G") {?>
    <?php echo $_smarty_tpl->__("gift_certificate");?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['item_type']=="C") {?>
    <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
<?php }?><?php }} ?>
