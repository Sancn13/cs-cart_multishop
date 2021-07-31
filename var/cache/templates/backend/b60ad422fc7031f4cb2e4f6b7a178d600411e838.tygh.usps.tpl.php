<?php /* Smarty version Smarty-3.1.21, created on 2021-07-26 12:30:31
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\shippings\components\services\usps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20846297860fe80b7ccccf7-16858071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60ad422fc7031f4cb2e4f6b7a178d600411e838' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\shippings\\components\\services\\usps.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20846297860fe80b7ccccf7-16858071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60fe80b7dcf855_92711576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60fe80b7dcf855_92711576')) {function content_60fe80b7dcf855_92711576($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general_info','ship_usps_username','test_mode','international_usps','ship_usps_mailtype','all','package','ship_usps_mailtype_postcards_or_aerogrammes','ship_usps_mailtype_matter_for_the_blind','envelope','ship_usps_container','none','ship_usps_container_priority_rectangular','ship_usps_container_priority_nonrectangular','ship_usps_intl_package_width','ship_usps_intl_package_length','ship_usps_intl_package_height','ship_usps_intl_package_girth','ship_usps_intl_package_size','usps_package_size_regular','usps_package_size_large','extra_services','usps_service_registered_mail','usps_service_insurance','usps_service_return_receipt','usps_service_pick_up_on_demand','usps_service_certificate_of_mailing','usps_service_edelivery_confirmation','domestic_usps','ship_usps_package_size','ship_usps_package_size_regular','ship_usps_package_size_large','ship_usps_package_size_oversize','ship_usps_first_class_mail_type','letter','ship_usps_first_class_mail_type_flat','ship_usps_first_class_mail_type_parcel','ship_usps_machinable','ship_usps_machinable_true','ship_usps_machinable_false','ship_usps_container_priority','none','ship_usps_container_priority_flat_rate_envelope','ship_usps_container_priority_padded_flat_rate_envelope','ship_usps_container_priority_legal_flat_rate_envelope','ship_usps_container_priority_sm_flat_rate_envelope','ship_usps_container_priority_window_flat_rate_envelope','ship_usps_container_priority_gift_card_flat_rate_envelope','ship_usps_container_priority_flat_rate_box','ship_usps_container_priority_rectangular','ship_usps_container_priority_nonrectangular','ship_usps_container_priority_sm_flat_rate_box','ship_usps_container_priority_md_flat_rate_box','ship_usps_container_priority_lg_flat_rate_box','ship_usps_container_priority_regional_a_rate_box','ship_usps_container_priority_regional_b_rate_box','ship_usps_container_priority_regional_C_rate_box','ship_usps_container_express','none','ship_usps_container_express_flat_rate_envelope','usps_size','ship_usps_priority_width','ship_usps_priority_length','ship_usps_priority_height','ship_usps_priority_girth','ground_only','extra_services','usps_service_certified','usps_service_insurance','usps_service_registered_without_insurance','usps_service_registered_with_insurance','usps_service_collect_on_delivery','usps_service_return_receipt_for_merchandise','usps_service_return_receipt','usps_service_certificate_of_mailing_per_individual_article','usps_service_certificate_of_mailing_for_firm_mailing_books','usps_service_express_mail_insurance','usps_service_delivery_confirmation','usps_service_signature_confirmation','usps_service_return_receipt_electronic'));
?>
<fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("general_info")), 0);?>


<div class="control-group">
    <label class="control-label" for="ship_usps_username"><?php echo $_smarty_tpl->__("ship_usps_username");?>
</label>
    <div class="controls">
    <input id="ship_usps_username" type="text" name="shipping_data[service_params][username]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['username'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="test_mode"><?php echo $_smarty_tpl->__("test_mode");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][test_mode]" value="N" />
    <input id="test_mode" type="checkbox" name="shipping_data[service_params][test_mode]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['test_mode']=="Y") {?>checked="checked"<?php }?>/>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("international_usps")), 0);?>


<div class="control-group">
    <label class="control-label" for="ship_usps_mailtype"><?php echo $_smarty_tpl->__("ship_usps_mailtype");?>
</label>
    <div class="controls">
    <select id="ship_usps_mailtype" name="shipping_data[service_params][mailtype]">
        <option value="All" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['mailtype']=="All") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("all");?>
</option>
        <option value="Package" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['mailtype']=="Package") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("package");?>
</option>
        <option value="Postcards or aerogrammes" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['mailtype']=="Postcards or aerogrammes") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_mailtype_postcards_or_aerogrammes");?>
</option>
        <option value="Matter for the blind" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['mailtype']=="Matter for the blind") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_mailtype_matter_for_the_blind");?>
</option>
        <option value="Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['mailtype']=="Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("envelope");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_container"><?php echo $_smarty_tpl->__("ship_usps_container");?>
</label>
    <div class="controls">
    <select id="ship_usps_container" name="shipping_data[service_params][container]">
        <option value="" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container']=='') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
        <option value="RECTANGULAR" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container']=="RECTANGULAR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_rectangular");?>
</option>
        <option value="NONRECTANGULAR" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container']=="NONRECTANGULAR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_nonrectangular");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_intl_package_width"><?php echo $_smarty_tpl->__("ship_usps_intl_package_width");?>
</label>
    <div class="controls">
    <input id="ship_usps_intl_package_width" type="text" name="shipping_data[service_params][intl_package_width]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_package_width'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_intl_package_length"><?php echo $_smarty_tpl->__("ship_usps_intl_package_length");?>
</label>
    <div class="controls">
    <input id="ship_usps_intl_package_length" type="text" name="shipping_data[service_params][intl_package_length]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_package_length'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_intl_package_height"><?php echo $_smarty_tpl->__("ship_usps_intl_package_height");?>
</label>
    <div class="controls">
    <input id="ship_usps_intl_package_height" type="text" name="shipping_data[service_params][intl_package_height]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_package_height'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_intl_package_girth"><?php echo $_smarty_tpl->__("ship_usps_intl_package_girth");?>
</label>
    <div class="controls">
    <input id="ship_usps_intl_package_girth" type="text" name="shipping_data[service_params][intl_package_girth]" size="30" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_package_girth'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_intl_package_size"><?php echo $_smarty_tpl->__("ship_usps_intl_package_size");?>
</label>
    <div class="controls">
    <select id="ship_usps_intl_package_size" name="shipping_data[service_params][intl_package_size]">
        <option value="REGULAR" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_package_size']=="REGULAR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("usps_package_size_regular");?>
</option>
        <option value="LARGE" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_package_size']=="LARGE") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("usps_package_size_large");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("extra_services");?>
</label>
    <div class="table-filters controls">
        <div class="scroll-y">
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][intl_service_registered_mail]" value="N" />
                <label class="checkbox" for="intl_service_registered_mail">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_service_registered_mail']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][intl_service_registered_mail]" id="intl_service_registered_mail"><?php echo $_smarty_tpl->__("usps_service_registered_mail");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][intl_service_insurance]" value="N" />
                <label class="checkbox" for="intl_service_insurance">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_service_insurance']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][intl_service_insurance]" id="intl_service_insurance" ><?php echo $_smarty_tpl->__("usps_service_insurance");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][intl_service_return_receipt]" value="N" />
                <label class="checkbox" for="intl_service_return_receipt">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_service_return_receipt']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][intl_service_return_receipt]" id="intl_service_return_receipt"><?php echo $_smarty_tpl->__("usps_service_return_receipt");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][intl_service_pick_up_on_demand]" value="N" />
                <label class="checkbox" for="intl_service_pick_up_on_demand">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_service_pick_up_on_demand']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][intl_service_pick_up_on_demand]" id="intl_service_pick_up_on_demand" ><?php echo $_smarty_tpl->__("usps_service_pick_up_on_demand");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][intl_service_certificate_of_mailing]" value="N" />
                <label for="intl_service_certificate_of_mailing" class="checkbox">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_service_certificate_of_mailing']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][intl_service_certificate_of_mailing]" id="intl_service_certificate_of_mailing"><?php echo $_smarty_tpl->__("usps_service_certificate_of_mailing");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][intl_service_edelivery_confirmation]" value="N" />
                <label for="intl_service_edelivery_confirmation" class="checkbox">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['intl_service_edelivery_confirmation']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][intl_service_edelivery_confirmation]" id="intl_service_edelivery_confirmation"><?php echo $_smarty_tpl->__("usps_service_edelivery_confirmation");?>
</label>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("domestic_usps")), 0);?>


<div class="control-group">
    <label class="control-label" for="ship_usps_package_size"><?php echo $_smarty_tpl->__("ship_usps_package_size");?>
</label>
    <div class="controls">
    <select id="ship_usps_package_size" name="shipping_data[service_params][package_size]">
        <option value="Regular" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_size']=="Regular") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_package_size_regular");?>
</option>
        <option value="Large" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_size']=="Large") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_package_size_large");?>
</option>
        <option value="Oversize" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['package_size']=="Oversize") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_package_size_oversize");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_first_class_mail_type"><?php echo $_smarty_tpl->__("ship_usps_first_class_mail_type");?>
</label>
    <div class="controls">
    <select id="ship_usps_first_class_mail_type" name="shipping_data[service_params][first_class_mail_type]">
        <option value="LETTER" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['first_class_mail_type']=="LETTER") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("letter");?>
</option>
        <option value="FLAT" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['first_class_mail_type']=="FLAT") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_first_class_mail_type_flat");?>
</option>
        <option value="PARCEL" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['first_class_mail_type']=="PARCEL") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_first_class_mail_type_parcel");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_machinable"><?php echo $_smarty_tpl->__("ship_usps_machinable");?>
</label>
    <div class="controls">
    <select id="ship_usps_machinable" name="shipping_data[service_params][machinable]">
        <option value="True" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['machinable']=="True") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_machinable_true");?>
</option>
        <option value="False" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['machinable']=="False") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_machinable_false");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_container_priority"><?php echo $_smarty_tpl->__("ship_usps_container_priority");?>
</label>
    <div class="controls">
    <select id="ship_usps_container_priority" name="shipping_data[service_params][container_priority]">
        <option value="" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=='') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
        <option value="Flat Rate Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Flat Rate Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_flat_rate_envelope");?>
</option>
        <option value="Padded Flat Rate Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Padded Flat Rate Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_padded_flat_rate_envelope");?>
</option>
        <option value="Legal Flat Rate Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Legal Flat Rate Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_legal_flat_rate_envelope");?>
</option>
        <option value="Sm Flat Rate Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Sm Flat Rate Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_sm_flat_rate_envelope");?>
</option>
        <option value="Window Flat Rate Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Window Flat Rate Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_window_flat_rate_envelope");?>
</option>
        <option value="Gift Card Flat Rate Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Gift Card Flat Rate Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_gift_card_flat_rate_envelope");?>
</option>
        <option value="Flat Rate Box" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Flat Rate Box") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_flat_rate_box");?>
</option>
        <option value="Rectangular" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="Rectangular") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_rectangular");?>
</option>
        <option value="NonRectangular" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="NonRectangular") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_nonrectangular");?>
</option>
        <option value="SM FLAT RATE BOX" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="SM FLAT RATE BOX") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_sm_flat_rate_box");?>
</option>
        <option value="MD FLAT RATE BOX" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="MD FLAT RATE BOX") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_md_flat_rate_box");?>
</option>
        <option value="LG FLAT RATE BOX" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="LG FLAT RATE BOX") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_lg_flat_rate_box");?>
</option>
        <option value="REGIONALRATEBOXA" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="REGIONALRATEBOXA") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_regional_a_rate_box");?>
</option>
        <option value="REGIONALRATEBOXB" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="REGIONALRATEBOXB") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_regional_b_rate_box");?>
</option>
        <option value="REGIONALRATEBOXC" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_priority']=="REGIONALRATEBOXC") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_priority_regional_C_rate_box");?>
</option>
    </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_container_express"><?php echo $_smarty_tpl->__("ship_usps_container_express");?>
</label>
    <div class="controls">
    <select id="ship_usps_container_express" name="shipping_data[service_params][container_express]">
        <option value="" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_express']=='') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("none");?>
</option>
        <option value="Flat Rate Envelope" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['container_express']=="Flat Rate Envelope") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ship_usps_container_express_flat_rate_envelope");?>
</option>
    </select>
    </div>
</div>

<blockquote>
    <small><?php echo $_smarty_tpl->__("usps_size");?>
</small>
</blockquote>

<div class="control-group">
    <label class="control-label" for="ship_usps_priority_width"><?php echo $_smarty_tpl->__("ship_usps_priority_width");?>
</label>
    <div class="controls">
    <input id="ship_usps_priority_width" type="text" name="shipping_data[service_params][priority_width]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['priority_width'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_priority_length"><?php echo $_smarty_tpl->__("ship_usps_priority_length");?>
</label>
    <div class="controls">
    <input id="ship_usps_priority_length" type="text" name="shipping_data[service_params][priority_length]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['priority_length'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_priority_height"><?php echo $_smarty_tpl->__("ship_usps_priority_height");?>
</label>
    <div class="controls">
    <input id="ship_usps_priority_height" type="text" name="shipping_data[service_params][priority_height]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['priority_height'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ship_usps_priority_girth"><?php echo $_smarty_tpl->__("ship_usps_priority_girth");?>
</label>
    <div class="controls">
    <input id="ship_usps_priority_girth" type="text" name="shipping_data[service_params][priority_girth]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_params']['priority_girth'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="ground_only"><?php echo $_smarty_tpl->__("ground_only");?>
</label>
    <div class="controls">
    <input type="hidden" name="shipping_data[service_params][ground_only]" value="N" />
    <input id="ground_only" type="checkbox" name="shipping_data[service_params][ground_only]" value="Y" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['ground_only']=="Y") {?>checked="checked"<?php }?>/>
    </div>
</div>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("extra_services");?>
</label>
    <div class="table-filters controls">
        <div class="scroll-y">
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_certified]" value="N" />
                <label class="checkbox" for="domestic_service_certified">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_certified']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_certified]" id="domestic_service_certified"><?php echo $_smarty_tpl->__("usps_service_certified");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_insurance]" value="N" />
                <label class="checkbox" for="domestic_service_insurance">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_insurance']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_insurance]" id="domestic_service_insurance" ><?php echo $_smarty_tpl->__("usps_service_insurance");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_registered_without_insurance]" value="N" />
                <label class="checkbox" for="domestic_service_registered_without_insurance">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_registered_without_insurance']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_registered_without_insurance]" id="domestic_service_registered_without_insurance"><?php echo $_smarty_tpl->__("usps_service_registered_without_insurance");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_registered_with_insurance]" value="N" />
                <label class="checkbox" for="domestic_service_registered_with_insurance">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_registered_with_insurance']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_registered_with_insurance]" id="domestic_service_registered_with_insurance"><?php echo $_smarty_tpl->__("usps_service_registered_with_insurance");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_collect_on_delivery]" value="N" />
                <label class="checkbox" for="domestic_service_collect_on_delivery">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_collect_on_delivery']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_collect_on_delivery]" id="domestic_service_collect_on_delivery" ><?php echo $_smarty_tpl->__("usps_service_collect_on_delivery");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_return_receipt_for_merchandise]" value="N" />
                <label class="checkbox" for="domestic_service_return_receipt_for_merchandise">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_return_receipt_for_merchandise']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_return_receipt_for_merchandise]" id="domestic_service_return_receipt_for_merchandise"><?php echo $_smarty_tpl->__("usps_service_return_receipt_for_merchandise");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_return_receipt]" value="N" />
                <label class="checkbox" for="domestic_service_return_receipt">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_return_receipt']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_return_receipt]" id="domestic_service_return_receipt"><?php echo $_smarty_tpl->__("usps_service_return_receipt");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_certificate_of_mailing_per_individual_article]" value="N" />
                <label class="checkbox" for="domestic_service_certificate_of_mailing_per_individual_article">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_certificate_of_mailing_per_individual_article']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_certificate_of_mailing_per_individual_article]" id="domestic_service_certificate_of_mailing_per_individual_article" ><?php echo $_smarty_tpl->__("usps_service_certificate_of_mailing_per_individual_article");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_certificate_of_mailing_for_firm_mailing_books]" value="N" />
                <label class="checkbox" for="domestic_service_certificate_of_mailing_for_firm_mailing_books">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_certificate_of_mailing_for_firm_mailing_books']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_certificate_of_mailing_for_firm_mailing_books]" id="domestic_service_certificate_of_mailing_for_firm_mailing_books"><?php echo $_smarty_tpl->__("usps_service_certificate_of_mailing_for_firm_mailing_books");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_express_mail_insurance]" value="N" />
                <label class="checkbox" for="domestic_service_express_mail_insurance">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_express_mail_insurance']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_express_mail_insurance]" id="domestic_service_express_mail_insurance" ><?php echo $_smarty_tpl->__("usps_service_express_mail_insurance");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_delivery_confirmation]" value="N" />
                <label class="checkbox" for="domestic_service_delivery_confirmation">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_delivery_confirmation']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_delivery_confirmation]" id="domestic_service_delivery_confirmation"><?php echo $_smarty_tpl->__("usps_service_delivery_confirmation");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_signature_confirmation]" value="N" />
                <label  class="checkbox" for="domestic_service_signature_confirmation">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_signature_confirmation']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_signature_confirmation]" id="domestic_service_signature_confirmation" ><?php echo $_smarty_tpl->__("usps_service_signature_confirmation");?>
</label>
            </div>
            <div class="select-field">
                <input type="hidden" name="shipping_data[service_params][domestic_service_return_receipt_electronic]" value="N" />
                <label class="checkbox" for="domestic_service_return_receipt_electronic">
                <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['service_params']['domestic_service_return_receipt_electronic']=="Y") {?>checked="checked"<?php }?> value="Y" name="shipping_data[service_params][domestic_service_return_receipt_electronic]" id="domestic_service_return_receipt_electronic" ><?php echo $_smarty_tpl->__("usps_service_return_receipt_electronic");?>
</label>
            </div>
        </div>
    </div>
</div>

</fieldset>
<?php }} ?>
