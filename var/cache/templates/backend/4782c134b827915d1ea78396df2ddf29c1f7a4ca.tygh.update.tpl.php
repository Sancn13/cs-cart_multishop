<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:35:33
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\destinations\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174667913960acd2f5ec1ed2-10432656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4782c134b827915d1ea78396df2ddf29c1f7a4ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\destinations\\update.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '174667913960acd2f5ec1ed2-10432656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'destination' => 0,
    'id' => 0,
    'destination_data' => 0,
    'countries' => 0,
    'states' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2f60857f2_06191509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2f60857f2_06191509')) {function content_60acd2f60857f2_06191509($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','add_in_all_realtime_shippings','countries','states','zipcodes','text_zipcodes_wildcards','cities','text_cities_wildcards','addresses','text_addresses_wildcards','new_rate_area'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(0, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['destination']->value) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['destination']->value['destination_id'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
              enctype="multipart/form-data"
              method="post"
              name="destinations_form"
              class="form-horizontal form-edit <?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>"
        >
            <div class="hidden" id="content_detailed">
                <input type="hidden" name="destination_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"destinations:update_name")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"destinations:update_name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="control-group">
                        <label for="elm_destination_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                        <div class="controls">
                            <input type="text"
                                   name="destination_data[destination]"
                                   id="elm_destination_name"
                                   size="25"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
"
                                   class="input-large"
                            />
                        </div>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"destinations:update_name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"destination_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['destination']->value['localization']), 0);?>


                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"destination_data[status]",'id'=>"elm_destination_status",'obj'=>$_smarty_tpl->tpl_vars['destination']->value), 0);?>


                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("add_in_all_realtime_shippings");?>
:</label>
                        <div class="controls">
                            <input type="checkbox" name="destination_data[add_in_all_realtime_shippings]" checked>
                        </div>
                    </div>
                <?php }?>

                
                <?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>"destination_data[countries]",'first_data'=>$_smarty_tpl->tpl_vars['destination_data']->value['countries'],'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['countries']->value,'class_name'=>"destination-countries"), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("states"),'first_name'=>"destination_data[states]",'first_data'=>$_smarty_tpl->tpl_vars['destination_data']->value['states'],'second_name'=>"all_states",'second_data'=>$_smarty_tpl->tpl_vars['states']->value,'class_name'=>"destination-states"), 0);?>


                
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("zipcodes")), 0);?>

                <div class="table-wrapper">
                    <table width="100%">
                    <tr>
                        <td width="48%">
                            <textarea name="destination_data[zipcodes]"
                                      id="elm_destination_zipcodes"
                                      rows="8"
                                      class="input-full"
                            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_data']->value['zipcodes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </td>
                        <td>&nbsp;</td>
                        <td width="48%"><?php echo $_smarty_tpl->__("text_zipcodes_wildcards");?>
</td>
                    </tr>
                    </table>
                </div>

                
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("cities")), 0);?>

                <div class="table-wrapper">
                    <table cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tr>
                        <td width="48%">
                            <textarea name="destination_data[cities]"
                                      id="elm_destination_cities"
                                      rows="8"
                                      class="input-full"
                            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_data']->value['cities'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </td>
                        <td>&nbsp;</td>
                        <td width="48%"><?php echo $_smarty_tpl->__("text_cities_wildcards");?>
</td>
                    </tr>
                    </table>
                </div>

                
                <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addresses")), 0);?>

                <div class="table-wrapper">
                    <table cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tr>
                        <td width="48%">
                            <textarea name="destination_data[addresses]"
                                      id="elm_destination_cities"
                                      rows="8"
                                      class="input-full"
                            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination_data']->value['addresses'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        </td>
                        <td>&nbsp;</td>
                        <td width="48%"><?php echo $_smarty_tpl->__("text_addresses_wildcards");?>
</td>
                    </tr>
                    </table>
                </div>
            </div>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"destinations:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"destinations:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"destinations:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[destinations.update]",'but_target_form'=>"destinations_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        </form>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"destinations:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"destinations:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"destinations:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['destination']->value['destination'] : $_smarty_tpl->__("new_rate_area"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>

<?php }} ?>
