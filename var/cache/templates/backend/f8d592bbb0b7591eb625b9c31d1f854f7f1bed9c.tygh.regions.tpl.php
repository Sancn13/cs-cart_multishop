<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:23:27
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\components\regions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42444927360bc319f0d6158-44117908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d592bbb0b7591eb625b9c31d1f854f7f1bed9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\components\\regions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42444927360bc319f0d6158-44117908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_countries' => 0,
    'all_countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc319f0dcd85_62290879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc319f0dcd85_62290879')) {function content_60bc319f0dcd85_62290879($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('countries'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[country_codes]" : $tmp), null, 0);?>

<input type="hidden"
       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
       value=""
/>

<?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'first_data'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0);?>

<?php }} ?>
