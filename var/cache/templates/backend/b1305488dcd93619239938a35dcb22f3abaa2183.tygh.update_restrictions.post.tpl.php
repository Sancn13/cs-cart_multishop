<?php /* Smarty version Smarty-3.1.21, created on 2021-06-19 12:59:08
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_debt_payout\hooks\vendor_plans\update_restrictions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173665137660cdbfec0dc6e3-45037114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1305488dcd93619239938a35dcb22f3abaa2183' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\vendor_plans\\update_restrictions.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173665137660cdbfec0dc6e3-45037114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'primary_currency' => 0,
    'currencies' => 0,
    'addons' => 0,
    'id' => 0,
    'plan' => 0,
    'lowers_allowed_balance_attributes' => 0,
    'grace_period_to_refill_balance_attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cdbfec1496b0_22912528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdbfec1496b0_22912528')) {function content_60cdbfec1496b0_22912528($_smarty_tpl) {?><?php if (!is_callable('smarty_block_component')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.component.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.day_or_days','vendor_debt_payout.actions_on_suspended','vendor_debt_payout.lowest_allowed_balance','vendor_debt_payout.grace_period_to_refill_balance','vendor_debt_payout.lowest_allowed_balance_info_text'));
?>
<?php ob_start();?><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes'] = new Smarty_variable(array("data-a-sign"=>$_tmp1,"data-a-dec"=>".","data-a-sep"=>","), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after']=="Y") {?>
    <?php $_smarty_tpl->createLocalArrayVariable('lowers_allowed_balance_attributes', null, 0);
$_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value["data-p-sign"] = "s";?>
<?php }?>

<?php ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.day_or_days");
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['grace_period_to_refill_balance_attributes'] = new Smarty_variable(array("size"=>"4","data-a-sign"=>" ".$_tmp2,"data-m-dec"=>"0","data-a-sep"=>",","data-p-sign"=>"s"), null, 0);?>

<?php if (!isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_lowers_allowed_balance'])||!isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_grace_period_to_refill_balance'])) {?>

    <h4 class="subheader hand" data-toggle="collapse" data-target="#collapsable_addon_option_vendor_debt_payout_actions_on_suspended">
        <?php echo $_smarty_tpl->__("vendor_debt_payout.actions_on_suspended");?>

        <span class="exicon-collapse"></span></h4>
    <div id="collapsable_addon_option_vendor_debt_payout_actions_on_suspended" class="in collapse">
        <fieldset>
            <?php if (!isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_lowers_allowed_balance'])) {?>
                <div class="control-group">
                    <label class="control-label" for="elm_lowers_allowed_balance_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_debt_payout.lowest_allowed_balance");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"vendor_debt_payout.select_lowers_allowed_balance",'value'=>(($tmp = @$_smarty_tpl->tpl_vars['plan']->value['lowers_allowed_balance'])===null||$tmp==='' ? "default" : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value)); $_block_repeat=true; echo smarty_block_component(array('name'=>"vendor_debt_payout.select_lowers_allowed_balance",'value'=>(($tmp = @$_smarty_tpl->tpl_vars['plan']->value['lowers_allowed_balance'])===null||$tmp==='' ? "default" : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"vendor_debt_payout.select_lowers_allowed_balance",'value'=>(($tmp = @$_smarty_tpl->tpl_vars['plan']->value['lowers_allowed_balance'])===null||$tmp==='' ? "default" : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['lowers_allowed_balance_attributes']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
            <?php }?>
            <?php if (!isset($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['global_grace_period_to_refill_balance'])) {?>
                <div class="control-group">
                    <label class="control-label" for="elm_lowers_allowed_balance_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_debt_payout.grace_period_to_refill_balance");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('component', array('name'=>"vendor_debt_payout.select_grace_period_to_refill_balance",'value'=>(($tmp = @$_smarty_tpl->tpl_vars['plan']->value['grace_period_to_refill_balance'])===null||$tmp==='' ? "default" : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['grace_period_to_refill_balance_attributes']->value)); $_block_repeat=true; echo smarty_block_component(array('name'=>"vendor_debt_payout.select_grace_period_to_refill_balance",'value'=>(($tmp = @$_smarty_tpl->tpl_vars['plan']->value['grace_period_to_refill_balance'])===null||$tmp==='' ? "default" : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['grace_period_to_refill_balance_attributes']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_component(array('name'=>"vendor_debt_payout.select_grace_period_to_refill_balance",'value'=>(($tmp = @$_smarty_tpl->tpl_vars['plan']->value['grace_period_to_refill_balance'])===null||$tmp==='' ? "default" : $tmp),'custom_input_styles'=>"cm-numeric",'custom_input_attributes'=>$_smarty_tpl->tpl_vars['grace_period_to_refill_balance_attributes']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
            <?php }?>
            <div class="well well-small"><?php echo $_smarty_tpl->__("vendor_debt_payout.lowest_allowed_balance_info_text",array("[link]"=>fn_url("addons.manage#groupvendor_debt_payout")));?>
</div>
        </fieldset>
    </div>
<?php }?><?php }} ?>
