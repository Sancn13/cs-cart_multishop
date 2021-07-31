<?php /* Smarty version Smarty-3.1.21, created on 2021-06-27 12:33:34
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\store_locator\views\checkout\components\shippings\items\pickup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106035070060d845ee960bd8-72784155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40193b364975f5523765b4cd6132c25619936b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\store_locator\\views\\checkout\\components\\shippings\\items\\pickup.tpl',
      1 => 1621936857,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '106035070060d845ee960bd8-72784155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'group_key' => 0,
    'shipping' => 0,
    'store' => 0,
    'old_store_id' => 0,
    'store_count' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d845ee9c6006_41496528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d845ee9c6006_41496528')) {function content_60d845ee9c6006_41496528($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('delivery_time','delivery_time'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><label for="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" 
        class="ty-one-store js-pickup-search-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id'])||($_smarty_tpl->tpl_vars['store_count']->value==1)) {?>ty-sdek-office__selected<?php }?>"
>
    <input type="radio" 
            class="ty-one-store__radio ty-one-store__radio--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 cm-sl-pickup-select-store"
            name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id'])||($_smarty_tpl->tpl_vars['store_count']->value==1)) {?>
            checked="checked"
            <?php }?>
            id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-pickup-select-store="true"
            data-ca-shipping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-location-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
    />

    <div class="ty-sdek-store__label ty-one-store__label">
        <p class="ty-one-store__name">
            <span class="ty-one-store__name-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']&&$_smarty_tpl->tpl_vars['store']->value['pickup_rate']>0) {?>
            <span class="ty-one-store__name-rate">
                (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)
            </span>
            <?php }?>
        </p>

        <div class="ty-one-store__description">
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>
                <span class="ty-one-office__address"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {?>
                <span class="ty-one-office__worktime"><?php echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
        </div>
    </div>
</label><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/checkout/components/shippings/items/pickup.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/checkout/components/shippings/items/pickup.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><label for="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" 
        class="ty-one-store js-pickup-search-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id'])||($_smarty_tpl->tpl_vars['store_count']->value==1)) {?>ty-sdek-office__selected<?php }?>"
>
    <input type="radio" 
            class="ty-one-store__radio ty-one-store__radio--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
 cm-sl-pickup-select-store"
            name="select_store[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if (($_smarty_tpl->tpl_vars['old_store_id']->value==$_smarty_tpl->tpl_vars['store']->value['store_location_id'])||($_smarty_tpl->tpl_vars['store_count']->value==1)) {?>
            checked="checked"
            <?php }?>
            id="store_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-pickup-select-store="true"
            data-ca-shipping-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-group-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-location-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
    />

    <div class="ty-sdek-store__label ty-one-store__label">
        <p class="ty-one-store__name">
            <span class="ty-one-store__name-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_rate']&&$_smarty_tpl->tpl_vars['store']->value['pickup_rate']>0) {?>
            <span class="ty-one-store__name-rate">
                (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['store']->value['pickup_rate']), 0);?>
)
            </span>
            <?php }?>
        </p>

        <div class="ty-one-store__description">
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_address']) {?>
                <span class="ty-one-office__address"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_time']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['pickup_phone']) {?>
                <span class="ty-one-office__worktime"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['store']->value['delivery_time']) {?>
                <span class="ty-one-office__worktime"><?php echo $_smarty_tpl->__("delivery_time");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
</span>
                <br />
            <?php }?>
        </div>
    </div>
</label><?php }?><?php }} ?>
