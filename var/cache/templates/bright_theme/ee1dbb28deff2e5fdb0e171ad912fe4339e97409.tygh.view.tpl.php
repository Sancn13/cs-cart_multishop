<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 10:52:39
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\views\companies\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154195792360af4fc75a5913-71791437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee1dbb28deff2e5fdb0e171ad912fe4339e97409' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\views\\companies\\view.tpl',
      1 => 1617678753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '154195792360af4fc75a5913-71791437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_data' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'capture_name' => 0,
    'profile_fields' => 0,
    'field_data' => 0,
    'field_id' => 0,
    'data_source' => 0,
    'field_value' => 0,
    'settings' => 0,
    'address' => 0,
    'location_full' => 0,
    'selected_section' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af4fc782a620_55088169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af4fc782a620_55088169')) {function content_60af4fc782a620_55088169($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_normalize_url')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.normalize_url.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_vendor_products','items','yes','no','contact_information','shipping_address','view_vendor_products','items','yes','no','contact_information','shipping_address'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['company_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['obj_id_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['company_data']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'show_links'=>true,'show_address'=>true,'show_location_full'=>true), 0);?>

    <div class="ty-company-detail clearfix">

        <div id="block_company_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="clearfix">
            <h1 class="ty-mainbox-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</h1>

            <div class="ty-company-detail__top-links clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:top_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:top_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="ty-company-detail__view-products" id="company_products">
                        <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>

                            (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['total_products'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
)</a>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:top_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="ty-company-detail__info">
                <div class="ty-company-detail__logo">
                    <?php $_smarty_tpl->tpl_vars['capture_name'] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

                </div>

                <?php $_smarty_tpl->_capture_stack[0][] = array("profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
                    <?php  $_smarty_tpl->tpl_vars['field_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_data']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_data']->key => $_smarty_tpl->tpl_vars['field_data']->value) {
$_smarty_tpl->tpl_vars['field_data']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field_data']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['data_source'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['fields'], null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['field_data']->value['is_default']===smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->tpl_vars['field_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['field_data']->value['field_name'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['data_source'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value, null, 0);?>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value]) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value], null, 0);?>
                        <div class="ty-company-detail__control-group">
                            <label class="ty-company-detail__control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                            <?php if ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
                                <span><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
                                <span><?php if ($_smarty_tpl->tpl_vars['field_value']->value===smarty_modifier_enum("YesNo::YES")) {
echo $_smarty_tpl->__("yes");
} else {
echo $_smarty_tpl->__("no");
}?></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
                                <span><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['field_value']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::RADIO")||$_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_data']->value['values'][$_smarty_tpl->tpl_vars['field_value']->value], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::FILE")&&$_smarty_tpl->tpl_vars['field_value']->value['file_name']) {?>
                                <span><a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field_value']->value['link'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_id']->value==="url") {?> 
                                <span><a href="<?php echo htmlspecialchars(smarty_modifier_normalize_url($_smarty_tpl->tpl_vars['field_value']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                            <?php } else { ?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                        </div>
                    <?php } ?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']["profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)])) {?>
                    <div class="ty-company-detail__info-list ty-company-detail_info-first">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                        <?php echo Smarty::$_smarty_vars['capture']["profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)];?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable("address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['location_full'] = new Smarty_variable("location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['address']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location_full']->value])||$_smarty_tpl->tpl_vars['company_data']->value['country']) {?>
                    <div class="ty-company-detail__info-list">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>

                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['address']->value])) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['address']->value];?>
</span>
                            </div>
                        <?php }?>

                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location_full']->value])) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location_full']->value];?>
</span>
                            </div>
                        <?php }?>

                        <div class="ty-company-detail__control-group">
                            <span><?php echo htmlspecialchars(fn_get_country_name($_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
            <div id="content_description"
                 class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!=="description") {?>hidden<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_description']) {?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_description'];?>

                    </div>
                <?php }?>
            </div>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['company_id'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['obj_id_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['company_data']->value,'show_name'=>true,'show_descr'=>true,'show_rating'=>true,'show_logo'=>true,'show_links'=>true,'show_address'=>true,'show_location_full'=>true), 0);?>

    <div class="ty-company-detail clearfix">

        <div id="block_company_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="clearfix">
            <h1 class="ty-mainbox-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['company'], ENT_QUOTES, 'UTF-8');?>
</h1>

            <div class="ty-company-detail__top-links clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:top_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:top_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="ty-company-detail__view-products" id="company_products">
                        <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_vendor_products");?>

                            (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['total_products'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("items");?>
)</a>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:top_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="ty-company-detail__info">
                <div class="ty-company-detail__logo">
                    <?php $_smarty_tpl->tpl_vars['capture_name'] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

                </div>

                <?php $_smarty_tpl->_capture_stack[0][] = array("profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
                    <?php  $_smarty_tpl->tpl_vars['field_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_data']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_data']->key => $_smarty_tpl->tpl_vars['field_data']->value) {
$_smarty_tpl->tpl_vars['field_data']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['field_data']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['data_source'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['fields'], null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['field_data']->value['is_default']===smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->tpl_vars['field_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['field_data']->value['field_name'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['data_source'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value, null, 0);?>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value]) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['field_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['data_source']->value[$_smarty_tpl->tpl_vars['field_id']->value], null, 0);?>
                        <div class="ty-company-detail__control-group">
                            <label class="ty-company-detail__control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                            <?php if ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::EMAIL")) {?>
                                <span><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
                                <span><?php if ($_smarty_tpl->tpl_vars['field_value']->value===smarty_modifier_enum("YesNo::YES")) {
echo $_smarty_tpl->__("yes");
} else {
echo $_smarty_tpl->__("no");
}?></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
                                <span><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['field_value']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::RADIO")||$_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_data']->value['values'][$_smarty_tpl->tpl_vars['field_value']->value], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_data']->value['field_type']===smarty_modifier_enum("ProfileFieldTypes::FILE")&&$_smarty_tpl->tpl_vars['field_value']->value['file_name']) {?>
                                <span><a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field_value']->value['link'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field_id']->value==="url") {?> 
                                <span><a href="<?php echo htmlspecialchars(smarty_modifier_normalize_url($_smarty_tpl->tpl_vars['field_value']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</a></span>
                            <?php } else { ?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                        </div>
                    <?php } ?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']["profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)])) {?>
                    <div class="ty-company-detail__info-list ty-company-detail_info-first">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("contact_information");?>
</h5>
                        <?php echo Smarty::$_smarty_vars['capture']["profile_fields_".((string)$_smarty_tpl->tpl_vars['obj_id']->value)];?>

                    </div>
                <?php }?>

                <?php $_smarty_tpl->tpl_vars['address'] = new Smarty_variable("address_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['location_full'] = new Smarty_variable("location_full_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
                <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['address']->value])||trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location_full']->value])||$_smarty_tpl->tpl_vars['company_data']->value['country']) {?>
                    <div class="ty-company-detail__info-list">
                        <h5 class="ty-company-detail__info-title"><?php echo $_smarty_tpl->__("shipping_address");?>
</h5>

                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['address']->value])) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['address']->value];?>
</span>
                            </div>
                        <?php }?>

                        <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location_full']->value])) {?>
                            <div class="ty-company-detail__control-group">
                                <span><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location_full']->value];?>
</span>
                            </div>
                        <?php }?>

                        <div class="ty-company-detail__control-group">
                            <span><?php echo htmlspecialchars(fn_get_country_name($_smarty_tpl->tpl_vars['company_data']->value['country']), ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
            <div id="content_description"
                 class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value&&$_smarty_tpl->tpl_vars['selected_section']->value!=="description") {?>hidden<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_description']) {?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_description'];?>

                    </div>
                <?php }?>
            </div>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:tabs")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:tabs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:tabs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
