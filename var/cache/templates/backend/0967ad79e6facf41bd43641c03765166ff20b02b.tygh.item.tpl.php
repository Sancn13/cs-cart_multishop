<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 06:50:10
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\products\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189174149860b1b9f24248d7-42421304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0967ad79e6facf41bd43641c03765166ff20b02b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\products\\components\\picker\\item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189174149860b1b9f24248d7-42421304',
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
  'unifunc' => 'content_60b1b9f2427c87_08895008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b1b9f2427c87_08895008')) {function content_60b1b9f2427c87_08895008($_smarty_tpl) {?>
    ${data.image && data.image.image_path
    ? `<img src="${data.image.image_path}" width="30" height="30" alt="${data.image.alt}" class="object-picker__products-image"/>`
        : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: 30px; height: 30px;"> <i class="glyph-image"></i></div>`
    }

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <div class="object-picker__products-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
