<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:47:06
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\hooks\companies\list_extra_th.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97100857860af4e7a6bc832-42875410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eeb28ff08c85930a767561f7cee4a65aa42e51a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\hooks\\companies\\list_extra_th.post.tpl',
      1 => 1618544564,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '97100857860af4e7a6bc832-42875410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af4e7a6f16f7_03889223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af4e7a6f16f7_03889223')) {function content_60af4e7a6f16f7_03889223($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.absolute_vendor_rating'));
?>
<th width="16%">
    <a class="cm-ajax"
       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=absolute_vendor_rating&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
       data-ca-target-id="pagination_contents"
    >
        <?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating");?>

        <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="absolute_vendor_rating") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
    </a>
</th>
<?php }} ?>
