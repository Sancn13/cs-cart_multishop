<?php /* Smarty version Smarty-3.1.21, created on 2021-06-24 10:42:59
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\product_features\components\picker\picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106158953460d4378339c077-27446385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed8f2a5840ffe6bcd4d19d863b52f6a2db5166bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\product_features\\components\\picker\\picker.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '106158953460d4378339c077-27446385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'show_advanced' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'close_on_select' => 0,
    'allow_clear' => 0,
    'hide_selection' => 0,
    'create_option_to_end' => 0,
    'item_ids' => 0,
    'search_data' => 0,
    'dropdown_css_class' => 0,
    'empty_variant_text' => 0,
    'meta' => 0,
    'predefined_variants' => 0,
    'show_empty_variant' => 0,
    'id' => 0,
    'variant' => 0,
    'select_group_class' => 0,
    'type' => 0,
    'simple_class' => 0,
    'select_class' => 0,
    'url' => 0,
    'submit_url' => 0,
    'submit_form' => 0,
    'width' => 0,
    'allow_add' => 0,
    'dropdown_parent_selector' => 0,
    'predefined_variant_items' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d437835bc304_52921947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d437835bc304_52921947')) {function content_60d437835bc304_52921947($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','none','add'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_advanced'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_advanced']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['close_on_select'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['close_on_select']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_clear'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_clear']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['hide_selection'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['hide_selection']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['create_option_to_end'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['create_option_to_end']->value)===null||$tmp==='' ? "false" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['search_data'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search_data']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['dropdown_css_class'] = new Smarty_variable((($tmp = @"object-picker__dropdown object-picker__dropdown--product-features ".((string)$_smarty_tpl->tpl_vars['dropdown_css_class']->value))===null||$tmp==='' ? "object-picker__dropdown object-picker__dropdown--product-features" : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&$_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search_or_click_button") : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(fn_url("product_features.get_features_list?exclude_empty_groups=1"), null, 0);?>

<?php $_smarty_tpl->tpl_vars['meta'] = new Smarty_variable("cm-object-features-add-container ".((string)$_smarty_tpl->tpl_vars['meta']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['predefined_variants'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['predefined_variants']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['predefined_variant_items'] = new Smarty_variable(array(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
     <?php $_smarty_tpl->createLocalArrayVariable('predefined_variants', null, 0);
$_smarty_tpl->tpl_vars['predefined_variants']->value["0"] = $_smarty_tpl->tpl_vars['empty_variant_text']->value;?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['predefined_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['variant']->key;
?>
    <?php $_smarty_tpl->createLocalArrayVariable('predefined_variant_items', null, 0);
$_smarty_tpl->tpl_vars['predefined_variant_items']->value[] = array("id"=>$_smarty_tpl->tpl_vars['id']->value,"text"=>$_smarty_tpl->tpl_vars['variant']->value);?>
<?php } ?>

<div class="object-picker object-picker--features <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--features <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--features <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--features <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="assign_product_features_values"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-close-on-select="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['close_on_select']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-search-request-data="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['search_data']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-dropdown-css-class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-result-selector="#product_features_picker_result_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-allow-clear="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                        data-ca-object-picker-enable-create-object="true"
                        data-ca-object-picker-template-result-new-selector="#product_features_picker_result_new_selector_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-create-object-to-end="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['create_option_to_end']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value) {?>
                        data-ca-object-picker-dropdown-parent-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['hide_selection']->value) {?>
                        data-ca-object-picker-hide-selection="true"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['predefined_variant_items']->value) {?>
                        data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars(smarty_modifier_to_json(array_reverse($_smarty_tpl->tpl_vars['predefined_variant_items']->value)), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-template-result-predefined-selector="#product_features_picker_result_predefined_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
    <?php echo '<script'; ?>
 type="text/template" id="product_features_picker_result_new_selector_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="object-picker__results object-picker__results--features object-picker__results--new">
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_pre'=>$_smarty_tpl->__("add")), 0);?>

        </div>
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['predefined_variant_items']->value) {?>
    <?php echo '<script'; ?>
 type="text/template" id="product_features_picker_result_predefined_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
        <div class="object-picker__selection-product-feature">
            <div class="object-picker__product-feature-label"> ${data.text}</div>
        </div>
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="product_features_picker_result_selector_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-product-feature">
        <div class="object-picker__product-feature-label"> ${data.internal_name} <span class="object-picker__product-feature-description muted">${data.description}</span></div>
    </div>
<?php echo '</script'; ?>
>
<?php }} ?>
