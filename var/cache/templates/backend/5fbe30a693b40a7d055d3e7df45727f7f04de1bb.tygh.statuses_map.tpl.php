<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 12:19:13
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\paypal\settings\statuses_map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153037572060bc9311897e93-64593222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbe30a693b40a7d055d3e7df45727f7f04de1bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\paypal\\settings\\statuses_map.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '153037572060bc9311897e93-64593222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'statuses' => 0,
    'k' => 0,
    'pp_settings' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc93119d5714_06143620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc93119d5714_06143620')) {function content_60bc93119d5714_06143620($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('refunded','completed','pending','canceled_reversal','created','denied','expired','reversed','processed','voided','failed'));
?>
<?php if (fn_allowed_for('ULTIMATE')&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']||fn_allowed_for('MULTIVENDOR')) {?>
<div id="text_paypal_status_map" class="in collapse">
    <p><?php echo $_smarty_tpl->__('paypal_ipn_note');?>
</p>
    <div class="control-group">
        <strong class="control-label"><?php echo $_smarty_tpl->__('paypal_ipn_transaction_status');?>
</strong>
        <div class="controls">
            <strong style="float: left; padding-top: 5px;"><?php echo $_smarty_tpl->__('order_status');?>
</strong>
        </div>
    </div>
    <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), null, 0);?>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_refunded"><?php echo $_smarty_tpl->__("refunded");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][refunded]" id="elm_paypal_refunded">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['refunded'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['refunded']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['refunded'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_completed"><?php echo $_smarty_tpl->__("completed");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][completed]" id="elm_paypal_completed">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['completed'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['completed']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['completed'])&&$_smarty_tpl->tpl_vars['k']->value=='P')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_pending"><?php echo $_smarty_tpl->__("pending");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][pending]" id="elm_paypal_pending">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['pending'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['pending']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['pending'])&&$_smarty_tpl->tpl_vars['k']->value=='O')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_canceled_reversal"><?php echo $_smarty_tpl->__("canceled_reversal");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][canceled_reversal]" id="elm_paypal_canceled_reversal">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['canceled_reversal'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['canceled_reversal']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['canceled_reversal'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_created"><?php echo $_smarty_tpl->__("created");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][created]" id="elm_paypal_created">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['created'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['created']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['created'])&&$_smarty_tpl->tpl_vars['k']->value=='O')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_denied"><?php echo $_smarty_tpl->__("denied");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][denied]" id="elm_paypal_denied">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['denied'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['denied']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['denied'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_expired"><?php echo $_smarty_tpl->__("expired");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][expired]" id="elm_paypal_expired">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['expired'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['expired']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['expired'])&&$_smarty_tpl->tpl_vars['k']->value=='F')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_reversed"><?php echo $_smarty_tpl->__("reversed");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][reversed]" id="elm_paypal_reversed">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['reversed'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['reversed']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['reversed'])&&$_smarty_tpl->tpl_vars['k']->value=='I')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_processed"><?php echo $_smarty_tpl->__("processed");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][processed]" id="elm_paypal_processed">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['processed'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['processed']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['processed'])&&$_smarty_tpl->tpl_vars['k']->value=='P')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_voided"><?php echo $_smarty_tpl->__("voided");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][voided]" id="elm_paypal_voided">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['voided'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['voided']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['voided'])&&$_smarty_tpl->tpl_vars['k']->value=='P')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_paypal_failed"><?php echo $_smarty_tpl->__("failed");?>
:</label>
        <div class="controls">
            <select name="pp_settings[pp_statuses][failed]" id="elm_paypal_failed">
                <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['failed'])&&$_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['failed']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['pp_settings']->value['pp_statuses']['failed'])&&$_smarty_tpl->tpl_vars['k']->value=='F')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<?php }?><?php }} ?>
