<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 10:39:54
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\bright_theme\templates\addons\direct_payments\overrides\blocks\cart_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95632779860bc7bca59a824-94356798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99c9bd920cb9b3b9ea735b5d3c8c59321081d88f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\bright_theme\\templates\\addons\\direct_payments\\overrides\\blocks\\cart_content.tpl',
      1 => 1622942573,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95632779860bc7bca59a824-94356798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'config' => 0,
    'dropdown_id' => 0,
    'cart' => 0,
    '_cart_products' => 0,
    'product' => 0,
    'key' => 0,
    'force_items_deletion' => 0,
    'r_url' => 0,
    'settings' => 0,
    'vendor_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc7bcabc4a50_09866881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc7bcabc4a50_09866881')) {function content_60bc7bcabc4a50_09866881($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('my_cart','items','for','cart_is_empty','cart_is_empty','view_cart','checkout','my_cart','items','for','cart_is_empty','cart_is_empty','view_cart','checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["dropdown_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:cart_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-dropdown-box" id="cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="sw_dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:dropdown_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <i class="ty-minicart__icon ty-icon-moon-commerce<?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?> filled<?php } else { ?> empty<?php }?>"></i>
            <span class="ty-minicart-title<?php if (!$_smarty_tpl->tpl_vars['cart']->value['amount']) {?> empty-cart<?php }?> ty-hand">
                <span class="ty-block ty-minicart-title__header ty-uppercase"><?php echo $_smarty_tpl->__("my_cart");?>
</span>
                <span class="ty-block">
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("cart_is_empty");?>

                <?php }?>
                </span>
            </span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>cm-cart-content-delete<?php }?>">
                        <div class="ty-cart-items">
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:cart_status")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars["_cart_products"] = new Smarty_variable(array_reverse($_smarty_tpl->tpl_vars['cart']->value['products'],true), null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item">
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart_product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0);?>

                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc">
                                                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['product'])===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0);?>

                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>
                                                        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
                                                            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                                                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete.from_status?vendor_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])."&cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>

                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                </li>
                                            <?php }?>
                                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php } ?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:cart_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</div>
                            <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons']=="Y") {?>
                        <div class="cm-cart-buttons ty-cart-content__buttons buttons-container<?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <div class="ty-float-left">
                                <a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->__("view_cart");?>
</a>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect']!="Y") {?>
                            <?php $_smarty_tpl->tpl_vars['vendor_id'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['cart']->value['vendor_ids']), null, 0);?>
                            <div class="ty-float-right">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("checkout"),'but_href'=>fn_url("checkout.checkout?vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value))), 0);?>

                            </div>
                            <?php }?>
                        </div>
                        <?php }?>

                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <!--cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:cart_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="C:/xampp/htdocs/cscmultiShop/design/themes/bright_theme/templates/addons/direct_payments/overrides/blocks/cart_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"C:/xampp/htdocs/cscmultiShop/design/themes/bright_theme/templates/addons/direct_payments/overrides/blocks/cart_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["dropdown_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['snapping_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:cart_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:cart_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-dropdown-box" id="cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="sw_dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-dropdown-box__title cm-combination">
        <a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:dropdown_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <i class="ty-minicart__icon ty-icon-moon-commerce<?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?> filled<?php } else { ?> empty<?php }?>"></i>
            <span class="ty-minicart-title<?php if (!$_smarty_tpl->tpl_vars['cart']->value['amount']) {?> empty-cart<?php }?> ty-hand">
                <span class="ty-block ty-minicart-title__header ty-uppercase"><?php echo $_smarty_tpl->__("my_cart");?>
</span>
                <span class="ty-block">
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['amount'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>
 <?php echo $_smarty_tpl->__("for");?>
&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['display_subtotal']), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("cart_is_empty");?>

                <?php }?>
                </span>
            </span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:dropdown_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </a>
        </div>
        <div id="dropdown_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-popup-box ty-dropdown-box__content ty-dropdown-box__content--cart hidden">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="cm-cart-content <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>cm-cart-content-thumb<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>cm-cart-content-delete<?php }?>">
                        <div class="ty-cart-items">
                            <?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?>
                                <ul class="ty-cart-items__list">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:cart_status")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:cart_status"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php $_smarty_tpl->tpl_vars["_cart_products"] = new Smarty_variable(array_reverse($_smarty_tpl->tpl_vars['cart']->value['products'],true), null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart_product")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart_product"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['parent']) {?>
                                                <li class="ty-cart-items__list-item">
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:minicart_product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>
                                                        <div class="ty-cart-items__list-item-image">
                                                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0);?>

                                                        </div>
                                                    <?php }?>
                                                    <div class="ty-cart-items__list-item-desc">
                                                        <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['product'])===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) : $tmp);?>
</a>
                                                    <p>
                                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0);?>

                                                    </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>
                                                        <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
                                                            <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
                                                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete.from_status?vendor_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])."&cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>

                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart_product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                </li>
                                            <?php }?>
                                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart_product"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        <?php } ?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:cart_status"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            <?php } else { ?>
                                <div class="ty-cart-items__empty ty-center"><?php echo $_smarty_tpl->__("cart_is_empty");?>
</div>
                            <?php }?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_bottom_buttons']=="Y") {?>
                        <div class="cm-cart-buttons ty-cart-content__buttons buttons-container<?php if ($_smarty_tpl->tpl_vars['cart']->value['amount']) {?> full-cart<?php } else { ?> hidden<?php }?>">
                            <div class="ty-float-left">
                                <a href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__secondary"><?php echo $_smarty_tpl->__("view_cart");?>
</a>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect']!="Y") {?>
                            <?php $_smarty_tpl->tpl_vars['vendor_id'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['cart']->value['vendor_ids']), null, 0);?>
                            <div class="ty-float-right">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("checkout"),'but_href'=>fn_url("checkout.checkout?vendor_id=".((string)$_smarty_tpl->tpl_vars['vendor_id']->value))), 0);?>

                            </div>
                            <?php }?>
                        </div>
                        <?php }?>

                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:minicart"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <!--cart_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:cart_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
