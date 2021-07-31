<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 07:16:19
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_locations\hooks\companies\shipping_address.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18572443360bc4c13b58a43-60953013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e36d31ef475c39218e9faa3018d20ee4bd300e91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_locations\\hooks\\companies\\shipping_address.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18572443360bc4c13b58a43-60953013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'is_allowed_to_update_companies' => 0,
    'place_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc4c13b97aa6_44711206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4c13b97aa6_44711206')) {function content_60bc4c13b97aa6_44711206($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_locations.location','tt_addons_vendor_locations_hooks_companies_shipping_address_post_vendor_locations.location'));
?>
<div class="control-group">
    <label for="elm_company_location" class="control-label"><?php echo $_smarty_tpl->__("vendor_locations.location");?>
:</label>
    <div class="controls">
        <?php $_smarty_tpl->tpl_vars['place_id'] = new Smarty_variable(null, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['vendor_location']) {?>
            <?php $_smarty_tpl->tpl_vars['place_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['vendor_location']->getPlaceId(), null, 0);?>
        <?php }?>
        <input
                type="text"
                id="elm_company_location"
                class="cm-geocomplete input-large<?php if (!$_smarty_tpl->tpl_vars['is_allowed_to_update_companies']->value) {?> cm-no-hide-input<?php }?>"
                data-ca-geocomplete-type="address"
                data-ca-geocomplete-place-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['place_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-geocomplete-value-elem-id="elm_company_vendor_location_value"
                <?php if (!$_smarty_tpl->tpl_vars['is_allowed_to_update_companies']->value) {?>disabled="disabled"<?php }?>
        />

        <input type="hidden" name="company_data[vendor_location]" id="elm_company_vendor_location_value" disabled="disabled" />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_vendor_locations_hooks_companies_shipping_address_post_vendor_locations.location");?>
</p>
    </div>
</div>
<?php }} ?>
