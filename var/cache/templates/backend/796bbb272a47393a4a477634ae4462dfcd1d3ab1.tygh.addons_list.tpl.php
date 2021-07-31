<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:26:24
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\addons\components\addons_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103886286260af57b09b2f20-24585624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '796bbb272a47393a4a477634ae4462dfcd1d3ab1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\addons\\components\\addons_list.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103886286260af57b09b2f20-24585624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_installed' => 0,
    'runtime' => 0,
    'addons_list' => 0,
    'suffix' => 0,
    'a' => 0,
    'is_editable' => 0,
    'href' => 0,
    'selected_storefront_id' => 0,
    'addon_classes' => 0,
    'key' => 0,
    'additional_class' => 0,
    'settings' => 0,
    'images_dir' => 0,
    'license_required_href' => 0,
    'license_required_target_id' => 0,
    'license_required_promo_popup_title' => 0,
    'link_text' => 0,
    'act' => 0,
    'btn_delete_data' => 0,
    'menu_item' => 0,
    'hide_for_vendor' => 0,
    'c_url' => 0,
    'target_id' => 0,
    'status_meta' => 0,
    'display' => 0,
    'dialog_title' => 0,
    'has_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af57b0ab7fd1_59133110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af57b0ab7fd1_59133110')) {function content_60af57b0ab7fd1_59133110($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','version','developer','status','manage','settings','mve_ultimate_or_plus_license_required','mve_ultimate_license_required','ultimate_license_required','tools','settings','licensing_and_upgrades','licensing_and_upgrades','uninstall','refresh','install','no_data'));
?>
<?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable('', null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_available'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['show_installed']->value) {?>
    <?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable("installed", null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["hide_for_vendor"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable("addons_list,header_navbar,header_subnav,addons_counter,elm_developer_pages,elm_all_dev_pages", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['addons_list']->value) {?>
<div class="table-responsive-wrapper">
    <table class="table table-addons cm-filter-table table-responsive table-responsive-w-titles ty-table--sorter" data-ca-sortable="true" data-ca-sort-list="[[1, 0]]" data-ca-input-id="elm_addon" data-ca-clear-id="elm_addon_clear" data-ca-empty-id="elm_addon_no_items<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <thead>
        <tr>
            <th class="sorter-false"></th>
            <th class="cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("name");?>
</th>
            <th class="cm-tablesorter sorter-false" data-ca-sortable-column="false"><?php echo $_smarty_tpl->__("version");?>
</th>
            <th class="cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("developer");?>
</th>
            <th class="sorter-false"></th>
            <th class="cm-tablesorter" data-ca-sortable-column="true"><?php echo $_smarty_tpl->__("status");?>
</th>
        </tr>
        </thead>
    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['a']->key;
?>

        <?php $_smarty_tpl->tpl_vars['is_editable'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value['has_options'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable("text", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['act'] = new Smarty_variable("link", null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
            <?php $_smarty_tpl->tpl_vars['is_editable'] = new Smarty_variable(false, null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable("popup", null, 0);?>
            <?php $_smarty_tpl->tpl_vars['act'] = new Smarty_variable("none", null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['has_options']) {?>
                <?php $_smarty_tpl->tpl_vars['act'] = new Smarty_variable("edit", null, 0);?>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']&&$_smarty_tpl->tpl_vars['is_editable']->value) {?>
            <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['a']->value['addon'])), null, 0);?>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable(fn_link_attach($_smarty_tpl->tpl_vars['href']->value,"storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value)), null, 0);?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("manage"), null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['a']->value['status']!==smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
            <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("settings"), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable("&nbsp;", null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->tpl_vars['addon_classes'] = new Smarty_variable("filter_status_".((string)$_smarty_tpl->tpl_vars['a']->value['status']), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <?php $_smarty_tpl->tpl_vars['addon_classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['addon_classes']->value)." filter_source_built_in", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['addon_classes'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['addon_classes']->value)." filter_source_third_party", null, 0);?>
        <?php }?>

        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <?php if (fn_check_addon_snapshot($_smarty_tpl->tpl_vars['key']->value,"plus")) {?>
                <?php $_smarty_tpl->tpl_vars['license_required_promo_popup_title'] = new Smarty_variable($_smarty_tpl->__("mve_ultimate_or_plus_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))), null, 0);?>
                <?php ob_start();
echo htmlspecialchars(fn_url("functionality_restrictions.mve_ultimate_or_plus_license_required"), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['license_required_href'] = new Smarty_variable($_tmp1, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['license_required_target_id'] = new Smarty_variable("content_mve_ultimate_or_plus_license_required", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['license_required_promo_popup_title'] = new Smarty_variable($_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))), null, 0);?>
                <?php ob_start();
echo htmlspecialchars(fn_url("functionality_restrictions.mve_ultimate_license_required"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['license_required_href'] = new Smarty_variable($_tmp2, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['license_required_target_id'] = new Smarty_variable("content_mve_ultimate_license_required", null, 0);?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['license_required_promo_popup_title'] = new Smarty_variable($_smarty_tpl->__("ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))), null, 0);?>
            <?php ob_start();
echo htmlspecialchars(fn_url("functionality_restrictions.ultimate_license_required"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['license_required_href'] = new Smarty_variable($_tmp3, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['license_required_target_id'] = new Smarty_variable("content_ultimate_license_required", null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("addons_row", null, null); ob_start(); ?>
            <tr class="hidden cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-row-item <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_classes']->value, ENT_QUOTES, 'UTF-8');?>
" id="addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-supplier="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
">
                <td class="addon-icon">
                    <div class="bg-icon"
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['status']!==smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")&&$_smarty_tpl->tpl_vars['a']->value['install_datetime']) {?>
                             title="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                    >
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['has_icon']) {?>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
/icon.png" width="38" height="38" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['a']->value['status']===smarty_modifier_enum("ObjectStatuses::NEW_OBJECT")) {?>
                                <i class="icon-puzzle-piece"></i>
                            <?php } else { ?>
                                <i class="icon-puzzle-piece icon-blue"></i>
                            <?php }?>
                        <?php }?>
                    </div>
                </td>
                <td width="80%">
                    <div class="object-group-link-wrap">
                    <?php if ($_smarty_tpl->tpl_vars['is_editable']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']) {?>
                            <a <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>
                                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"
                                <?php } else { ?>
                                    href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_href']->value, ENT_QUOTES, 'UTF-8');?>

                                    data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_target_id']->value, ENT_QUOTES, 'UTF-8');?>

                                    data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_promo_popup_title']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-dialog-opener cm-dialog-auto-size"
                                <?php }?>
                            ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php } else { ?>
                            <a <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>
                                    class="row-status cm-external-click <?php if (!$_smarty_tpl->tpl_vars['is_editable']->value) {?>no-underline<?php }?>"
                                    data-ca-external-click-id="opener_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"
                                <?php } else { ?>
                                    href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_href']->value, ENT_QUOTES, 'UTF-8');?>

                                    data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_target_id']->value, ENT_QUOTES, 'UTF-8');?>

                                    data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_promo_popup_title']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="row-status cm-dialog-opener cm-dialog-auto-size <?php if (!$_smarty_tpl->tpl_vars['is_editable']->value) {?>no-underline<?php }?>"
                                <?php }?>
                            ><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php }?>
                    <?php } else { ?>
                        <span class="unedited-element block"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['key']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <br><span class="row-status object-group-details"><?php echo $_smarty_tpl->tpl_vars['a']->value['description'];?>
</span>
                    </div>
                </td>
                <td>
                    <small class="muted addon-version"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['version'])===null||$tmp==='' ? 0.1 : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['supplier_link']) {?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier_link'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php } else { ?>
                            <small class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>
</small>
                        <?php }?>
                    <?php }?>
                </td>
                <td width="10%" class="nowrap addon-action" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['status']!='N') {?>
                        <div class="hidden-tools">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                            <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['a']->value['separate']) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['is_editable']->value) {?>
                                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value));?>
</li>
                                    <?php } else { ?>
                                        <li class="disabled"><a><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
                                    <?php }?>
                                <?php } else { ?>
                                    <li>
                                        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                                            <?php $_smarty_tpl->createLocalArrayVariable('a', null, 0);
$_smarty_tpl->tpl_vars['a']->value['url'] = fn_link_attach($_smarty_tpl->tpl_vars['a']->value['url'],"storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value));?>
                                        <?php }?>
                                        <?php ob_start();
echo $_smarty_tpl->__("settings");
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['key']->value).((string)$_smarty_tpl->tpl_vars['suffix']->value),'text'=>$_tmp4.": ".((string)$_smarty_tpl->tpl_vars['a']->value['name']),'act'=>(($tmp = @$_smarty_tpl->tpl_vars['act']->value)===null||$tmp==='' ? "link" : $tmp),'link_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>$_smarty_tpl->tpl_vars['a']->value['url']), 0);?>

                                    </li>
                                <?php }?>
                            <?php } else { ?>
                                <li>
                                    <a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_href']->value, ENT_QUOTES, 'UTF-8');?>

                                        data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_target_id']->value, ENT_QUOTES, 'UTF-8');?>

                                        data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_promo_popup_title']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-dialog-opener cm-dialog-auto-size"
                                    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                                </li>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['a']->value['licensing_url']) {?>
                                <li><?php ob_start();
echo $_smarty_tpl->__("licensing_and_upgrades");
$_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('text'=>$_tmp5.": ".((string)$_smarty_tpl->tpl_vars['a']->value['name']),'act'=>"link",'link_text'=>$_smarty_tpl->__("licensing_and_upgrades"),'href'=>$_smarty_tpl->tpl_vars['a']->value['licensing_url']), 0);?>
</li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['a']->value['delete_url']) {?>
                                <?php $_smarty_tpl->tpl_vars['btn_delete_data'] = new Smarty_variable(array('data-ca-target-id'=>'addons_list,header_navbar,header_subnav'), null, 0);?>
                                <?php if (isset($_smarty_tpl->tpl_vars['a']->value['confirmation_deleting'])) {?>
                                    <?php $_smarty_tpl->createLocalArrayVariable('btn_delete_data', null, 0);
$_smarty_tpl->tpl_vars['btn_delete_data']->value['data-ca-confirm-text'] = $_smarty_tpl->tpl_vars['a']->value['confirmation_deleting'];?>
                                <?php }?>

                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("uninstall"),'data'=>$_smarty_tpl->tpl_vars['btn_delete_data']->value,'href'=>$_smarty_tpl->tpl_vars['a']->value['delete_url'],'method'=>"POST"));?>
</li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['a']->value['refresh_url']) {?>
                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("refresh"),'href'=>$_smarty_tpl->tpl_vars['a']->value['refresh_url'],'method'=>"POST"));?>
</li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['a']->value['menu_items']) {?>
                                <li class="divider"></li>
                                <?php  $_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value['menu_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->key => $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->_loop = true;
?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['menu_item']->value['name']),'href'=>$_smarty_tpl->tpl_vars['menu_item']->value['href']));?>
</li>
                                <?php } ?>
                            <?php }?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                        </div>
                    <?php }?>

                </td>

                <td width="15%" class="addon-action">
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=='N') {?>
                        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
                        <div>
                            <a
                                class="btn lowercase cm-post <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>cm-ajax cm-ajax-full-render<?php } else { ?>cm-dialog-opener cm-dialog-auto-size<?php }?>"
                                <?php if ($_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>
                                    href="<?php echo htmlspecialchars(fn_url("addons.install?addon=".((string)$_smarty_tpl->tpl_vars['key']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['c_url']->value))), ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_href']->value, ENT_QUOTES, 'UTF-8');?>

                                    data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_target_id']->value, ENT_QUOTES, 'UTF-8');?>

                                    data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['license_required_promo_popup_title']->value, ENT_QUOTES, 'UTF-8');?>
"
                                <?php }?>
                            >
                                <?php echo $_smarty_tpl->__("install");?>

                            </a>
                        </div>
                        <?php }?>
                    <?php } else { ?>
                        <div class="nowrap">
                            <?php if (!$_smarty_tpl->tpl_vars['a']->value['snapshot_correct']) {?>
                                <?php $_smarty_tpl->tpl_vars['status_meta'] = new Smarty_variable("cm-promo-popup cm-dialog-opener cm-dialog-auto-size", null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['target_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['license_required_target_id']->value, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['dialog_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['license_required_promo_popup_title']->value, null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['status_meta'] = new Smarty_variable('', null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['dialog_title'] = new Smarty_variable(false, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['license_required_href'] = new Smarty_variable(false, null, 0);?>
                            <?php }?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['key']->value,'status'=>$_smarty_tpl->tpl_vars['a']->value['status'],'st_return_url'=>$_smarty_tpl->tpl_vars['c_url']->value,'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value,'non_editable'=>false,'status_meta'=>$_smarty_tpl->tpl_vars['status_meta']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'update_controller'=>"addons",'status_target_id'=>$_smarty_tpl->tpl_vars['target_id']->value,'custom_title'=>$_smarty_tpl->tpl_vars['dialog_title']->value,'custom_href'=>$_smarty_tpl->tpl_vars['license_required_href']->value,'ajax_full_render'=>true), 0);?>

                        </div>
                    <?php }?>
                </td>
            <!--addon_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php if ($_smarty_tpl->tpl_vars['show_installed']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['status']=='A'||$_smarty_tpl->tpl_vars['a']->value['status']=='D') {?>
                <?php echo Smarty::$_smarty_vars['capture']['addons_row'];?>

                <?php $_smarty_tpl->tpl_vars['has_available'] = new Smarty_variable(true, null, 0);?>
            <?php }?>
        <?php } else { ?>
            <?php echo Smarty::$_smarty_vars['capture']['addons_row'];?>

            <?php $_smarty_tpl->tpl_vars['has_available'] = new Smarty_variable(true, null, 0);?>
        <?php }?>

    <?php } ?>
    </table>
</div>
<?php }?>

<p id="elm_addon_no_items<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="no-items <?php if ($_smarty_tpl->tpl_vars['has_available']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }} ?>
