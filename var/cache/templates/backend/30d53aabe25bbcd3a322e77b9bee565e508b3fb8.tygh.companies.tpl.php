<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:23:27
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\components\companies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70664799960bc319f1b2399-77172221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d53aabe25bbcd3a322e77b9bee565e508b3fb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\components\\companies.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '70664799960bc319f1b2399-77172221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc319f1ba336_59359922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc319f1ba336_59359922')) {function content_60bc319f1ba336_59359922($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_companies'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[company_ids]" : $tmp), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['selected_companies']->value,'view_mode'=>"list",'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'checkbox_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'no_item_text'=>$_smarty_tpl->__("all_companies")), 0);?>


<?php }} ?>
