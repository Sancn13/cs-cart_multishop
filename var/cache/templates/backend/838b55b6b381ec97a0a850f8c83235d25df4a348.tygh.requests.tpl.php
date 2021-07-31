<?php /* Smarty version Smarty-3.1.21, created on 2021-06-30 04:05:02
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\usergroups\requests.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201758634960dbc33e6505b0-06012624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838b55b6b381ec97a0a850f8c83235d25df4a348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\usergroups\\requests.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201758634960dbc33e6505b0-06012624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'config' => 0,
    'usergroup_requests' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'ug_request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60dbc33ee61536_75135922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60dbc33ee61536_75135922')) {function content_60dbc33ee61536_75135922($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('user','usergroup','status','user','usergroup','status','no_data','approve_selected','notify_customer','decline_selected','user_group_requests'));
?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="usergroup_requests_form" class="admin-content-external-form">
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>

<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['usergroup_requests']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
        <thead>
        <tr>
            <th width="1%" class="left mobile-hide">
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
            <th width="60%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=customer&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("user");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="customer") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="20%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=usergroup&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("usergroup");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="usergroup") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
            <th width="19%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
        </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['ug_request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ug_request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroup_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ug_request']->key => $_smarty_tpl->tpl_vars['ug_request']->value) {
$_smarty_tpl->tpl_vars['ug_request']->_loop = true;
?>
        <tr>
            <td class="center mobile-hide">
                <input type="checkbox" name="link_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ug_request']->value['link_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
            </td>
            <td data-th="<?php echo $_smarty_tpl->__("user");?>
"><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['ug_request']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ug_request']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ug_request']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
"><a href="<?php echo htmlspecialchars(fn_url("usergroups.manage#group".((string)$_smarty_tpl->tpl_vars['ug_request']->value['usergroup_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ug_request']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['ug_request']->value['usergroup_id'],'status'=>$_smarty_tpl->tpl_vars['ug_request']->value['status'],'hidden'=>'','items_status'=>fn_get_predefined_statuses("usergroups"),'extra'=>"&user_id=".((string)$_smarty_tpl->tpl_vars['ug_request']->value['user_id']),'update_controller'=>"usergroups",'notify'=>true), 0);?>

            </td>
        </tr>
        <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['usergroup_requests']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("list_list", null, null); ob_start(); ?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("approve_selected"),'dispatch'=>"dispatch[usergroups.bulk_update_status.approve]",'class'=>"cm-confirm",'form'=>"usergroup_requests_form"));?>
</li>
        <li>
            <a>
                <label for="notify_user">
                <input type="checkbox" name="notify_user" id="notify_user" value="Y"/>
                <?php echo $_smarty_tpl->__("notify_customer");?>
</label>
            </a>
        </li>
        <li class="divider"></li>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("decline_selected"),'dispatch'=>"dispatch[usergroups.bulk_update_status.decline]",'form'=>"usergroup_requests_form"));?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['list_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'title'=>$_smarty_tpl->__("user_group_requests"),'content'=>Smarty::$_smarty_vars['capture']['mainbox']), 0);?>

</form>
<?php }} ?>
