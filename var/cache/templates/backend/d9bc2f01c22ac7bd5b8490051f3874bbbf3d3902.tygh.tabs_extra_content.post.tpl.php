<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:45:54
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\payments_by_country\hooks\payments\tabs_extra_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199262298460b30a7255be43-46545486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9bc2f01c22ac7bd5b8490051f3874bbbf3d3902' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\payments_by_country\\hooks\\payments\\tabs_extra_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '199262298460b30a7255be43-46545486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'payment' => 0,
    'input_name' => 0,
    'selected_countries' => 0,
    'all_countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b30a72586328_20390603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b30a72586328_20390603')) {function content_60b30a72586328_20390603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('payments_by_country.show_payment_method_in_selected_countries','payments_by_country.hide_payment_method_in_selected_countries'));
?>
<div id="content_tab_payments_by_country_countries_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <select name="payment_data[country_selection_mode]" class="input-full">
        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\PaymentsByCountry\\CountrySelectionMode::SHOW"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['country_selection_mode']==smarty_modifier_enum("Addons\\PaymentsByCountry\\CountrySelectionMode::SHOW")) {?>selected<?php }?>><?php echo $_smarty_tpl->__("payments_by_country.show_payment_method_in_selected_countries");?>
</option>
        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\PaymentsByCountry\\CountrySelectionMode::HIDE"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['payment']->value['country_selection_mode']==smarty_modifier_enum("Addons\\PaymentsByCountry\\CountrySelectionMode::HIDE")||$_smarty_tpl->tpl_vars['id']->value==0) {?>selected<?php }?>><?php echo $_smarty_tpl->__("payments_by_country.hide_payment_method_in_selected_countries");?>
</option>
    </select>
    <?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable("payment_data[country_codes]", null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'','first_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'first_data'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'second_name'=>"all_countries_".((string)$_smarty_tpl->tpl_vars['id']->value),'second_data'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0);?>

    <!--content_tab_payments_by_country_countries_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
-->
</div>
<?php }} ?>
