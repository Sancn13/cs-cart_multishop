<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:29
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\product_options\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75509279560af5cdd46a751-42735472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00247973624e9d9fd83118a64f328ebe35233344' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\product_options\\components\\picker\\item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75509279560af5cdd46a751-42735472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cdd4bfb50_25051250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cdd4bfb50_25051250')) {function content_60af5cdd4bfb50_25051250($_smarty_tpl) {?><div class="object-picker__results-label object-picker__options-results-label object-picker__results-label--new">
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
        <div class="object-picker__results-label-icon-wrapper object-picker__options-results-label-icon-wrapper object-picker__results-label-icon-wrapper--new">
            <i class="object-picker__results-label-icon object-picker__options-results-label-icon object-picker__results-label-icon--new <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? "icon-plus-sign" : $tmp), ENT_QUOTES, 'UTF-8');?>
"></i>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
        <div class="object-picker__results-label-prefix object-picker__options-results-label-prefix object-picker__results-label-prefix object-picker__options-results-label-prefix--new">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
    <div class="object-picker__results-label-body object-picker__options-results-label-body object-picker__results-label-body--new">
        ${data.name}
    </div>
    <?php if ($_smarty_tpl->tpl_vars['title_post']->value) {?>
        <div class="object-picker__results-label-suffix object-picker__options-results-label-suffix object-picker__results-label-suffix--new">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
</div><?php }} ?>
