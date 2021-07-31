<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:34:48
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\shippings\components\picker\rates\picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122787515760acd2c8374533-75530411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f8efb7d1c9fc8d499c92ec741cfc7b033c3f789' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\shippings\\components\\picker\\rates\\picker.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122787515760acd2c8374533-75530411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'multiple' => 0,
    'item_ids' => 0,
    'view_only' => 0,
    'shipping_id' => 0,
    'view_mode' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2c8466191_12592028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2c8466191_12592028')) {function content_60acd2c8466191_12592028($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search','add_all_destinations'));
?>
<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['view_only'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_only']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<div class="object-picker__simple object-picker__simple--shipping-rates">
    <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
            class="cm-object-picker object-picker__select-native"
            data-ca-object-picker-object-type="shipping-rates"
            data-ca-object-picker-escape-html="false"
            data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url("destinations.selector?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-ajax-delay="250"
            data-ca-object-picker-template-result-selector="#shipping_rates_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-selector="#shipping_rates_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-load-selector="#shipping_rates_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>
                data-ca-object-picker-external-container-selector="#shipping_rates_picker_external_selected_rates_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("type_to_search");?>
"
            data-ca-object-picker-autofocus="false"
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
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
        <a class="btn cm-ajax shipping-rate__add-all" data-ca-target-id="dashboard_shipping_rate" href="<?php echo htmlspecialchars(fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)."&selected_section=shipping_charges&add_all_destinations"), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("add_all_destinations");?>

        </a>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>
    <div class="object-picker__selected-external-container">
        <div id="shipping_rates_picker_external_selected_rates_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="object-picker__selected-external object-picker__selected-external--shipping-rates">
            <?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?>
                <div class="object-picker__skeleton object-picker__skeleton--shipping-rates" data-data="<?php echo htmlspecialchars(smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="object-picker__skeleton object-picker__skeleton--shipping-rates">...</div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--shipping-rates">
        <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/picker/rates/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-external object-picker__selection-external--shipping-rates cm-object-picker-object">
        <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/picker/rates/item_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--shipping-rates">...</div>
<?php echo '</script'; ?>
>
<?php }} ?>
