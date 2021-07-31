<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 07:19:05
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\direct_payments\hooks\payments\list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38777063860bc4cb9c4f985-87297751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d61512f3700c1d1fa9cccbffe9247ef7f30f276' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\direct_payments\\hooks\\payments\\list.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '38777063860bc4cb9c4f985-87297751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_admin_payments_notification' => 0,
    'vendor_payments' => 0,
    'vendor_payment' => 0,
    'status' => 0,
    'skip_delete' => 0,
    'can_change_status' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc4cb9d23751_13415290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4cb9d23751_13415290')) {function content_60bc4cb9d23751_13415290($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('direct_payments.your_payments','active','direct_payments.admin_payments_notification','direct_payments.create_payment_method','direct_payments.admin_payments','active','direct_payments.admin_payments_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <h4 class="subheader">
        <?php echo $_smarty_tpl->__("direct_payments.your_payments");?>

        <?php if (!$_smarty_tpl->tpl_vars['show_admin_payments_notification']->value) {?>
            <span class="label label-success"><?php echo $_smarty_tpl->__("active");?>
</span>
        <?php }?>
    </h4>

    <?php if ($_smarty_tpl->tpl_vars['show_admin_payments_notification']->value) {?>
        <div class="alert alert-block">
            <p><?php echo $_smarty_tpl->__("direct_payments.admin_payments_notification");?>
</p>
            <p>
                <?php ob_start();
echo $_smarty_tpl->__("direct_payments.create_payment_method");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_external_click_id'=>"opener_add_new_payments",'but_meta'=>"cm-external-click",'but_text'=>$_tmp1), 0);?>

            </p>
        </div>
    <?php }?>

    <div class="cm-sortable"
         data-ca-sortable-table="payments" data-ca-sortable-id-name="payment_id"
         id="vendor_payments_list"
    >
        <?php if ($_smarty_tpl->tpl_vars['vendor_payments']->value) {?>
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['vendor_payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor_payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor_payment']->key => $_smarty_tpl->tpl_vars['vendor_payment']->value) {
$_smarty_tpl->tpl_vars['vendor_payment']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['vendor_payment']->value['processor_status']=="D") {?>
                            <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable("D", null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable(false, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable("text", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_payment']->value['status'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable(true, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable('', null, 0);?>
                        <?php }?>

                        <?php $_smarty_tpl->_capture_stack[0][] = array("tool_items", null, null); ob_start(); ?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <?php $_smarty_tpl->_capture_stack[0][] = array("extra_data", null, null); ob_start(); ?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"payments:extra_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"payments:extra_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"payments:extra_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['vendor_payment']->value['payment_id'],'text'=>$_smarty_tpl->tpl_vars['vendor_payment']->value['payment'],'status'=>$_smarty_tpl->tpl_vars['status']->value,'href'=>"payments.update?payment_id=".((string)$_smarty_tpl->tpl_vars['vendor_payment']->value['payment_id']),'object_id_name'=>"payment_id",'table'=>"payments",'href_delete'=>"payments.delete?payment_id=".((string)$_smarty_tpl->tpl_vars['vendor_payment']->value['payment_id']),'delete_target_id'=>"vendor_payments_list",'skip_delete'=>$_smarty_tpl->tpl_vars['skip_delete']->value,'header_text'=>$_smarty_tpl->tpl_vars['vendor_payment']->value['payment'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['vendor_payment']->value['payment_id']),'no_table'=>true,'draggable'=>true,'can_change_status'=>$_smarty_tpl->tpl_vars['can_change_status']->value,'display'=>$_smarty_tpl->tpl_vars['display']->value,'tool_items'=>Smarty::$_smarty_vars['capture']['tool_items'],'extra_data'=>Smarty::$_smarty_vars['capture']['extra_data']), 0);?>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php }?>
    <!--vendor_payments_list--></div>

    <h4 class="subheader">
        <?php echo $_smarty_tpl->__("direct_payments.admin_payments");?>

        <?php if ($_smarty_tpl->tpl_vars['show_admin_payments_notification']->value) {?>
            <span class="label label-success"><?php echo $_smarty_tpl->__("active");?>
</span>
        <?php }?>
    </h4>

    <div class="alert-block">
        <?php echo $_smarty_tpl->__("direct_payments.admin_payments_description");?>

    </div>

    <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['non_editable'] = clone $_smarty_tpl->tpl_vars['non_editable'];?>
    <?php $_smarty_tpl->tpl_vars['draggable'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['draggable'] = clone $_smarty_tpl->tpl_vars['draggable'];?>
    <?php $_smarty_tpl->tpl_vars['nostatus'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['nostatus'] = clone $_smarty_tpl->tpl_vars['nostatus'];?>
<?php }?><?php }} ?>
