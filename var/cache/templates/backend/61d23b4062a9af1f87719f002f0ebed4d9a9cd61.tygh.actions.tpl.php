<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:32:26
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\taxes\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192706556960adc14adbdc38-77577203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d23b4062a9af1f87719f002f0ebed4d9a9cd61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\taxes\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '192706556960adc14adbdc38-77577203',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc14adfcc77_31736687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc14adfcc77_31736687')) {function content_60adc14adfcc77_31736687($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('apply_tax_to_products','unset_tax_to_products'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"taxes:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"taxes:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("apply_tax_to_products"),'dispatch'=>"dispatch[taxes.apply_selected_taxes]",'form'=>"taxes_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("unset_tax_to_products"),'dispatch'=>"dispatch[taxes.unset_selected_taxes]",'form'=>"taxes_form"));?>

    </li>
    
    <li class="divider"></li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[taxes.m_delete]",'form'=>"taxes_form"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"taxes:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
