<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:28:05
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\reward_points\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112060012460adc045874869-76396199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f334c4a2449c0e03806046b11b92cfbf84eb95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\reward_points\\hooks\\orders\\product_info.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112060012460adc045874869-76396199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc04589c5b0_99712687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc04589c5b0_99712687')) {function content_60adc04589c5b0_99712687($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }} ?>
