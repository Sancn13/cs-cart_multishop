<?php /* Smarty version Smarty-3.1.21, created on 2021-06-22 05:58:56
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\sales_reports\components\graph_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29705342060d151f0ec7057-03570433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8315bee1d157abad0447f433c736c1ac4317f98d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\sales_reports\\components\\graph_bar.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '29705342060d151f0ec7057-03570433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value_width' => 0,
    'color' => 0,
    'bar_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d151f0f3f978_47338447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d151f0f3f978_47338447')) {function content_60d151f0f3f978_47338447($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cscmultiShop\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php echo smarty_function_math(array('equation'=>"floor(width / 20) + 1",'assign'=>"color",'width'=>$_smarty_tpl->tpl_vars['value_width']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['color']->value>5) {?>
    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("5", null, 0);?>
<?php }?>
<div class="progress" <?php if ($_smarty_tpl->tpl_vars['bar_width']->value) {?> style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bar_width']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?> align="left"><div class="bar" <?php if ($_smarty_tpl->tpl_vars['value_width']->value>0) {?>class="graph-bar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_width']->value, ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div><?php }} ?>
