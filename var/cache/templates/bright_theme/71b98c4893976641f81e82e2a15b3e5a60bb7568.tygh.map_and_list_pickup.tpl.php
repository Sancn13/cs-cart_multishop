<?php /* Smarty version Smarty-3.1.21, created on 2021-06-27 12:33:34
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\store_locator\views\checkout\components\shippings\map_and_list_pickup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139452217860d845ee102f60-76936649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b98c4893976641f81e82e2a15b3e5a60bb7568' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\store_locator\\views\\checkout\\components\\shippings\\map_and_list_pickup.tpl',
      1 => 1621936857,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '139452217860d845ee102f60-76936649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'max_desktop_items' => 0,
    'settings' => 0,
    'display_pickup_map' => 0,
    'shipping' => 0,
    'store' => 0,
    'group_key' => 0,
    'old_store_id' => 0,
    'store_count' => 0,
    'is_store_selected' => 0,
    'selected_store_lat' => 0,
    'selected_store_lng' => 0,
    'initial_lat' => 0,
    'initial_lng' => 0,
    'show_move_map_mobile_hint' => 0,
    '_max_desktop_items' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d845ee1b1206_99354843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d845ee1b1206_99354843')) {function content_60d845ee1b1206_99354843($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select','lite_checkout.use_two_fingers_for_move_map','search','pickup_point_not_selected','select','lite_checkout.use_two_fingers_for_move_map','search','pickup_point_not_selected'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['_max_desktop_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['max_desktop_items']->value)===null||$tmp==='' ? 5 : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider']==="yandex") {?>
    <?php $_smarty_tpl->tpl_vars['show_move_map_mobile_hint'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--map-list">

    
    <div class="ty-checkout-select-store__map pickup__map-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['display_pickup_map']->value) {?>

            <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("marker_content", null, null); ob_start(); ?>
                    <div class="litecheckout-ya-baloon">
                        <strong class="litecheckout-ya-baloon__store-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']>0) {?> — <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);
}?></strong>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?><p class="litecheckout-ya-baloon__store-address"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_address'];?>
</p><?php }?>

                        <p class="litecheckout-ya-baloon__select-row">
                            <a data-ca-shipping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-location-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                               class="cm-sl-pickup-select-location ty-btn ty-btn__primary text-button ty-width-full"
                            ><?php echo $_smarty_tpl->__("select");?>
</a>
                        </p>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?><p class="litecheckout-ya-baloon__store-phone"><a href="tel:<?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
</a></p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?><p class="litecheckout-ya-baloon__store-time"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_time'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?><div class="litecheckout-ya-baloon__store-description"><?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>
</div><?php }?>
                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->tpl_vars['is_store_selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1, null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['selected_store_lat'] = new Smarty_variable($_smarty_tpl->tpl_vars['store']->value['latitude'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['selected_store_lng'] = new Smarty_variable($_smarty_tpl->tpl_vars['store']->value['longitude'], null, 0);?>
                <?php }?>

                <div class="cm-sl-pickup-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"
                     data-ca-geo-map-marker-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-geo-map-marker-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
"
                     <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                        data-ca-geo-map-marker-selected="true"
                     <?php }?>
                ><?php echo Smarty::$_smarty_vars['capture']['marker_content'];?>
</div>

                <?php if ($_smarty_tpl->tpl_vars['store']->value['latitude']&&$_smarty_tpl->tpl_vars['store']->value['longitude']) {?>
                    <?php $_smarty_tpl->tpl_vars['initial_lat'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['selected_store_lat']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['latitude'] : $tmp), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['initial_lng'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['selected_store_lng']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['longitude'] : $tmp), null, 0);?>
                <?php }?>

            <?php } ?>
            <div class="pickup__map-container cm-geo-map-container"
                 data-ca-geo-map-initial-lat="<?php echo htmlspecialchars(doubleval((($tmp = @$_smarty_tpl->tpl_vars['initial_lat']->value)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LATITUDE') ? constant('STORE_LOCATOR_DEFAULT_LATITUDE') : null) : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-initial-lng="<?php echo htmlspecialchars(doubleval((($tmp = @$_smarty_tpl->tpl_vars['initial_lng']->value)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LONGITUDE') ? constant('STORE_LOCATOR_DEFAULT_LONGITUDE') : null) : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-zoom="16"
                 data-ca-geo-map-controls-enable-zoom="true"
                 data-ca-geo-map-controls-enable-fullscreen="true"
                 data-ca-geo-map-controls-enable-layers="true"
                 data-ca-geo-map-controls-enable-ruler="true"
                 data-ca-geo-map-behaviors-enable-drag="true"
                 data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                 data-ca-geo-map-behaviors-enable-smart-drag="true"
                 data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                 data-ca-geo-map-behaviors-enable-multi-touch="true"
                 data-ca-geo-map-language="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-marker-selector=".cm-sl-pickup-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            ></div>
            <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
                <div class="pickup__map-container--mobile-hint"><?php echo $_smarty_tpl->__("lite_checkout.use_two_fingers_for_move_map");?>
</div>
            <?php }?>
        <?php }?>
    </div>

    
    <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']) {?>
        <div class="ty-checkout-select-store pickup__offices-wrapper visible-phone pickup__offices-wrapper--near-map">
            
            <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list pickup__offices--list-no-height">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0);?>

            </div>
            
        </div>
        <?php }?>
    <?php } ?>
    

    
    <button class="ty-btn ty-btn__secondary cm-open-pickups pickup__open-pickupups-btn visible-phone"
        data-ca-title="<?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
"
        data-ca-target=".pickup__offices-wrapper-open"
        type="button"
    ><?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
</button>
    <span class="visible-phone cm-open-pickups-msg"></span>
    

    
    <div class="ty-checkout-select-store pickup__offices-wrapper pickup__offices-wrapper-open hidden-phone">

        
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'])>=$_smarty_tpl->tpl_vars['_max_desktop_items']->value) {?>
        <div class="pickup__search">
            <div class="pickup__search-field litecheckout__field">
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input" data-ca-pickup-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" "
                    value />
                <label class="litecheckout__label" for="pickup-search"><?php echo $_smarty_tpl->__("search");?>
</label>
            </div>
        </div>
        <?php }?>
        

        
        <label for="pickup_office_list"
               class="cm-required cm-multiple-radios hidden"
               data-ca-validator-error-message="<?php echo $_smarty_tpl->__("pickup_point_not_selected");?>
"></label>
        <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list"
             id="pickup_office_list"
             data-ca-error-message-target-node-change-on-screen="xs,xs-large,sm"
             data-ca-error-message-target-node-after-mode="true"
             data-ca-error-message-target-node-on-screen=".cm-open-pickups-msg"
             data-ca-error-message-target-node=".pickup__offices--list"
        >
            <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0);?>

            <?php } ?>
        </div>
        

    </div>
    

</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/checkout/components/shippings/map_and_list_pickup.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/checkout/components/shippings/map_and_list_pickup.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['_max_desktop_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['max_desktop_items']->value)===null||$tmp==='' ? 5 : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider']==="yandex") {?>
    <?php $_smarty_tpl->tpl_vars['show_move_map_mobile_hint'] = new Smarty_variable(true, null, 0);?>
<?php }?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--map-list">

    
    <div class="ty-checkout-select-store__map pickup__map-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['display_pickup_map']->value) {?>

            <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("marker_content", null, null); ob_start(); ?>
                    <div class="litecheckout-ya-baloon">
                        <strong class="litecheckout-ya-baloon__store-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']>0) {?> — <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);
}?></strong>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?><p class="litecheckout-ya-baloon__store-address"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_address'];?>
</p><?php }?>

                        <p class="litecheckout-ya-baloon__select-row">
                            <a data-ca-shipping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                               data-ca-location-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                               class="cm-sl-pickup-select-location ty-btn ty-btn__primary text-button ty-width-full"
                            ><?php echo $_smarty_tpl->__("select");?>
</a>
                        </p>

                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?><p class="litecheckout-ya-baloon__store-phone"><a href="tel:<?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_phone'];?>
</a></p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?><p class="litecheckout-ya-baloon__store-time"><?php echo $_smarty_tpl->tpl_vars['store']->value['pickup_time'];?>
</p><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['store']->value['description']) {?><div class="litecheckout-ya-baloon__store-description"><?php echo $_smarty_tpl->tpl_vars['store']->value['description'];?>
</div><?php }?>
                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->tpl_vars['is_store_selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']||$_smarty_tpl->tpl_vars['store_count']->value==1, null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['selected_store_lat'] = new Smarty_variable($_smarty_tpl->tpl_vars['store']->value['latitude'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['selected_store_lng'] = new Smarty_variable($_smarty_tpl->tpl_vars['store']->value['longitude'], null, 0);?>
                <?php }?>

                <div class="cm-sl-pickup-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"
                     data-ca-geo-map-marker-lat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
"
                     data-ca-geo-map-marker-lng="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
"
                     <?php if ($_smarty_tpl->tpl_vars['is_store_selected']->value) {?>
                        data-ca-geo-map-marker-selected="true"
                     <?php }?>
                ><?php echo Smarty::$_smarty_vars['capture']['marker_content'];?>
</div>

                <?php if ($_smarty_tpl->tpl_vars['store']->value['latitude']&&$_smarty_tpl->tpl_vars['store']->value['longitude']) {?>
                    <?php $_smarty_tpl->tpl_vars['initial_lat'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['selected_store_lat']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['latitude'] : $tmp), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['initial_lng'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['selected_store_lng']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['store']->value['longitude'] : $tmp), null, 0);?>
                <?php }?>

            <?php } ?>
            <div class="pickup__map-container cm-geo-map-container"
                 data-ca-geo-map-initial-lat="<?php echo htmlspecialchars(doubleval((($tmp = @$_smarty_tpl->tpl_vars['initial_lat']->value)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LATITUDE') ? constant('STORE_LOCATOR_DEFAULT_LATITUDE') : null) : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-initial-lng="<?php echo htmlspecialchars(doubleval((($tmp = @$_smarty_tpl->tpl_vars['initial_lng']->value)===null||$tmp==='' ? (defined('STORE_LOCATOR_DEFAULT_LONGITUDE') ? constant('STORE_LOCATOR_DEFAULT_LONGITUDE') : null) : $tmp)), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-zoom="16"
                 data-ca-geo-map-controls-enable-zoom="true"
                 data-ca-geo-map-controls-enable-fullscreen="true"
                 data-ca-geo-map-controls-enable-layers="true"
                 data-ca-geo-map-controls-enable-ruler="true"
                 data-ca-geo-map-behaviors-enable-drag="true"
                 data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                 data-ca-geo-map-behaviors-enable-smart-drag="true"
                 data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                 data-ca-geo-map-behaviors-enable-multi-touch="true"
                 data-ca-geo-map-language="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-geo-map-marker-selector=".cm-sl-pickup-map-marker-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            ></div>
            <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
                <div class="pickup__map-container--mobile-hint"><?php echo $_smarty_tpl->__("lite_checkout.use_two_fingers_for_move_map");?>
</div>
            <?php }?>
        <?php }?>
    </div>

    
    <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id']) {?>
        <div class="ty-checkout-select-store pickup__offices-wrapper visible-phone pickup__offices-wrapper--near-map">
            
            <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list pickup__offices--list-no-height">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0);?>

            </div>
            
        </div>
        <?php }?>
    <?php } ?>
    

    
    <button class="ty-btn ty-btn__secondary cm-open-pickups pickup__open-pickupups-btn visible-phone"
        data-ca-title="<?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
"
        data-ca-target=".pickup__offices-wrapper-open"
        type="button"
    ><?php echo $_smarty_tpl->__('lite_checkout.choose_from_list');?>
</button>
    <span class="visible-phone cm-open-pickups-msg"></span>
    

    
    <div class="ty-checkout-select-store pickup__offices-wrapper pickup__offices-wrapper-open hidden-phone">

        
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['shipping']->value['data']['stores'])>=$_smarty_tpl->tpl_vars['_max_desktop_items']->value) {?>
        <div class="pickup__search">
            <div class="pickup__search-field litecheckout__field">
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input" data-ca-pickup-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" "
                    value />
                <label class="litecheckout__label" for="pickup-search"><?php echo $_smarty_tpl->__("search");?>
</label>
            </div>
        </div>
        <?php }?>
        

        
        <label for="pickup_office_list"
               class="cm-required cm-multiple-radios hidden"
               data-ca-validator-error-message="<?php echo $_smarty_tpl->__("pickup_point_not_selected");?>
"></label>
        <div class="litecheckout__fields-row litecheckout__fields-row--wrapped pickup__offices pickup__offices--list"
             id="pickup_office_list"
             data-ca-error-message-target-node-change-on-screen="xs,xs-large,sm"
             data-ca-error-message-target-node-after-mode="true"
             data-ca-error-message-target-node-on-screen=".cm-open-pickups-msg"
             data-ca-error-message-target-node=".pickup__offices--list"
        >
            <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping']->value['data']['stores']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/views/checkout/components/shippings/items/pickup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('store'=>$_smarty_tpl->tpl_vars['store']->value), 0);?>

            <?php } ?>
        </div>
        

    </div>
    

</div>
<?php }?><?php }} ?>
