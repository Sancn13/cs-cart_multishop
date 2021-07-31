<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:08:55
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4659965760acccb7f3e3d0-15984190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70898b4dafdc217c68b559e66cce27722b449084' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\components\\picker\\item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4659965760acccb7f3e3d0-15984190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acccb7f417f0_42290378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acccb7f417f0_42290378')) {function content_60acccb7f417f0_42290378($_smarty_tpl) {?><div class="object-picker__storefronts-main">
    <div class="object-picker__storefronts-name">
        <div class="object-picker__storefronts-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
