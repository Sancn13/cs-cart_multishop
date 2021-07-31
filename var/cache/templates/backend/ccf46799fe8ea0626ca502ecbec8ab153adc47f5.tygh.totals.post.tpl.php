<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 06:50:10
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\gift_certificates\hooks\order_management\totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210695991560b1b9f2d61b11-28406781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf46799fe8ea0626ca502ecbec8ab153adc47f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\order_management\\totals.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '210695991560b1b9f2d61b11-28406781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'ugc' => 0,
    'ugc_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b1b9f2d6f074_54208162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b1b9f2d6f074_54208162')) {function content_60b1b9f2d6f074_54208162($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']) {?>
<input type="hidden" name="cert_code" value="" />
    <tr>
        <td class="right muted strong"><?php echo $_smarty_tpl->__("gift_certificate");?>
:</td>
        <td class="right">&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars["ugc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ugc"]->_loop = false;
 $_smarty_tpl->tpl_vars["ugc_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ugc"]->key => $_smarty_tpl->tpl_vars["ugc"]->value) {
$_smarty_tpl->tpl_vars["ugc"]->_loop = true;
 $_smarty_tpl->tpl_vars["ugc_key"]->value = $_smarty_tpl->tpl_vars["ugc"]->key;
?>
    <tr>
        <td class="right nowrap">
            <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['ugc']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ugc_key']->value, ENT_QUOTES, 'UTF-8');?>
</a>
            <a href="<?php echo htmlspecialchars(fn_url("order_management.delete_use_certificate?gift_cert_code=".((string)$_smarty_tpl->tpl_vars['ugc_key']->value)), ENT_QUOTES, 'UTF-8');?>
" class="icon-trash cm-tooltip cm-post" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>:
        </td>
        <td class="right text-success">-<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['ugc']->value['cost']), 0);?>
</td>
    </tr>
<?php } ?>
<?php }?><?php }} ?>
