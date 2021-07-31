<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:35:34
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\destinations\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204112507760acd2f6c85af7-72165350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '299b3489ba6bfc0e57117ee0dc352ba256e7d4e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\destinations\\tabs_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '204112507760acd2f6c85af7-72165350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stores' => 0,
    'store' => 0,
    'destination' => 0,
    'store_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2f6d34bc3_05999140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2f6d34bc3_05999140')) {function content_60acd2f6d34bc3_05999140($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.store_warehouse','store_locator.main_destination','warehouses.store_type','warehouses.shipping_delay_notification','warehouses.shipping_delay_notification.tooltip','warehouses.store_warehouse','store_locator.main_destination','warehouses.store_type','warehouses.shipping_delay_notification','warehouses.shipping_delay.description','warehouses.shipping_delay.description.default','no_data'));
?>
<div class="hidden" id="content_warehouses">
    <?php if ($_smarty_tpl->tpl_vars['stores']->value) {?>
    <div id="warehouses_list"
         class="items-container cm-sortable ui-sortable"
         data-ca-sortable-table="store_location_destination_links"
         data-ca-sortable-id-name="link_id"
    >
        <div class="table-responsive-wrapper">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th width="1%">&nbsp;</th>
                        <th><?php echo $_smarty_tpl->__("warehouses.store_warehouse");?>
</th>
                        <th width="25%"><?php echo $_smarty_tpl->__("store_locator.main_destination");?>
</th>
                        <th width="10%"><?php echo $_smarty_tpl->__("warehouses.store_type");?>
</th>
                        <th width="35%">
                            <?php echo $_smarty_tpl->__("warehouses.shipping_delay_notification");?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("warehouses.shipping_delay_notification.tooltip")), 0);?>

                        </th>
                    </tr>
                </thead>
                <tbody >
                    <?php  $_smarty_tpl->tpl_vars['store'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['store']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['store']->key => $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->_loop = true;
?>
                        <tr class="cm-sortable-row cm-sortable-id-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
 cm-row-item cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['store']->value['status']), ENT_QUOTES, 'UTF-8');?>
">
                            <td class="no-padding-td" width="1%">
                                <span class="handler cm-sortable-handle ui-sortable-handle"></span>
                                <input type="hidden"
                                       name="destination_data[destination_links][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][store_location_id]"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                                />
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("warehouses.store_warehouse");?>
">
                                <a href="<?php echo htmlspecialchars(fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['store']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                   class="row-status"
                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['store']->value), 0);?>

                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("store_locator.main_destination");?>
">
                                <?php if ($_smarty_tpl->tpl_vars['store']->value['main_destination_id']==$_smarty_tpl->tpl_vars['destination']->value['destination_id']) {?>
                                    <span class="row-status">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['main_destination'], ENT_QUOTES, 'UTF-8');?>

                                    </span>
                                <?php } else { ?>
                                    <a href="<?php echo htmlspecialchars(fn_url("destinations.update?destination_id=".((string)$_smarty_tpl->tpl_vars['store']->value['main_destination_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                       class="row-status"
                                    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['main_destination'], ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php }?>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("warehouses.store_type");?>
">
                                <span class="row-status">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_types']->value[$_smarty_tpl->tpl_vars['store']->value['store_type']], ENT_QUOTES, 'UTF-8');?>

                                </span>
                            </td>
                            <td data-th="<?php echo $_smarty_tpl->__("warehouses.shipping_delay_notification");?>
">
                                <?php if ($_smarty_tpl->tpl_vars['store']->value['warn_about_delay']) {?>
                                    <p class="muted">
                                        <?php if ($_smarty_tpl->tpl_vars['store']->value['shipping_delay']) {?>
                                            <?php echo $_smarty_tpl->__("warehouses.shipping_delay.description",array("[shipping_delay]"=>$_smarty_tpl->tpl_vars['store']->value['shipping_delay']));?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->__("warehouses.shipping_delay.description.default");?>

                                        <?php }?>
                                    </p>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
</div>
<?php }} ?>
