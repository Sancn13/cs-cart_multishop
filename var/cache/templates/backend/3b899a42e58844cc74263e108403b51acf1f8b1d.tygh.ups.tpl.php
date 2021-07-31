<?php /* Smarty version Smarty-3.1.21, created on 2021-07-26 12:46:36
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\shippings\components\services\ups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199100442060fe847cc905d9-13907292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b899a42e58844cc74263e108403b51acf1f8b1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\shippings\\components\\services\\ups.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '199100442060fe847cc905d9-13907292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'package_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60fe847cd4b4f6_19502693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fe847cd4b4f6_19502693')) {function content_60fe847cd4b4f6_19502693($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ship_ups_access_key','username','password','use_negotiated_rates','shipper_number','test_mode','ship_ups_pickup_type','ship_ups_pickup_type_01','ship_ups_pickup_type_03','ship_ups_pickup_type_06','ship_ups_pickup_type_19','ship_ups_pickup_type_20','tt_views_shippings_components_services_ups_ship_ups_pickup_type','package_type','shippings.ups.package_type.','ship_ups_use_delivery_confirmation','ship_ups_dcist_type','ship_ups_delivery_confirmation','ship_ups_delivery_confirmation_signature','ship_ups_delivery_confirmation_adult_signature','max_box_weight','width','height','length'));
?>
<fieldset>

<div class="control-group">
    <label class="control-label" for="ship_ups_access_key"><?php echo $_smarty_tpl->__("ship_ups_access_key");?>
</label>
    <div class="controls">
    <input id="ship_ups_access_key" type="text" name="shipping_data[service_params][access_key]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['access_key'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="username"><?php echo $_smarty_tpl->__("username");?>
</label>
    <div class="controls">
    <input id="username" type="text" name="shipping_data[service_params][username]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['username'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="password"><?php echo $_smarty_tpl->__("password");?>
</label>
    <div class="controls">
    <input id="password" type="text" name="shipping_data[service_params][password]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['password'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sw_negotiated_rates"><?php echo $_smarty_tpl->__("use_negotiated_rates");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][negotiated_rates]" value="N" />
    <input id="sw_negotiated_rates" type="checkbox" name="shipping_data[service_params][negotiated_rates]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['negotiated_rates']=="Y") {?>checked="checked"<?php }?> class="cm-combination" />
    </div>
</div>

<div id="negotiated_rates" class="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['negotiated_rates']!="Y") {?>hidden<?php }?>">
    <div class="control-group">
        <label class="control-label" for="shipper_number"><?php echo $_smarty_tpl->__("shipper_number");?>
</label>
        <div class="controls">
        <input id="shipper_number" type="text" name="shipping_data[service_params][shipper_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['shipper_number'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="test_mode"><?php echo $_smarty_tpl->__("test_mode");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][test_mode]" value="N" />
    <input id="test_mode" type="checkbox" name="shipping_data[service_params][test_mode]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['test_mode']=="Y") {?>checked="checked"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_ups_pickup_type"><?php echo $_smarty_tpl->__("ship_ups_pickup_type");?>
</label>
    <div class="controls">
        <select id="ship_ups_pickup_type" name="shipping_data[service_params][pickup_type]">
            <option value="01" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['pickup_type']=="01") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_pickup_type_01");?>
</option>
            <option value="03" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['pickup_type']=="03") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_pickup_type_03");?>
</option>
            <option value="06" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['pickup_type']=="06") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_pickup_type_06");?>
</option>
            <option value="19" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['pickup_type']=="19") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_pickup_type_19");?>
</option>
            <option value="20" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['pickup_type']=="20") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_pickup_type_20");?>
</option>
        </select>
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_components_services_ups_ship_ups_pickup_type");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="package_type"><?php echo $_smarty_tpl->__("package_type");?>
</label>
    <div class="controls">
    <select id="package_type" name="shipping_data[service_params][package_type]">
        <?php  $_smarty_tpl->tpl_vars['package_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['package_type']->_loop = false;
 $_from = array("01","02","03","04","21","24","25","30","2a","2b","2c"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['package_type']->key => $_smarty_tpl->tpl_vars['package_type']->value) {
$_smarty_tpl->tpl_vars['package_type']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['package_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']==$_smarty_tpl->tpl_vars['package_type']->value) {?>selected="selected"<?php }?>
            ><?php echo $_smarty_tpl->__("shippings.ups.package_type.".((string)$_smarty_tpl->tpl_vars['package_type']->value));?>
</option>
        <?php } ?>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="sw_delivery_confirmation"><?php echo $_smarty_tpl->__("ship_ups_use_delivery_confirmation");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][delivery_confirmation]" value="N" />
    <input id="sw_delivery_confirmation" type="checkbox" name="shipping_data[service_params][delivery_confirmation]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['delivery_confirmation']=="Y") {?>checked="checked"<?php }?> class="cm-combination" />
    </div>
</div>

<div id="delivery_confirmation" class="control-group <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['delivery_confirmation']!="Y") {?>hidden<?php }?>">
    <label class="control-label" for="dcist_type"><?php echo $_smarty_tpl->__("ship_ups_dcist_type");?>
</label>
    <div class="controls">
    <select id="dcist_type" name="shipping_data[service_params][dcist_type]">
        <option value="1" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['dcist_type']=="1") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_delivery_confirmation");?>
</option>
        <option value="2" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['dcist_type']=="2") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_delivery_confirmation_signature");?>
</option>
        <option value="3" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['dcist_type']=="3") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_ups_delivery_confirmation_adult_signature");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_ups_max_weight"><?php echo $_smarty_tpl->__("max_box_weight");?>
</label>
    <div class="controls">
    <input id="ship_ups_max_weight" type="text" name="shipping_data[service_params][max_weight_of_box]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_params']['max_weight_of_box'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_ups_width"><?php echo $_smarty_tpl->__("width");?>
</label>
    <div class="controls">
    <input id="ship_ups_width" type="text" name="shipping_data[service_params][width]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['width'], ENT_QUOTES, 'UTF-8');?>
"/></div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_ups_height"><?php echo $_smarty_tpl->__("height");?>
</label>
    <div class="controls">
    <input id="ship_ups_height" type="text" name="shipping_data[service_params][height]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['height'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_ups_length"><?php echo $_smarty_tpl->__("length");?>
</label>
    <div class="controls">
    <input id="ship_ups_length" type="text" name="shipping_data[service_params][length]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['length'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

</fieldset><?php }} ?>
