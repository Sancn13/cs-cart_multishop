<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:47:58
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\common\select2\categories_bulkedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162117606260af5cbe5ac8e6-01845458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '477178da0c42646af93506a1f9c3e6af01502f40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\common\\select2\\categories_bulkedit.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162117606260af5cbe5ac8e6-01845458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select2_wrapper_meta' => 0,
    'select2_select_id' => 0,
    'select2_category_ids' => 0,
    'select2_name' => 0,
    'select2_multiple' => 0,
    'select_id' => 0,
    'select2_select_meta' => 0,
    'select2_tabindex' => 0,
    'select2_disabled' => 0,
    'select2_enable_images' => 0,
    'select2_enable_search' => 0,
    'select2_load_via_ajax' => 0,
    'select2_page_size' => 0,
    'select2_data_url' => 0,
    'select2_placeholder' => 0,
    'select2_allow_clear' => 0,
    'select2_close_on_select' => 0,
    'select2_ajax_delay' => 0,
    'select2_allow_sorting' => 0,
    'select2_escape_html' => 0,
    'select2_dropdown_css_class' => 0,
    'select2_required' => 0,
    'select2_width' => 0,
    'select2_repaint_dropdown_on_change' => 0,
    'select2_dropdown_parent' => 0,
    'category_ids' => 0,
    'category_id' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cbe647197_66481657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cbe647197_66481657')) {function content_60af5cbe647197_66481657($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/select2_categories.js"),$_smarty_tpl);?>

<div class="object-categories-add object-categories-add--bulk-edit cm-object-categories-add-container <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_wrapper_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->tpl_vars['select_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['select2_select_id']->value)===null||$tmp==='' ? "categories_add" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['category_ids'] = new Smarty_variable(array_unique((($tmp = @$_smarty_tpl->tpl_vars['select2_category_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>

    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />

    <?php if ($_smarty_tpl->tpl_vars['select2_multiple']->value) {?>
        <?php $_smarty_tpl->tpl_vars['select2_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['select2_name']->value)."[]", null, 0);?>
    <?php }?>

    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-object-selector cm-object-categories-add <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_select_meta']->value, ENT_QUOTES, 'UTF-8');?>
 cm-bulk-edit-object-categories-add "
        <?php if ($_smarty_tpl->tpl_vars['select2_tabindex']->value) {?>
            tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['select2_multiple']->value) {?>
            multiple
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['select2_disabled']->value) {?>
            disabled
        <?php }?>
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-enable-images="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_enable_images']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-enable-search="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_enable_search']->value)===null||$tmp==='' ? "true" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-load-via-ajax="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_load_via_ajax']->value)===null||$tmp==='' ? "true" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-page-size="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_page_size']->value)===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-data-url="<?php echo fn_url((($tmp = @$_smarty_tpl->tpl_vars['select2_data_url']->value)===null||$tmp==='' ? "categories.get_categories_list&template=categories_bulk_edit_select2_item" : $tmp));?>
"
        data-ca-placeholder="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_placeholder']->value)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search") : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-allow-clear="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_allow_clear']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-close-on-select="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_close_on_select']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-ajax-delay="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_ajax_delay']->value)===null||$tmp==='' ? 250 : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-allow-sorting="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_allow_sorting']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-escape-html="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_escape_html']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dropdown-css-class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_dropdown_css_class']->value)===null||$tmp==='' ? "select2-dropdown-below-categories-add" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-required="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_required']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-select-width="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_width']->value)===null||$tmp==='' ? "100%" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-repaint-dropdown-on-change="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_repaint_dropdown_on_change']->value)===null||$tmp==='' ? "true" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-picker-id="categories_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dropdown-parent="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['select2_dropdown_parent']->value)===null||$tmp==='' ? "false" : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-item-template="categories_bulk_edit_select2_item"
        data-ca-item-removable="0"
        data-ca-hide-disabled-items = "true"
    >
        <?php if ($_smarty_tpl->tpl_vars['category_ids']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['category_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category_id']->_loop = false;
 $_from = array_unique($_smarty_tpl->tpl_vars['category_ids']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category_id']->key => $_smarty_tpl->tpl_vars['category_id']->value) {
$_smarty_tpl->tpl_vars['category_id']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
            <?php } ?>
        <?php }?>
    </select>
    <?php if (!$_smarty_tpl->tpl_vars['select2_disabled']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_ids'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'rnd'=>$_smarty_tpl->tpl_vars['select2_select_id']->value,'data_id'=>"categories",'view_mode'=>"button",'but_meta'=>"btn object-categories-add__picker",'but_icon'=>"icon-reorder",'but_text'=>false,'multiple'=>true,'disable_cancel'=>true), 0);?>

    <?php }?>
</div>
<?php }} ?>
