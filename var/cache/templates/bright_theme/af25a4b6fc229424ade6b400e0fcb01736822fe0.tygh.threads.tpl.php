<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 04:46:24
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\addons\vendor_communication\views\vendor_communication\threads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178635273460bc28f0495601-58622597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af25a4b6fc229424ade6b400e0fcb01736822fe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\views\\vendor_communication\\threads.tpl',
      1 => 1621936855,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '178635273460bc28f0495601-58622597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'search' => 0,
    'addons' => 0,
    'company_id' => 0,
    'ajax_class' => 0,
    'c_url' => 0,
    'rev' => 0,
    'sort_sign' => 0,
    'c_dummy' => 0,
    'threads' => 0,
    'auth' => 0,
    'thread' => 0,
    'has_new_message' => 0,
    'settings' => 0,
    'active_thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc28f05c5df0_27410595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc28f05c5df0_27410595')) {function content_60bc28f05c5df0_27410595($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','vendor','message','date','vendor_communication.contact_with','vendor_communication.no_threads_found','vendor_communication.thread','vendor_communication.messages','id','vendor','message','date','vendor_communication.contact_with','vendor_communication.no_threads_found','vendor_communication.thread','vendor_communication.messages'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_messages']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value)), 0);?>

    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<table class="ty-table ty-vendor-communication-search" id="threads_table">
    <thead>
    <tr>
        <th width="" class="ty-vendor-communication-search__label hidden-phone">&nbsp;</th>
        <th width="" class="nowrap"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="thread") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <th width=""><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=company&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("vendor");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="company") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php }?>
        <th width=""><?php echo $_smarty_tpl->__("message");?>
</th>
        <th width=""><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="last_updated") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars["thread"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["thread"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["thread"]->key => $_smarty_tpl->tpl_vars["thread"]->value) {
$_smarty_tpl->tpl_vars["thread"]->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['has_new_message'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id']!=$_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']&&$_smarty_tpl->tpl_vars['thread']->value['user_status']==(defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null), null, 0);?>

        <tr>
            <td class="ty-vendor-communication-search__item ty-vendor-communication-search__label hidden-phone">
                <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                    <span class="ty-new__label"></span>
                <?php }?>
            </td>
            <td class="ty-vendor-communication-search__item ty-vendor-communication-search__thread-id">
                <a class="cm-vendor-communication-thread-dialog-opener" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                        <span class="ty-new__label hidden-desktop hidden-tablet"></span>
                    <?php }?>
                    <strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
</strong>
                </a>
            </td>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__company">
                    <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>class="ty-new__text"<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                </td>
            <?php }?>
            <td class="ty-vendor-communication-search__item ty-vendor-communication-search__message">
                <a class="cm-vendor-communication-thread-dialog-opener clearfix <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],50), ENT_QUOTES, 'UTF-8');?>
</a>
            </td>
            <td class="ty-vendor-communication-search__item ty-nowrap">
                <a class="cm-vendor-communication-thread-dialog-opener <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a>
            </td>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tr>

        <div id="view_thread_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.contact_with",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id'],"[thread_company]"=>$_smarty_tpl->tpl_vars['thread']->value['company']));?>
"></div>
        <?php }
if (!$_smarty_tpl->tpl_vars["thread"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="7"><p class="ty-no-items"><?php echo $_smarty_tpl->__("vendor_communication.no_threads_found");?>
</p></td>
        </tr>
    <?php } ?>
    <!--threads_table--></table>


<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['active_thread']->value) {?>
    <div class="cm-vendor-communication-thread-dialog-auto-open" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div id="view_thread_auto_open_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['active_thread']->value));?>
"></div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("vendor_communication.messages");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/vendor_communication.js"),$_smarty_tpl);?>



<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/threads.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/threads.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order']=="asc") {?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-down-dir\"></i>", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['sort_sign'] = new Smarty_variable("<i class=\"ty-icon-up-dir\"></i>", null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax", null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['rev'] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_communication']['show_on_messages']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'show_form'=>true), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'vendor_name'=>fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value)), 0);?>

    <?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<table class="ty-table ty-vendor-communication-search" id="threads_table">
    <thead>
    <tr>
        <th width="" class="ty-vendor-communication-search__label hidden-phone">&nbsp;</th>
        <th width="" class="nowrap"><a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=thread&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="thread") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <th width=""><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=company&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("vendor");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="company") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php }?>
        <th width=""><?php echo $_smarty_tpl->__("message");?>
</th>
        <th width=""><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=last_updated&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="last_updated") {
echo $_smarty_tpl->tpl_vars['sort_sign']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars["thread"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["thread"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['threads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["thread"]->key => $_smarty_tpl->tpl_vars["thread"]->value) {
$_smarty_tpl->tpl_vars["thread"]->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['has_new_message'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth']->value['user_id']!=$_smarty_tpl->tpl_vars['thread']->value['last_message_user_id']&&$_smarty_tpl->tpl_vars['thread']->value['user_status']==(defined('VC_THREAD_STATUS_HAS_NEW_MESSAGE') ? constant('VC_THREAD_STATUS_HAS_NEW_MESSAGE') : null), null, 0);?>

        <tr>
            <td class="ty-vendor-communication-search__item ty-vendor-communication-search__label hidden-phone">
                <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                    <span class="ty-new__label"></span>
                <?php }?>
            </td>
            <td class="ty-vendor-communication-search__item ty-vendor-communication-search__thread-id">
                <a class="cm-vendor-communication-thread-dialog-opener" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['has_new_message']->value) {?>
                        <span class="ty-new__label hidden-desktop hidden-tablet"></span>
                    <?php }?>
                    <strong>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
</strong>
                </a>
            </td>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <td class="ty-vendor-communication-search__item ty-vendor-communication-search__company">
                    <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>class="ty-new__text"<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['company'], ENT_QUOTES, 'UTF-8');?>
</a>
                </td>
            <?php }?>
            <td class="ty-vendor-communication-search__item ty-vendor-communication-search__message">
                <a class="cm-vendor-communication-thread-dialog-opener clearfix <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['last_message'],50), ENT_QUOTES, 'UTF-8');?>
</a>
            </td>
            <td class="ty-vendor-communication-search__item ty-nowrap">
                <a class="cm-vendor-communication-thread-dialog-opener <?php if ($_smarty_tpl->tpl_vars['thread']->value['new_message']) {?>ty-new__text<?php }?>" href="<?php echo htmlspecialchars(fn_url("vendor_communication.view?thread_id=".((string)$_smarty_tpl->tpl_vars['thread']->value['thread_id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['thread']->value['last_updated'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</a>
            </td>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_communication:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_communication:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tr>

        <div id="view_thread_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['thread_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.contact_with",array("[thread_id]"=>$_smarty_tpl->tpl_vars['thread']->value['thread_id'],"[thread_company]"=>$_smarty_tpl->tpl_vars['thread']->value['company']));?>
"></div>
        <?php }
if (!$_smarty_tpl->tpl_vars["thread"]->_loop) {
?>
        <tr class="ty-table__no-items">
            <td colspan="7"><p class="ty-no-items"><?php echo $_smarty_tpl->__("vendor_communication.no_threads_found");?>
</p></td>
        </tr>
    <?php } ?>
    <!--threads_table--></table>


<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['active_thread']->value) {?>
    <div class="cm-vendor-communication-thread-dialog-auto-open" data-ca-thread-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div id="view_thread_auto_open_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['active_thread']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden ty-vendor-communication-view-thread" title="<?php echo $_smarty_tpl->__("vendor_communication.thread",array("[thread_id]"=>$_smarty_tpl->tpl_vars['active_thread']->value));?>
"></div>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("vendor_communication.messages");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/vendor_communication.js"),$_smarty_tpl);?>



<?php }?><?php }} ?>
