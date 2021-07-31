<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:23:25
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120673596060bc319db9fa96-11129279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db60f76b4a989d6a16dcf056b0babbcdfed26fc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\update.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '120673596060bc319db9fa96-11129279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefront' => 0,
    'id' => 0,
    'is_form_readonly' => 0,
    'config' => 0,
    'name' => 0,
    'url' => 0,
    'is_default' => 0,
    'status' => 0,
    'access_key' => 0,
    'is_accessible_for_authorized_customers_only' => 0,
    'theme' => 0,
    'current_style' => 0,
    'current_theme' => 0,
    'all_languages' => 0,
    'all_currencies' => 0,
    'all_countries' => 0,
    'country_code' => 0,
    'country' => 0,
    'redirect_customer' => 0,
    'selected_countries' => 0,
    'selected_companies' => 0,
    'runtime' => 0,
    'is_storefronts_limit_reached' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc319dcb4062_62582063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc319dcb4062_62582063')) {function content_60bc319dcb4062_62582063($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('information','design','copy_theme_from_another_storefront','localization','mve_ultimate_license_required','add_storefront','create','creating_storefront'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['storefront']->value->storefront_id)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <form id="update_storefront_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
              action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              method="post"
              name="storefront_update_form"
              class="form-horizontal form-edit cm-disable-empty-files <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>cm-hide-inputs<?php }?>"
        >
            <input type="hidden"
                   name="storefront_data[storefront_id]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
            />

            <div id="content_general">
                <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable(smarty_modifier_enum("StorefrontStatuses::OPEN"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['access_key'] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars['is_default'] = new Smarty_variable(false, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['theme'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['base_theme'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['is_accessible_for_authorized_customers_only'] = new Smarty_variable(false, null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->name, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->url, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->status, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['access_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->access_key, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['is_default'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->is_default, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['theme'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->theme_name, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['is_accessible_for_authorized_customers_only'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->is_accessible_for_authorized_customers_only, null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("information")), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'name'=>$_smarty_tpl->tpl_vars['name']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/url.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/is_default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'is_default'=>$_smarty_tpl->tpl_vars['is_default']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/access_key.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'access_key'=>$_smarty_tpl->tpl_vars['access_key']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/access_only_for_authorized_customers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'is_accessible_for_authorized_customers_only'=>$_smarty_tpl->tpl_vars['is_accessible_for_authorized_customers_only']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("design")), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'theme'=>$_smarty_tpl->tpl_vars['theme']->value,'current_style'=>$_smarty_tpl->tpl_vars['current_style']->value,'current_theme'=>$_smarty_tpl->tpl_vars['current_theme']->value), 0);?>


                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("copy_theme_from_another_storefront");?>
</label>
                        <div class="controls">
                            <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"storefront_data[extra][copy_layouts_from_storefront_id]",'show_advanced'=>false), 0);?>

                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("localization")), 0);?>


                    <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/languages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'all_languages'=>$_smarty_tpl->tpl_vars['all_languages']->value), 0);?>


                    <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/currencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'all_currencies'=>$_smarty_tpl->tpl_vars['all_currencies']->value), 0);?>

                <?php }?>
            </div>

            <div id="content_regions" class="hidden">
                <?php $_smarty_tpl->tpl_vars['selected_countries'] = new Smarty_variable(array(), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['redirect_customer'] = new Smarty_variable(false, null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['country_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['country_code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                        <?php if (in_array($_smarty_tpl->tpl_vars['country_code']->value,$_smarty_tpl->tpl_vars['storefront']->value->getCountryCodes())) {?>
                            <?php $_smarty_tpl->createLocalArrayVariable('selected_countries', null, 0);
$_smarty_tpl->tpl_vars['selected_countries']->value[$_smarty_tpl->tpl_vars['country_code']->value] = $_smarty_tpl->tpl_vars['country']->value;?>
                        <?php }?>
                    <?php } ?>
                    <?php $_smarty_tpl->tpl_vars['redirect_customer'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->redirect_customer, null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/redirect_customer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'redirect_customer'=>$_smarty_tpl->tpl_vars['redirect_customer']->value), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/regions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_countries'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'all_countries'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0);?>

            </div>

            <div id="content_companies" class="hidden">
                <?php $_smarty_tpl->tpl_vars['selected_companies'] = new Smarty_variable(array(), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['selected_companies'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds(), null, 0);?>
                <?php }?>

                <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/companies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'selected_companies'=>$_smarty_tpl->tpl_vars['selected_companies']->value), 0);?>

            </div>
        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"storefronts:update_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"storefronts:update_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (($_smarty_tpl->tpl_vars['runtime']->value['mode']==="add"&&$_smarty_tpl->tpl_vars['is_storefronts_limit_reached']->value)) {?>
            <?php $_smarty_tpl->tpl_vars['promo_popup_title'] = new Smarty_variable($_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))), null, 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_override_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-size",'tool_href'=>"functionality_restrictions.mve_ultimate_license_required",'prefix'=>"top",'hide_tools'=>true,'title'=>$_smarty_tpl->__("add_storefront"),'link_text'=>$_smarty_tpl->__("create"),'icon'=>" ",'meta_data'=>"data-ca-dialog-title='".((string)$_smarty_tpl->tpl_vars['promo_popup_title']->value)."'"), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"submit-link",'but_name'=>"dispatch[storefronts.update]",'but_target_form'=>"update_storefront_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"storefronts:update_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['storefront']->value->name : $_smarty_tpl->__("creating_storefront"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
