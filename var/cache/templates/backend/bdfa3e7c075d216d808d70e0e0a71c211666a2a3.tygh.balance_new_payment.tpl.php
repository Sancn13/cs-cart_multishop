<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 04:14:51
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\companies\components\balance_new_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205582944560bc218b2ebcd9-58554934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdfa3e7c075d216d808d70e0e0a71c211666a2a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\companies\\components\\balance_new_payment.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '205582944560bc218b2ebcd9-58554934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc218b2f7eb9_53929162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc218b2f7eb9_53929162')) {function content_60bc218b2f7eb9_53929162($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('payment_amount','comments','notify_vendor'));
?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="new_payout_form">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"payment[vendor]",'id'=>"p_vendor",'selected'=>$_REQUEST['vendor']), 0);?>


<div class="control-group">
    <label class="cm-required control-label" for="payment_amount"><?php echo $_smarty_tpl->__("payment_amount");?>
</label>
    <div class="controls">
        <input type="text" class="cm-numeric" name="payment[amount]" id="payment_amount" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="payment_comments"><?php echo $_smarty_tpl->__("comments");?>
</label>
    <div class="controls">
    <textarea class="span9" rows="8" cols="55" name="payment[comments]" id="payment_comments"
    ></textarea></div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <div class="control-group">
        <label for="" class="control-label">&nbsp;</label>
        <div class="controls cm-toggle-button">
            <div class="select-field notify-customer">
                <label class="checkbox" for="notify_user">
                    <input type="checkbox"
                           name="payment[notify_user]"
                           id="notify_user"
                           value="Y"
                    />
                    <?php echo $_smarty_tpl->__("notify_vendor");?>

                </label>
            </div>
        </div>
    </div>
<?php }?>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[companies.payouts_add]",'cancel_action'=>"close"), 0);?>

</div>

</form><?php }} ?>
