<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:28:29
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\store_locator\views\store_locator\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43541125960bf2a2d5fc6b3-38622371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bacf4b4d0273ea056a2afa6e45ffd197420c387' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\store_locator\\views\\store_locator\\manage.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '43541125960bf2a2d5fc6b3-38622371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locations' => 0,
    'loc' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'destinations' => 0,
    'display' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2a2ddb2bd7_28338864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2a2ddb2bd7_28338864')) {function content_60bf2a2ddb2bd7_28338864($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position_short','store_locator','city','rate_area','status','position_short','store_locator','city','rate_area','store_locator.no_rate_area','tools','edit','delete','status','no_data','add_store_location','store_locator'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="store_locator_form">
<input type="hidden" name="fake" value="1" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true), 0);?>


<div class="items-container" id="store_locations">
    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">

        <thead>
        <tr>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:stores_list_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:stores_list_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <th width="1%" class="mobile-hide">
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"cm-no-hide-input"), 0);?>

            </th>
            <th width="1%" class="shift-left"><?php echo $_smarty_tpl->__("position_short");?>
</th>
            <th width="20%" class="shift-left"><?php echo $_smarty_tpl->__("store_locator");?>
</th>
            <th width="20%" class="shift-left"><?php echo $_smarty_tpl->__("city");?>
</th>
            <th width="20%" class="shift-left"><?php echo $_smarty_tpl->__("rate_area");?>
</th>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:stores_list_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <th width="5%">&nbsp;</th>
            <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
        </tr>
        </thead>

            <?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
?>
            <tbody>
            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['loc']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" valign="top" >

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:stores_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:stores_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['loc']->value,"store_locations"), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable('', null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable('', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("text", null, 0);?>
                <?php }?>

                <td class="left <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                    <input type="checkbox" name="store_locator_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
                <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                    <input type="text" name="store_locators[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" />
                </td>
                <td data-th="<?php echo $_smarty_tpl->__("store_locator");?>
">
                    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['loc']->value), 0);?>

                </td>

                <td data-th="<?php echo $_smarty_tpl->__("city");?>
">
                    <span class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'UTF-8');?>
</span>
                </td>

                <td data-th="<?php echo $_smarty_tpl->__("rate_area");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['loc']->value['main_destination_id']) {?>
                        <?php if (fn_check_view_permissions("destinations.update")) {?>
                            <input type="hidden" name="store_locators[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][main_destination_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['main_destination_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                            <a href="<?php echo htmlspecialchars(fn_url("destinations.update&destination_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['main_destination_id'])), ENT_QUOTES, 'UTF-8');?>
"
                               class="row-status"
                            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destinations']->value[$_smarty_tpl->tpl_vars['loc']->value['main_destination_id']]["destination"], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php } else { ?>
                            <span class="row-status">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destinations']->value[$_smarty_tpl->tpl_vars['loc']->value['main_destination_id']]["destination"], ENT_QUOTES, 'UTF-8');?>

                            </span>
                        <?php }?>
                    <?php } else { ?>
                        <span class="row-status">
                            <?php echo $_smarty_tpl->__("store_locator.no_rate_area");?>

                        </span>
                    <?php }?>
                </td>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:stores_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <td class="center nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])));?>
</li>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"store_locator.delete?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id']),'method'=>"POST"));?>
</li>
                        <?php }?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="hidden-tools right">
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                    </div>
                </td>
                <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['loc']->value['store_location_id'],'status'=>$_smarty_tpl->tpl_vars['loc']->value['status'],'hidden'=>'','object_id_name'=>"store_location_id",'table'=>"store_locations",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value),'display'=>$_smarty_tpl->tpl_vars['display']->value), 0);?>

                </td>

            </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--store_locations--></div>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true), 0);?>

</form>
    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"store_locator.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_store_location"),'hide_tools'=>true), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"store_locator.manage",'search'=>$_smarty_tpl->tpl_vars['search']->value), 0);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[store_locator.m_delete]",'form'=>"store_locator_form"));?>
</li>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[store_locator.m_update]",'but_role'=>"action",'but_target_form'=>"store_locator_form",'but_meta'=>"cm-submit"), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("store_locator"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
