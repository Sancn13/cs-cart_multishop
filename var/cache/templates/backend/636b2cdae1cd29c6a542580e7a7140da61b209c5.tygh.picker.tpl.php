<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:33:24
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\components\picker\destinations\picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113131629160bf2b54ae2db1-20273699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '636b2cdae1cd29c6a542580e7a7140da61b209c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\components\\picker\\destinations\\picker.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113131629160bf2b54ae2db1-20273699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'autofocus' => 0,
    'multiple' => 0,
    'item_ids' => 0,
    'store_location' => 0,
    'view_mode' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2b54cd74b5_74954915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2b54cd74b5_74954915')) {function content_60bf2b54cd74b5_74954915($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search','warehouses.add_all','no_data','warehouses.rate_area','warehouses.shipping_delay','warehouses.shipping_delay.tooltip','warehouses.warn_about_delay','warehouses.warn_about_delay.tooltip','delete'));
?>

<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>

<div class="object-picker__simple object-picker__simple--destinations">
    <input type="hidden"
           name="store_location_data[shipping_destinations]"
           value=""
    />
    <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
            name=""
            class="cm-object-picker object-picker__select-native"
            data-ca-object-picker-object-type="destination"
            data-ca-object-picker-escape-html="false"
            data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url("destinations.picker?store_location_id=".((string)$_smarty_tpl->tpl_vars['store_location']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-ajax-delay="250"
            data-ca-object-picker-template-result-selector="#destination_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-selector="#destination_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-load-selector="#destination_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>
                data-ca-object-picker-external-container-selector="#destination_picker_external_selected_destinations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
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
    <a class="btn cm-ajax cm-hide-with-inputs" data-ca-target-id="show_to" href="<?php echo htmlspecialchars(fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['store_location']->value['store_location_id'])."&selected_section=pickup&add_all_destinations"), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->__("warehouses.add_all");?>

    </a>
</div>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>
    <div class="object-picker__selected-external-container">
        <div id="destination_picker_external_selected_destinations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
             class="object-picker__selected-external object-picker__selected-external--destination"
        ><?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?><div class="object-picker__skeleton object-picker__skeleton--destination"data-data="<?php echo htmlspecialchars(smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/picker/destinations/load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php } ?></div>
        <p class="object-picker__selected-external-not-items no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <div class="object-picker__selected-header">
            <div class="object-picker__header-item object-picker__header-item--name">
                <div class="object-picker__name">
                    <?php echo $_smarty_tpl->__("warehouses.rate_area");?>

                </div>
            </div>
            <div class="object-picker__header-item object-picker__header-item--shipping-delay">
                <?php echo $_smarty_tpl->__("warehouses.shipping_delay");?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("warehouses.shipping_delay.tooltip")), 0);?>

            </div>
            <div class="object-picker__header-item object-picker__header-item--warn-about-delay">
                <?php echo $_smarty_tpl->__("warehouses.warn_about_delay");?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("warehouses.warn_about_delay.tooltip")), 0);?>

            </div>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="destination_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--destination">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/picker/destinations/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"result"), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="destination_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-extended object-picker__selection-extended--destination cm-object-picker-object">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/picker/destinations/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection"), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"button-icon",'but_meta'=>"btn cm-object-picker-remove-object object-picker__delete",'but_icon'=>"icon-remove object-picker__delete-icon",'title'=>$_smarty_tpl->__("delete")), 0);?>

        <?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="destination_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--destination">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/picker/destinations/load.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php echo '</script'; ?>
>
<?php }} ?>
