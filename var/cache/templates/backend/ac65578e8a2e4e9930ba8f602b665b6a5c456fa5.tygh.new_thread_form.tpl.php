<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:40:19
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_communication\views\vendor_communication\components\new_thread_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210556053560bf2cf3eb4186-95566526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac65578e8a2e4e9930ba8f602b665b6a5c456fa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_communication\\views\\vendor_communication\\components\\new_thread_form.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '210556053560bf2cf3eb4186-95566526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object_id' => 0,
    'object_type' => 0,
    'thread_id' => 0,
    'object' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2cf4022e13_90884337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2cf4022e13_90884337')) {function content_60bf2cf4022e13_90884337($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('subject','vendor','vendor','all','vendor_communication.your_message_to_vendor_name','vendor_communication.your_message_to_admin','vendor_communication.type_message','send'));
?>
<div id="new_thread_dialog_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form action="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_url("vendor_communication.create_thread?communication_type=".$_tmp1), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit add_message_form" name="add_thread_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="new_thread_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="new_thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
,threads_table" />
        <input type="hidden" name="redirect_url" value="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("vendor_communication.threads?communication_type=".$_tmp2), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[communication_type]" value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"), ENT_QUOTES, 'UTF-8');?>
" />


        <div id="new_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="add_message_form--wrapper">

            <div class="control-group">
                <label for="thread_message_subject_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label vendor-communication-add-message__title cm-required"><?php echo $_smarty_tpl->__("subject");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value&&$_smarty_tpl->tpl_vars['object_type']->value!=(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
                        <div class="vendor-communication-object-data pull-right">
                            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/thread_object_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['object']->value,'new_thread'=>true), 0);?>

                        </div>
                    <?php } else { ?>
                        <input type="text" name="thread[subject]" id="thread_message_subject_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large cm-required"/>
                    <?php }?>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
                <div class="control-group">
                    <label class="control-label vendor-communication-add-message__title cm-required cm-multiple-checkboxes"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                    <label class="control-label cm-required hidden" for="thread_message_company_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
                            <div class="controls">
                                <input type="hidden" name="thread[companies][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                <div class="additional-info pull-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value['company'], ENT_QUOTES, 'UTF-8');?>
</div>
                            </div>
                        <?php } else { ?>
                            <div class="controls">
                                <label class="checkbox">
                                    <input type="checkbox" name="thread[companies][all]" class="vendor-communication-add-message__all-companies" id="thread_message_all_companies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y">
                                    <?php echo $_smarty_tpl->__("all");?>

                                </label>
                            </div>
                            <div class="controls">
                                <div class="cm-field-container">
                                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('select_id'=>"thread_message_company_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'input_name'=>"thread[companies][]",'multiple'=>true,'show_advanced'=>false,'type'=>"selection",'close_on_select'=>false,'meta'=>"input-large vendor-communication-add-message__company"), 0);?>

                                </div>
                            </div>
                        <?php }?>
                 </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
                <input type="hidden" name="thread[companies][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <div class="control-group">
                <label for="thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label vendor-communication-add-message__title cm-required">
                    <?php if ($_smarty_tpl->tpl_vars['object']->value['object_type']==(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
                        <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_vendor_name",array("[vendor_name]"=>$_smarty_tpl->tpl_vars['object']->value['company']));?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_admin");?>

                    <?php }?>
                </label>
                <textarea
                        id="thread_message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        name="thread[message]"
                        class="cm-focus add_message_form--textarea cm-required"
                        rows="5"
                        autofocus
                        placeholder="<?php echo $_smarty_tpl->__("vendor_communication.type_message");?>
"
                ></textarea>
                <div class="buttons-container">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send"),'cancel_action'=>"close",'but_target_form'=>"add_thread_form_".((string)$_smarty_tpl->tpl_vars['object_id']->value)), 0);?>

                </div>
            </div>
        </div>
    </form>
</div>
<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/thread_form.js"),$_smarty_tpl);?>

<?php }} ?>
