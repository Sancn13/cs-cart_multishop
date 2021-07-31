<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 06:50:10
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\reward_points\hooks\order_management\totals_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179576364260b1b9f26b2c82-96881131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a34694379e041e1268d05bf5e0e9153d5b7d255' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\reward_points\\hooks\\order_management\\totals_extra.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '179576364260b1b9f26b2c82-96881131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'user_points' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b1b9f26bd764_21372960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b1b9f26bd764_21372960')) {function content_60b1b9f26bd764_21372960($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points_to_use','available','maximum'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_points']->value) {?>
<div class="control-group">
    <label for="points_to_use" class="control-label"><?php echo $_smarty_tpl->__("points_to_use");?>
:</label>
    <div class="controls">
        <input type="text" name="points_to_use" id="points_to_use" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
" />
        <p class="help-block">(<?php echo $_smarty_tpl->__("available");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_points']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("maximum");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'], ENT_QUOTES, 'UTF-8');?>
)</p>
    </div>
</div>
<?php }?><?php }} ?>
