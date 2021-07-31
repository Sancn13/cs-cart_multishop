<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 07:00:25
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\paypal\views\payments\components\cc_processors\paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128801487260b30dd9077e34-44055072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977101a512e8cfaa3002787c8a6ad29cd9f04589' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\paypal\\views\\payments\\components\\cc_processors\\paypal.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '128801487260b30dd9077e34-44055072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'paypal_currencies' => 0,
    'currency' => 0,
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b30dd91287f1_20299644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b30dd91287f1_20299644')) {function content_60b30dd91287f1_20299644($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('paypal.addon_is_disabled_notice','currency','order_prefix','addons.paypal.status_for_new_orders','open','incompleted','ttc_addons.paypal.status_for_new_orders','addons.paypal.status_for_new_orders.open','addons.paypal.status_for_new_orders.incomplete','addons.paypal.technical_details','account','paypal_item_name','test_live_mode','test','live'));
?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['paypal']['status']=="D") {?>
    <div class="alert alert-block">
	<p><?php echo $_smarty_tpl->__("paypal.addon_is_disabled_notice");?>
</p>
    </div>
<?php } else { ?>

<div class="control-group">
    <label class="control-label" for="currency"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paypal_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['code'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['currency']->value['active']) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']==$_smarty_tpl->tpl_vars['currency']->value['code']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_new_order_status"><?php echo $_smarty_tpl->__("addons.paypal.status_for_new_orders");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][new_order_status]" id="elm_new_order_status">
            <option value="O" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['new_order_status']=="O") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("open");?>
</option>
            <option value="<?php echo htmlspecialchars((defined('STATUS_INCOMPLETED_ORDER') ? constant('STATUS_INCOMPLETED_ORDER') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['new_order_status']==(defined('STATUS_INCOMPLETED_ORDER') ? constant('STATUS_INCOMPLETED_ORDER') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("incompleted");?>
</option>
        </select>
        <p class="muted description"><?php echo $_smarty_tpl->__("ttc_addons.paypal.status_for_new_orders");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label"></label>
    <div class="controls">
        <p id="txt_new_order_status_open"
           class="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['new_order_status']!='') {?>hidden<?php }?>"
        ><?php echo $_smarty_tpl->__("addons.paypal.status_for_new_orders.open");?>
</p>
        <p id="txt_new_order_status_incomplete"
           class="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['new_order_status']!=(defined('STATUS_INCOMPLETED_ORDER') ? constant('STATUS_INCOMPLETED_ORDER') : null)) {?>hidden<?php }?>"
        ><?php echo $_smarty_tpl->__("addons.paypal.status_for_new_orders.incomplete");?>
</p>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.paypal.technical_details"),'target'=>"#section_technical_details"), 0);?>


<div id="section_technical_details">

    <div class="control-group">
        <label class="control-label" for="account"><?php echo $_smarty_tpl->__("account");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][account]" id="account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['account'], ENT_QUOTES, 'UTF-8');?>
" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="item_name"><?php echo $_smarty_tpl->__("paypal_item_name");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][item_name]" id="item_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['item_name'], ENT_QUOTES, 'UTF-8');?>
" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="mode"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][mode]" id="mode">
                <option value="test" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="test") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
                <option value="live" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="live") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
            </select>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function(_, $) {
        $('#elm_new_order_status').change(function() {
            $('#txt_new_order_status_open,#txt_new_order_status_incomplete').toggleClass('hidden');
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
