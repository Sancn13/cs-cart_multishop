<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 12:19:13
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\paypal\settings\partial_refund_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26362807060bc9311eaa759-39781948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fab6e13e02d96b1923be97800fec3cd0de1cac4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\paypal\\settings\\partial_refund_action.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '26362807060bc9311eaa759-39781948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'pp_settings' => 0,
    'statuses' => 0,
    'k' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc9311efbd18_04658908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc9311efbd18_04658908')) {function content_60bc9311efbd18_04658908($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('order_status','tt_addons_paypal_settings_partial_refund_action_order_status','addons.paypal.do_not_change','addons.paypal.set_status_to'));
?>
<?php if (fn_allowed_for('ULTIMATE')&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']||fn_allowed_for('MULTIVENDOR')) {?>
    <?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), null, 0);?>

    <div id="text_paypal_partial_refund_action" class="in collapse">
        <div class="control-group">
            <label class="control-label" for="elm_partial_refund">
                <?php echo $_smarty_tpl->__("order_status");?>
:
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_paypal_settings_partial_refund_action_order_status");?>
</p>
            </label>
            <div class="controls">
                <select name="pp_settings[partial_refund_action]" id="elm_partial_refund">
                    <option value="<?php echo htmlspecialchars((defined('PAYPAL_PARTIAL_REFUND_IGNORE') ? constant('PAYPAL_PARTIAL_REFUND_IGNORE') : null), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['pp_settings']->value['partial_refund_action']==((string)(defined('PAYPAL_PARTIAL_REFUND_IGNORE') ? constant('PAYPAL_PARTIAL_REFUND_IGNORE') : null))) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("addons.paypal.do_not_change");?>
</option>
                    <optgroup label="<?php echo $_smarty_tpl->__("addons.paypal.set_status_to");?>
">
                        <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['pp_settings']->value['partial_refund_action']==$_smarty_tpl->tpl_vars['k']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
<?php }?><?php }} ?>
