<?php /* Smarty version Smarty-3.1.21, created on 2021-06-24 10:42:59
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\product_features\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50658456460d43783b14769-79362254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f1222be6aa6a28b1a8693bb13bd4c85fa9078de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\product_features\\components\\picker\\item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '50658456460d43783b14769-79362254',
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
  'unifunc' => 'content_60d43783b3f3c8_57444185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d43783b3f3c8_57444185')) {function content_60d43783b3f3c8_57444185($_smarty_tpl) {?><div class="object-picker__results-label object-picker__features-results-label object-picker__results-label--new">
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
        <div class="object-picker__results-label-icon-wrapper object-picker__features-results-label-icon-wrapper object-picker__results-label-icon-wrapper--new">
            <i class="object-picker__results-label-icon object-picker__features-results-label-icon object-picker__results-label-icon--new <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? "icon-plus-sign" : $tmp), ENT_QUOTES, 'UTF-8');?>
"></i>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
        <div class="object-picker__results-label-prefix object-picker__features-results-label-prefix object-picker__results-label-prefix object-picker__features-results-label-prefix--new">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
    <div class="object-picker__results-label-body object-picker__features-results-label-body object-picker__results-label-body--new">
        ${data.name}
    </div>
    <?php if ($_smarty_tpl->tpl_vars['title_post']->value) {?>
        <div class="object-picker__results-label-suffix object-picker__features-results-label-suffix object-picker__results-label-suffix--new">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
</div><?php }} ?>
