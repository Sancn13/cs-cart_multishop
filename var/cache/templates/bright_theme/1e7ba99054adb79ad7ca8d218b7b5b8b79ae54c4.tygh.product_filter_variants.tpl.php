<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:33:02
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\blocks\product_filters\components\product_filter_variants.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98448867160adc16eea8028-71697214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e7ba99054adb79ad7ca8d218b7b5b8b79ae54c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\blocks\\product_filters\\components\\product_filter_variants.tpl',
      1 => 1617678751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '98448867160adc16eea8028-71697214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'collapse' => 0,
    'filter_uid' => 0,
    'filter' => 0,
    'variant' => 0,
    'white_color' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc16f016886_32161074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc16f016886_32161074')) {function content_60adc16f016886_32161074($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','clear','no_items_found','search','clear','no_items_found'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']&&smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
    <li>
        <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


        <div class="ty-product-filters__search">
        <input type="text" placeholder="<?php echo $_smarty_tpl->__("search");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />
        <i class="ty-product-filters__search-icon ty-icon-cancel-circle hidden" id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clear");?>
"></i>
        </div>
    </li>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['white_color'] = new Smarty_variable("#ffffff", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
        <?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_style']==smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
            <div class="ty-product-filters__color-filter">
                <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                    <li class="ty-product-filters__color-list-item cm-product-filters-checkbox-container">
                        <label
                            id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                            class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                            data-cm-product-color-filter="true"
                            data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
">
                            <input
                                class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                type="checkbox"
                                data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" 
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']&&!$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?> />
                            <i class="ty-icon-ok ty-product-filters__color-filter-check
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-check--selected<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['color']==$_smarty_tpl->tpl_vars['white_color']->value) {?>ty-product-filters__color-filter-check--invert<?php }?>"></i>
                            <div
                                class="ty-product-filters__color-filter-swatch
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                style="background-color:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['variant']->value['color'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['white_color']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            </div>
                        </label>
                    </li>
                <?php } ?>
            </div>
        <?php } else { ?>
            <li class="ty-product-filters__item-more">
                <ul id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['display_count']*2, ENT_QUOTES, 'UTF-8');?>
em;"<?php }?> class="ty-product-filters__variants cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                        <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                            <label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?> class="<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?>>
                                <input class="cm-product-filters-checkbox"
                                       type="checkbox"
                                       <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked="checked"<?php }?>
                                       name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                       data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']&&!$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?>>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </label>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php }?>
        <li>
            <p id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_filters/components/product_filter_variants.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_filters/components/product_filter_variants.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><ul class="ty-product-filters <?php if ($_smarty_tpl->tpl_vars['collapse']->value) {?>hidden<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']&&smarty_modifier_count($_smarty_tpl->tpl_vars['filter']->value['variants'])>$_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>
    <li>
        <?php echo smarty_function_script(array('src'=>"js/tygh/filter_table.js"),$_smarty_tpl);?>


        <div class="ty-product-filters__search">
        <input type="text" placeholder="<?php echo $_smarty_tpl->__("search");?>
" class="cm-autocomplete-off ty-input-text-medium" name="q" id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />
        <i class="ty-product-filters__search-icon ty-icon-cancel-circle hidden" id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clear");?>
"></i>
        </div>
    </li>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['white_color'] = new Smarty_variable("#ffffff", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['filter']->value['variants']) {?>
        <?php if ($_smarty_tpl->tpl_vars['filter']->value['filter_style']==smarty_modifier_enum("ProductFilterStyles::COLOR")) {?>
            <div class="ty-product-filters__color-filter">
                <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                    <li class="ty-product-filters__color-list-item cm-product-filters-checkbox-container">
                        <label
                            id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                            class="ty-product-filters__color-filter-item
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {
if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-item--selected<?php } else { ?>ty-product-filters__color-filter-item--disabled<?php }
}?>"
                            data-cm-product-color-filter="true"
                            data-ca-product-color-filter-checkbox-id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
">
                            <input
                                class="cm-product-filters-checkbox ty-product-filters__color-filter-checkbox"
                                type="checkbox"
                                data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" 
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']&&!$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?> />
                            <i class="ty-icon-ok ty-product-filters__color-filter-check
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-check--selected<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['variant']->value['color']==$_smarty_tpl->tpl_vars['white_color']->value) {?>ty-product-filters__color-filter-check--invert<?php }?>"></i>
                            <div
                                class="ty-product-filters__color-filter-swatch
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__color-filter-swatch--selected<?php }?>"
                                style="background-color:<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['variant']->value['color'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['white_color']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                            </div>
                        </label>
                    </li>
                <?php } ?>
            </div>
        <?php } else { ?>
            <li class="ty-product-filters__item-more">
                <ul id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display_count']) {?>style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['display_count']*2, ENT_QUOTES, 'UTF-8');?>
em;"<?php }?> class="ty-product-filters__variants cm-filter-table" data-ca-input-id="elm_search_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-clear-id="elm_search_clear_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-empty-id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
">

                    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                        <li class="cm-product-filters-checkbox-container ty-product-filters__group">
                            <label <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']) {?> class="<?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>ty-product-filters__empty-result<?php } else { ?>disabled<?php }?>"<?php }?>>
                                <input class="cm-product-filters-checkbox"
                                       type="checkbox"
                                       <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>checked="checked"<?php }?>
                                       name="product_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                       data-ca-filter-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['filter_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="elm_checkbox_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['variant']->value['disabled']&&!$_smarty_tpl->tpl_vars['variant']->value['selected']) {?>disabled="disabled"<?php }?>>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['variant']->value['variant']), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </label>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        <?php }?>
        <li>
            <p id="elm_search_empty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_uid']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-product-filters__no-items-found hidden"><?php echo $_smarty_tpl->__("no_items_found");?>
</p>
        </li>
    <?php }?>
</ul>
<?php }?><?php }} ?>
