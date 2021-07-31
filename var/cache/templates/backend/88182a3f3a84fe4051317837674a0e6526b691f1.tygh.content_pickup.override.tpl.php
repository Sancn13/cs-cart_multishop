<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:28:59
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\store_locator\content_pickup.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17417039760bf2a4ba3ca16-40847312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88182a3f3a84fe4051317837674a0e6526b691f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\store_locator\\content_pickup.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17417039760bf2a4ba3ca16-40847312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'destinations' => 0,
    'destination' => 0,
    'store_location' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2a4bb2e676_39737936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2a4bb2e676_39737936')) {function content_60bf2a4bb2e676_39737936($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('store_locator.main_destination','none','warehouses.main_destination_tooltip','warehouses.show_to','warehouses.show_to_tooltip','warehouses.ship_to','warehouses.ship_to_tooltip','warehouses.destinations_configuration.tooltip'));
?>
<?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("store_locator.main_destination");?>
:</label>
        <div class="controls">
            <select name="store_location_data[main_destination_id]" id="main_destination">
                <option value=""><?php echo $_smarty_tpl->__("none");?>
</option>
                <?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['store_location']->value['main_destination_id']===$_smarty_tpl->tpl_vars['destination']->value['destination_id']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
            <p class="muted description"><?php echo $_smarty_tpl->__("warehouses.main_destination_tooltip");?>
</p>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['store_location']->value['store_type']===constant("\Tygh\Addons\Warehouses\Manager::STORE_LOCATOR_TYPE_STORE")||$_smarty_tpl->tpl_vars['store_location']->value['store_type']===constant("\Tygh\Addons\Warehouses\Manager::STORE_LOCATOR_TYPE_PICKUP")) {?>
        <div class="control-group store-locator__pickup-destinations-list<?php if (!$_smarty_tpl->tpl_vars['store_location']->value['main_destination_id']) {?> hidden<?php }?>">
            <label class="control-label"><?php echo $_smarty_tpl->__("warehouses.show_to");?>
:</label>
            <div class="controls">
                <div class="destinations-wrapper">
                    <?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
                        <label class="checkbox inline" for="destinations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <input
                                    type="checkbox"
                                    name="store_location_data[pickup_destinations_ids][]"
                                    class="store-locator__destination"
                                    id="destinations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['store_location']->value['pickup_destinations_ids']&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['destination']->value['destination_id'],$_smarty_tpl->tpl_vars['store_location']->value['pickup_destinations_ids'])) {?>
                                        checked="checked"
                                    <?php }?>
                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"
                            /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>

                        </label>
                    <?php } ?>
                </div>
                <p class="muted description"><?php echo $_smarty_tpl->__("warehouses.show_to_tooltip");?>
</p>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['store_location']->value['store_type']===constant("\Tygh\Addons\Warehouses\Manager::STORE_LOCATOR_TYPE_STORE")||$_smarty_tpl->tpl_vars['store_location']->value['store_type']===constant("\Tygh\Addons\Warehouses\Manager::STORE_LOCATOR_TYPE_WAREHOUSE")) {?>
        <div class="control-group store-locator__pickup-destinations-list<?php if (!$_smarty_tpl->tpl_vars['store_location']->value['main_destination_id']) {?> hidden<?php }?>">
            <label class="control-label"><?php echo $_smarty_tpl->__("warehouses.ship_to");?>
:</label>
            <div class="controls" id="show_to">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/picker/destinations/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'view_mode'=>"external",'item_ids'=>$_smarty_tpl->tpl_vars['store_location']->value['shipping_destinations_ids']), 0);?>

                <p class="muted description"><?php echo $_smarty_tpl->__("warehouses.ship_to_tooltip");?>
</p>
            <!--show_to--></div>
        </div>
    <?php }?>

    <div class="control-group">
        <label for="" class="control-label"></label>
        <div class="controls">
            <div class="well well-small help-block">
                <?php echo $_smarty_tpl->__("warehouses.destinations_configuration.tooltip",array("[destinations_url]"=>fn_url("destinations.manage")));?>

            </div>
        </div>
    </div>
<?php }?>

<style>

</style>
<?php }} ?>
