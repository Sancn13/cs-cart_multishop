<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:01
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_data_premoderation\hooks\products\status_select_item.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80910534560af5cc193e988-89373643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3068e762ac0aa33c3e22928d9225ac4bdb185a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\status_select_item.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '80910534560af5cc193e988-89373643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_id' => 0,
    'runtime' => 0,
    'product' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cc198e826_87125371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cc198e826_87125371')) {function content_60af5cc198e826_87125371($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['status_id']->value===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <a data-ca-target-id="disapproval_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
       class="cm-dialog-opener cm-dialog-auto-height status-link-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['status']===$_smarty_tpl->tpl_vars['status_id']->value) {?>active<?php }?>"
       onclick="if (Tygh.$(this).parent().hasClass('disabled')) { Tygh.$(this).removeClass('cm-dialog-opener'); return false} else { Tygh.$(this).addClass('cm-dialog-opener'); }"
    >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>

    </a>
<?php }?>
<?php }} ?>
