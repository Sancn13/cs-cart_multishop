<?php /* Smarty version Smarty-3.1.21, created on 2021-07-06 13:38:42
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_debt_payout\views\vendor_debt_payout\components\refill_balance_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6775213260e432b28a9a27-32978049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bdb1decb174346cf73d6052b80cd8f68181e31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_debt_payout\\views\\vendor_debt_payout\\components\\refill_balance_button.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6775213260e432b28a9a27-32978049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60e432b28c31a3_54976530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e432b28c31a3_54976530')) {function content_60e432b28c31a3_54976530($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
?>
<?php ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_tmp1));?>
<?php }} ?>
