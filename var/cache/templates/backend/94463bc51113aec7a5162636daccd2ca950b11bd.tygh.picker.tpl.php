<?php /* Smarty version Smarty-3.1.21, created on 2021-05-26 06:28:06
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\profiles\components\picker\picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54645591260adc04661c671-25737923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94463bc51113aec7a5162636daccd2ca950b11bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\profiles\\components\\picker\\picker.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54645591260adc04661c671-25737923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'picker_text_key' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'show_advanced' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'item_ids' => 0,
    'empty_variant_text' => 0,
    'show_empty_variant' => 0,
    'view_mode' => 0,
    'meta' => 0,
    'select_group_class' => 0,
    'advanced_class' => 0,
    'object_picker_advanced_btn_class' => 0,
    'extra_url' => 0,
    'order_info' => 0,
    'type' => 0,
    'simple_class' => 0,
    'select_class' => 0,
    'company_id' => 0,
    'submit_url' => 0,
    'submit_form' => 0,
    'width' => 0,
    'predefined_variants' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60adc04668ed94_04855120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60adc04668ed94_04855120')) {function content_60adc04668ed94_04855120($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','type_to_search'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['picker_text_key'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_text_key']->value)===null||$tmp==='' ? "value" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_advanced'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_advanced']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&$_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search_or_click_button") : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search") : $tmp), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('predefined_variants', null, 0);
$_smarty_tpl->tpl_vars['predefined_variants']->value[] = array("id"=>0,"text"=>$_smarty_tpl->tpl_vars['empty_variant_text']->value);?>
<?php }?>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>object-picker--external<?php }?> object-picker--profiles <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--profiles <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>
            <div class="object-picker__advanced object-picker__advanced--profiles <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advanced_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>"radio",'but_meta'=>"object-picker__advanced-btn object-picker__advanced-btn--profiles ".((string)$_smarty_tpl->tpl_vars['object_picker_advanced_btn_class']->value)." btn bbb",'but_icon'=>"icon-reorder",'extra_url'=>$_smarty_tpl->tpl_vars['extra_url']->value,'view_mode'=>"button",'user_info'=>$_smarty_tpl->tpl_vars['order_info']->value['issuer_data'],'data_id'=>"issuer_info",'input_name'=>"update_order[issuer_id]",'show_but_text'=>false,'picker_id'=>"object_picker_advanced_".((string)$_smarty_tpl->tpl_vars['picker_id']->value)), 0);?>

            </div>
        <?php }?>
        
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--profiles <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--profiles <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="profiles"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php ob_start();
echo htmlspecialchars(implode("ids[]=",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_url("profiles.get_manager_list?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)."&ids[]=".$_tmp1), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
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
                    data-ca-object-picker-extended-picker-id="object_picker_advanced_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['predefined_variants']->value) {?>
                        data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['predefined_variants']->value), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_external_seleceted_profiles_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
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
</div><?php }} ?>
