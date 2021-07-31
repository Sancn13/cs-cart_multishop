<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:48:02
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_debt_payout\hooks\index\alert_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112666927060acd5e249aca5-79995192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e482728d76164805bb5c56d64942931f138351bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\index\\alert_block.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112666927060acd5e249aca5-79995192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_alert' => 0,
    'is_block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd5e24ca661_40232165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd5e24ca661_40232165')) {function content_60acd5e24ca661_40232165($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }?><?php }} ?>
