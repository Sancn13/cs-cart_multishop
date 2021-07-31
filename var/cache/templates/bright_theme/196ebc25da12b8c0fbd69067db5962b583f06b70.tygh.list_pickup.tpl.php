<?php /* Smarty version Smarty-3.1.21, created on 2021-06-27 12:33:34
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\store_locator\views\checkout\components\shippings\list_pickup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76173478660d845eede3997-32805250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196ebc25da12b8c0fbd69067db5962b583f06b70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\store_locator\\views\\checkout\\components\\shippings\\list_pickup.tpl',
      1 => 1621936857,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '76173478660d845eede3997-32805250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'max_desktop_items' => 0,
    'shipping' => 0,
    'old_store_id' => 0,
    'store' => 0,
    '_max_desktop_items' => 0,
    'group_key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d845eee1f482_76221727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d845eee1f482_76221727')) {function content_60d845eee1f482_76221727($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','pickup_point_not_selected','search','pickup_point_not_selected'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['_max_desktop_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['max_desktop_items']->value)===null||$tmp==='' ? 5 : $tmp), null, 0);?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--list">

    
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
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input"
                       data-ca-pickup-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" " value />
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
    

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/checkout/components/shippings/list_pickup.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/checkout/components/shippings/list_pickup.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['_max_desktop_items'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['max_desktop_items']->value)===null||$tmp==='' ? 5 : $tmp), null, 0);?>

<div class="litecheckout__item ty-checkout-select-store__map-full-div pickup pickup--list">

    
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
                <input type="text" id="pickup-search" class="litecheckout__input js-pickup-search-input"
                       data-ca-pickup-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder=" " value />
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
    

</div><?php }?><?php }} ?>
