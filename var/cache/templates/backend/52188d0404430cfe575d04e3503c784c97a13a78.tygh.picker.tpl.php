<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 07:16:20
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_plans\views\vendor_plans\components\picker\picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102447847660bc4c14d56098-86831467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52188d0404430cfe575d04e3503c784c97a13a78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_plans\\views\\vendor_plans\\components\\picker\\picker.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102447847660bc4c14d56098-86831467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'allow_add' => 0,
    'item_ids' => 0,
    'empty_variant_text' => 0,
    'meta' => 0,
    'select_group_class' => 0,
    'type' => 0,
    'simple_class' => 0,
    'select_class' => 0,
    'current_plan_id' => 0,
    'item_id' => 0,
    'result_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc4c14ecfbf3_07580910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4c14ecfbf3_07580910')) {function content_60bc4c14ecfbf3_07580910($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('none','add'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_add'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_add']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), null, 0);?>

<div class="object-picker object-picker--vendor-plan <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--vendor-plan <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> object-picker__simple--vendor-plan <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select readonly name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
_elem"
                    class="cm-object-picker object-picker__select object-picker__select--vendor-plan <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-current-plan-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_plan_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="vendor-plan"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url("vendor_plans.picker"), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-template-result-selector="#object_picker_result_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-selector="#object_picker_selection_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-id="object_picker_advanced_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                        data-ca-object-picker-enable-create-object="true"
                        data-ca-object-picker-template-result-new-selector="#object_picker_result_new_selector_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-template-selection-new-selector="#object_picker_selection_new_selector_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
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

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--vendor-plan <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"result"), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="cm-object-picker-object object-picker__selection object-picker__selection--vendor-plan">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection"), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="cm-object-picker-object object-picker__selection object-picker__selection--vendor-plan">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"load"), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_new_selector_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-vendor-plan object-picker__result-vendor-plan--new">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"new_item",'title_pre'=>$_smarty_tpl->__("add")), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_new_selector_vendor_plan_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-vendor-plan object-picker__selection-vendor-plan--new">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"new_item",'icon'=>false), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php }} ?>
