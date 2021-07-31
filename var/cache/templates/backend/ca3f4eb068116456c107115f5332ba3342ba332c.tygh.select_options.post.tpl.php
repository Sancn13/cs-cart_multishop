<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:06:01
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\reward_points\hooks\products\select_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125423467760b301195ec7b1-36038886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca3f4eb068116456c107115f5332ba3342ba332c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\reward_points\\hooks\\products\\select_options.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125423467760b301195ec7b1-36038886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b301195f2d86_59015077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b301195f2d86_59015077')) {function content_60b301195f2d86_59015077($_smarty_tpl) {?><?php if (floatval($_smarty_tpl->tpl_vars['vr']->value['point_modifier'])) {?>&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/common/point_modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['point_modifier']), 0);
}?><?php }} ?>
