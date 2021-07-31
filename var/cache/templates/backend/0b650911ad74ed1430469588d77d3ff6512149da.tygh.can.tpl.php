<?php /* Smarty version Smarty-3.1.21, created on 2021-06-13 12:26:04
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\shippings\components\services\can.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195578988560c5cf2cd0ab71-87570007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b650911ad74ed1430469588d77d3ff6512149da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\shippings\\components\\services\\can.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195578988560c5cf2cd0ab71-87570007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c5cf2cdaf613_70853032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c5cf2cdaf613_70853032')) {function content_60c5cf2cdaf613_70853032($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shippings.can.api_keys','shippings.can.username','shippings.can.password','test_mode','shippings.can.business_account_information','shippings.can.customer_number','ttc_shippings.can.customer_number','shippings.can.contract_id','ttc_shippings.can.contract_id','shippings.can.options','shippings.can.option_so','shippings.can.option_cov','ttc_shippings.can.option_cov','shippings.can.option_cov_amount','shippings.can.option_cod','shippings.can.option_pa18','shippings.can.option_pa19','shippings.can.option_hfp','shippings.can.option_dns','shippings.can.option_lad'));
?>
<?php ob_start();
echo $_smarty_tpl->__("shippings.can.api_keys");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1), 0);?>

<fieldset>
    <div class="control-group">
        <label class="control-label cm-required" for="elm_shipping_can_username"><?php echo $_smarty_tpl->__("shippings.can.username");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_username" type="text" name="shipping_data[service_params][username]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['username'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label cm-required" for="elm_shipping_can_password"><?php echo $_smarty_tpl->__("shippings.can.password");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_password" type="text" name="shipping_data[service_params][password]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['password'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_test_mode"><?php echo $_smarty_tpl->__("test_mode");?>
</label>
        <div class="controls">
            <input type="hidden" name="shipping_data[service_params][test_mode]" value="N" />
            <input id="elm_shipping_can_test_mode" type="checkbox" name="shipping_data[service_params][test_mode]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['test_mode']=="Y") {?>checked="checked"<?php }?> />
        </div>
    </div>
</fieldset>

<?php ob_start();
echo $_smarty_tpl->__("shippings.can.business_account_information");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp2), 0);?>

<fieldset>
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_customer_number"><?php echo $_smarty_tpl->__("shippings.can.customer_number");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_customer_number" type="text" name="shipping_data[service_params][customer_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['customer_number'], ENT_QUOTES, 'UTF-8');?>
" />
            <p class="muted description"><?php echo $_smarty_tpl->__("ttc_shippings.can.customer_number");?>
</p>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_contract_id"><?php echo $_smarty_tpl->__("shippings.can.contract_id");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_contract_id" type="text" name="shipping_data[service_params][contract_id]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['contract_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <p class="muted description"><?php echo $_smarty_tpl->__("ttc_shippings.can.contract_id");?>
</p>
        </div>
    </div>
</fieldset>

<?php ob_start();
echo $_smarty_tpl->__("shippings.can.options");
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp3), 0);?>

<fieldset>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_so"><?php echo $_smarty_tpl->__("shippings.can.option_so");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_so" type="checkbox" name="shipping_data[service_params][options][so]" value="so" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['so']) {?>checked="checked"<?php }?> />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_cov"><?php echo $_smarty_tpl->__("shippings.can.option_cov");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_cov" type="checkbox" name="shipping_data[service_params][options][cov]" value="cov" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['cov']) {?>checked="checked"<?php }?> />
            <p class="muted description"><?php echo $_smarty_tpl->__("ttc_shippings.can.option_cov");?>
</p>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_cov_amount"><?php echo $_smarty_tpl->__("shippings.can.option_cov_amount");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_cov_amount" type="text" name="shipping_data[service_params][options][cov_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['cov_amount'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_cod"><?php echo $_smarty_tpl->__("shippings.can.option_cod");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_cod" type="checkbox" name="shipping_data[service_params][options][cod]" value="cod" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['cod']) {?>checked="checked"<?php }?> />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_pa18"><?php echo $_smarty_tpl->__("shippings.can.option_pa18");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_pa18" type="checkbox" name="shipping_data[service_params][options][pa18]" value="pa18" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['pa18']) {?>checked="checked"<?php }?> />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_pa19"><?php echo $_smarty_tpl->__("shippings.can.option_pa19");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_pa19" type="checkbox" name="shipping_data[service_params][options][pa19]" value="pa19" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['pa19']) {?>checked="checked"<?php }?> />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_hfp"><?php echo $_smarty_tpl->__("shippings.can.option_hfp");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_hfp" type="checkbox" name="shipping_data[service_params][options][hfp]" value="hfp" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['hfp']) {?>checked="checked"<?php }?> />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_dns"><?php echo $_smarty_tpl->__("shippings.can.option_dns");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_dns" type="checkbox" name="shipping_data[service_params][options][dns]" value="dns" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['dns']) {?>checked="checked"<?php }?> />
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="elm_shipping_can_option_lad"><?php echo $_smarty_tpl->__("shippings.can.option_lad");?>
</label>
        <div class="controls">
            <input id="elm_shipping_can_option_lad" type="checkbox" name="shipping_data[service_params][options][lad]" value="lad" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options']['lad']) {?>checked="checked"<?php }?> />
        </div>
    </div>
</fieldset><?php }} ?>
