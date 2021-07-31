<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 06:50:10
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\reward_points\hooks\order_management\totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109658061460b1b9f2e8e5b3-22213014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41782ff1678b9f8f956460d173a66c6a3adbca2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\reward_points\\hooks\\order_management\\totals.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109658061460b1b9f2e8e5b3-22213014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b1b9f2ea7821_77308952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b1b9f2ea7821_77308952')) {function content_60b1b9f2ea7821_77308952($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points','points_in_use','points_lowercase','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points");?>
:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {?>
    <tr>
        <td class="nowrap"><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)&nbsp;<a class="cm-post" href="<?php echo htmlspecialchars(fn_url("order_management.delete_points_in_use"), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-trash" title="<?php echo $_smarty_tpl->__("delete");?>
"></i></a>:</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }} ?>
