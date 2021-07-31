<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 03:38:00
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\wishlist\hooks\cart\cart_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101954668960b2de68819541-05692530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27e66fc1f71b984a807f4c27c28e7b131eb09ac9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\wishlist\\hooks\\cart\\cart_content.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101954668960b2de68819541-05692530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b2de6884ecc5_13560561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b2de6884ecc5_13560561')) {function content_60b2de6884ecc5_13560561($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('wishlist_short'));
?>
<?php if ($_smarty_tpl->tpl_vars['customer']->value['wishlist_products']) {?>
    <div class="muted"><?php echo $_smarty_tpl->__("wishlist_short");?>
: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['customer']->value['wishlist_products'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
</div>
<?php }?><?php }} ?>
