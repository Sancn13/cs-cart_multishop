<?php /* Smarty version Smarty-3.1.21, created on 2021-06-13 12:20:28
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\shippings\components\services\fedex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36559283060c5cddc95fe94-94403324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d975bb0def3401e76bff6fddadce5ec8042d32a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\shippings\\components\\services\\fedex.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36559283060c5cddc95fe94-94403324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'f_package_types' => 0,
    'f_package_type' => 0,
    'f_drop_off_types' => 0,
    'f_drop_off_type' => 0,
    'f_options' => 0,
    'opt_code' => 0,
    'f_cod_collection_types' => 0,
    'f_cod_collection_type' => 0,
    'f_dangerous_goods_options' => 0,
    'f_dangerous_goods_option' => 0,
    'f_dangerous_goods_accessibilities' => 0,
    'f_dangerous_goods_accessibility' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c5cddcc31e66_90871686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c5cddcc31e66_90871686')) {function content_60c5cddcc31e66_90871686($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('authentication_key','authentication_password','account_number','ship_fedex_meter_number','shippings.fedex.freight_account_number','test_mode','package_type','ship_fedex_package_type_','ship_fedex_drop_off_type','ship_fedex_drop_off_type_','max_box_weight','ship_fedex_height','ship_fedex_width','ship_fedex_length','shippings.fedex.options','shippings.fedex.option_','shippings.fedex.option_cod_collection_type_','shippings.fedex.option_dangerous_goods_options_','shippings.fedex.option_dangerous_goods_accessibility_','ship_fedex_smart_post','ship_fedex_indicia','ship_fedex_indicia_presorted_standard','ship_fedex_indicia_parcel_select','ship_fedex_indicia_media_mail','ship_fedex_indicia_presorted_bound_printed_matter','ship_fedex_ancillary_endorsement','none','ship_fedex_ancillary_endorsement_address_correction','ship_fedex_ancillary_endorsement_carrier_leave_if_no_response','ship_fedex_ancillary_endorsement_change_service','ship_fedex_ancillary_endorsement_forwarding_service','ship_fedex_ancillary_endorsement_return_delivery','ship_fedex_special_services','ship_fedex_hub_id','ship_fedex_customer_manifest_id'));
?>
<?php $_smarty_tpl->tpl_vars['f_package_types'] = new Smarty_variable(array("FEDEX_10KG_BOX","FEDEX_25KG_BOX","FEDEX_BOX","FEDEX_ENVELOPE","FEDEX_EXTRA_LARGE_BOX","FEDEX_LARGE_BOX","FEDEX_MEDIUM_BOX","FEDEX_PAK","FEDEX_SMALL_BOX","FEDEX_TUBE","YOUR_PACKAGING"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['f_drop_off_types'] = new Smarty_variable(array("BUSINESS_SERVICE_CENTER","DROP_BOX","REGULAR_PICKUP","REQUEST_COURIER","STATION"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['f_options'] = new Smarty_variable(array("BROKER_SELECT_OPTION","CALL_BEFORE_DELIVERY","COD","COD_AMOUNT","COD_COLLECTION_TYPE","CUSTOM_DELIVERY_WINDOW","DANGEROUS_GOODS","DANGEROUS_GOODS_OPTIONS","DANGEROUS_GOODS_ACCESSIBILITY","DO_NOT_BREAK_DOWN_PALLETS","DO_NOT_STACK_PALLETS","DRY_ICE","EAST_COAST_SPECIAL","ELECTRONIC_TRADE_DOCUMENTS","EXTREME_LENGTH","FOOD","FEDEX_ONE_RATE","FREIGHT_GUARANTEE","FREIGHT_TO_COLLECT","FUTURE_DAY_SHIPMENT","HOLD_AT_LOCATION","HOME_DELIVERY_PREMIUM","INSIDE_DELIVERY","INSIDE_PICKUP","INTERNATIONAL_CONTROLLED_EXPORT_SERVICE","INTERNATIONAL_TRAFFIC_IN_ARMS_REGULATIONS","LIFTGATE_DELIVERY","LIFTGATE_PICKUP","LIMITED_ACCESS_DELIVERY","LIMITED_ACCESS_PICKUP","PHARMACY_DELIVERY","POISON","PROTECTION_FROM_FREEZING","RETURNS_CLEARANCE","SATURDAY_DELIVERY","SATURDAY_PICKUP","TOP_LOAD"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['f_cod_collection_types'] = new Smarty_variable(array("ANY","CASH","GUARANTEED_FUNDS"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['f_dangerous_goods_options'] = new Smarty_variable(array("BATTERY","HAZARDOUS_MATERIALS","ORM_D","LIMITED_QUANTITIES_COMMODITIES","REPORTABLE_QUANTITIES","SMALL_QUANTITY_EXCEPTION"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['f_dangerous_goods_accessibilities'] = new Smarty_variable(array("ACCESSIBLE","INACCESSIBLE"), null, 0);?>

<fieldset>

<div class="control-group">
    <label class="control-label" for="user_key"><?php echo $_smarty_tpl->__("authentication_key");?>
</label>
    <div class="controls">
    <input id="user_key" type="text" name="shipping_data[service_params][user_key]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['user_key'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="user_key_password"><?php echo $_smarty_tpl->__("authentication_password");?>
</label>
    <div class="controls">
    <input id="user_key_password" type="text" name="shipping_data[service_params][user_key_password]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['user_key_password'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="account_number"><?php echo $_smarty_tpl->__("account_number");?>
</label>
    <div class="controls">
    <input id="account_number" type="text" name="shipping_data[service_params][account_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['account_number'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_meter_number"><?php echo $_smarty_tpl->__("ship_fedex_meter_number");?>
</label>
    <div class="controls">
    <input id="ship_fedex_meter_number" type="text" name="shipping_data[service_params][meter_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['meter_number'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_freight_account_number"><?php echo $_smarty_tpl->__("shippings.fedex.freight_account_number");?>
</label>
    <div class="controls">
        <input id="ship_fedex_freight_account_number" type="text" name="shipping_data[service_params][freight_account_number]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['freight_account_number'], ENT_QUOTES, 'UTF-8');?>
" />
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
    <label class="control-label" for="package_type"><?php echo $_smarty_tpl->__("package_type");?>
</label>
    <div class="controls">
    <select id="package_type" name="shipping_data[service_params][package_type]">
        <?php  $_smarty_tpl->tpl_vars['f_package_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_package_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_package_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_package_type']->key => $_smarty_tpl->tpl_vars['f_package_type']->value) {
$_smarty_tpl->tpl_vars['f_package_type']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_package_type']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_type']==$_smarty_tpl->tpl_vars['f_package_type']->value) {?> selected="selected"<?php }?>><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['f_package_type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->__("ship_fedex_package_type_".$_tmp1);?>
</option>
        <?php } ?>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_drop_off_type"><?php echo $_smarty_tpl->__("ship_fedex_drop_off_type");?>
</label>
    <div class="controls">
    <select id="ship_fedex_drop_off_type" name="shipping_data[service_params][drop_off_type]">
        <?php  $_smarty_tpl->tpl_vars['f_drop_off_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_drop_off_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_drop_off_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_drop_off_type']->key => $_smarty_tpl->tpl_vars['f_drop_off_type']->value) {
$_smarty_tpl->tpl_vars['f_drop_off_type']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_drop_off_type']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['drop_off_type']==$_smarty_tpl->tpl_vars['f_drop_off_type']->value) {?> selected="selected"<?php }?>><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['f_drop_off_type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->__("ship_fedex_drop_off_type_".$_tmp2);?>
</option>
        <?php } ?>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="max_weight"><?php echo $_smarty_tpl->__("max_box_weight");?>
</label>
    <div class="controls">
    <input id="max_weight" type="text" name="shipping_data[service_params][max_weight_of_box]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_params']['max_weight_of_box'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_height"><?php echo $_smarty_tpl->__("ship_fedex_height");?>
</label>
    <div class="controls">
    <input id="ship_fedex_height" type="text" name="shipping_data[service_params][height]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['height'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_width"><?php echo $_smarty_tpl->__("ship_fedex_width");?>
</label>
    <div class="controls">
    <input id="ship_fedex_width" type="text" name="shipping_data[service_params][width]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['width'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_length"><?php echo $_smarty_tpl->__("ship_fedex_length");?>
</label>
    <div class="controls">
    <input id="ship_fedex_length" type="text" name="shipping_data[service_params][length]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['length'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("shippings.fedex.options")), 0);?>

<?php  $_smarty_tpl->tpl_vars['opt_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt_code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt_code']->key => $_smarty_tpl->tpl_vars['opt_code']->value) {
$_smarty_tpl->tpl_vars['opt_code']->_loop = true;
?>
    <div class="control-group">
        <label class="control-label" for="elm_shipping_fedex_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['opt_code']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->__("shippings.fedex.option_".$_tmp3);?>
</label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['opt_code']->value=="COD_AMOUNT") {?>
                <input id="elm_shipping_fedex_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="shipping_data[service_params][options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options'][$_smarty_tpl->tpl_vars['opt_code']->value], ENT_QUOTES, 'UTF-8');?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['opt_code']->value=="COD_COLLECTION_TYPE") {?>
                <select id="elm_shipping_fedex_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
" name="shipping_data[service_params][options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
]">
                    <?php  $_smarty_tpl->tpl_vars['f_cod_collection_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_cod_collection_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_cod_collection_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_cod_collection_type']->key => $_smarty_tpl->tpl_vars['f_cod_collection_type']->value) {
$_smarty_tpl->tpl_vars['f_cod_collection_type']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_cod_collection_type']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options'][$_smarty_tpl->tpl_vars['opt_code']->value]==$_smarty_tpl->tpl_vars['f_cod_collection_type']->value) {?> selected="selected"<?php }?>><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['f_cod_collection_type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->__("shippings.fedex.option_cod_collection_type_".$_tmp4);?>
</option>
                    <?php } ?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['opt_code']->value=="DANGEROUS_GOODS_OPTIONS") {?>
                <select id="elm_shipping_fedex_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
" name="shipping_data[service_params][options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
][]" multiple="multiple">
                    <?php  $_smarty_tpl->tpl_vars['f_dangerous_goods_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_dangerous_goods_option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_dangerous_goods_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_dangerous_goods_option']->key => $_smarty_tpl->tpl_vars['f_dangerous_goods_option']->value) {
$_smarty_tpl->tpl_vars['f_dangerous_goods_option']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_dangerous_goods_option']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['f_dangerous_goods_option']->value,$_smarty_tpl->tpl_vars['shipping']->value['service_params']['options'][$_smarty_tpl->tpl_vars['opt_code']->value])) {?> selected="selected"<?php }?>><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['f_dangerous_goods_option']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->__("shippings.fedex.option_dangerous_goods_options_".$_tmp5);?>
</option>
                    <?php } ?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['opt_code']->value=="DANGEROUS_GOODS_ACCESSIBILITY") {?>
                <select id="elm_shipping_fedex_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
" name="shipping_data[service_params][options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
]">
                    <?php  $_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f_dangerous_goods_accessibilities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility']->key => $_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility']->value) {
$_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options'][$_smarty_tpl->tpl_vars['opt_code']->value]==$_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility']->value) {?> selected="selected"<?php }?>><?php ob_start();
echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['f_dangerous_goods_accessibility']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->__("shippings.fedex.option_dangerous_goods_accessibility_".$_tmp6);?>
</option>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <input id="elm_shipping_fedex_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="shipping_data[service_params][options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['opt_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['options'][$_smarty_tpl->tpl_vars['opt_code']->value]) {?>checked="checked"<?php }?> />
            <?php }?>
        </div>
    </div>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['code']->value=="SMART_POST") {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ship_fedex_smart_post")), 0);?>


<div class="control-group">
    <label class="control-label" for="package_type"><?php echo $_smarty_tpl->__("ship_fedex_indicia");?>
</label>
    <div class="controls">
    <select id="package_type" name="shipping_data[service_params][indicia]">
        <option value="PRESORTED_STANDARD" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="PRESORTED_STANDARD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_presorted_standard");?>
</option>
        <option value="PARCEL_SELECT" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="PARCEL_SELECT") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_parcel_select");?>
</option>
        <option value="MEDIA_MAIL" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="MEDIA_MAIL") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_media_mail");?>
</option>
        <option value="PRESORTED_BOUND_PRINTED_MATTER" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['indicia']=="PRESORTED_BOUND_PRINTED_MATTER") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_indicia_presorted_bound_printed_matter");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="package_type"><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement");?>
</label>
    <div class="controls">
    <select id="package_type" name="shipping_data[service_params][ancillary_endorsement]">
        <option value="" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=='') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
        <option value="ADDRESS_CORRECTION" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="ADDRESS_CORRECTION") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_address_correction");?>
</option>
        <option value="CARRIER_LEAVE_IF_NO_RESPONSE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="CARRIER_LEAVE_IF_NO_RESPONSE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_carrier_leave_if_no_response");?>
</option>
        <option value="CHANGE_SERVICE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="CHANGE_SERVICE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_change_service");?>
</option>
        <option value="FORWARDING_SERVICE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="FORWARDING_SERVICE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_forwarding_service");?>
</option>
        <option value="RETURN_DELIVERY" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ancillary_endorsement']=="RETURN_DELIVERY") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_fedex_ancillary_endorsement_return_delivery");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="test_mode"><?php echo $_smarty_tpl->__("ship_fedex_special_services");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][special_services]" value="N" />
    <input id="test_mode" type="checkbox" name="shipping_data[service_params][special_services]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['special_services']=="Y") {?>checked="checked"<?php }?>/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_length"><?php echo $_smarty_tpl->__("ship_fedex_hub_id");?>
</label>
    <div class="controls">
    <input id="ship_fedex_length" type="text" name="shipping_data[service_params][hub_id]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['hub_id'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_fedex_length"><?php echo $_smarty_tpl->__("ship_fedex_customer_manifest_id");?>
</label>
    <div class="controls">
    <input id="ship_fedex_length" type="text" name="shipping_data[service_params][customer_manifest_id]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['customer_manifest_id'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>
<?php }?>

</fieldset><?php }} ?>
