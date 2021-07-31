<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 07:22:05
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\hybrid_auth\views\hybrid_auth\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158879122860b1c16d112513-03187240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29b8595005f3de13823498308fe56232af9a5d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\hybrid_auth\\views\\hybrid_auth\\update.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '158879122860b1c16d112513-03187240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'available_providers' => 0,
    'provider_code' => 0,
    'provider_data' => 0,
    'providers_schema' => 0,
    'provider' => 0,
    'section' => 0,
    'add_storefront_text' => 0,
    'is_sharing_enabled' => 0,
    'runtime' => 0,
    'param' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b1c16d143ad1_34050994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b1c16d143ad1_34050994')) {function content_60b1c16d143ad1_34050994($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','storefronts','provider','name','add_storefronts','add_companies','all_storefronts'));
?>
<div id="content_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="provider_form" class="form-horizontal form-edit">
        <input type="hidden" name="provider_data[provider_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div class="tabs cm-j-tabs">
            <ul class="nav nav-tabs">
                <li id="tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")) {?>
                    <li id="tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("storefronts");?>
</a></li>
                <?php }?>
                <li id="tab_callback_urls_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__('hybrid_auth.callback_url');?>
</a></li>
            </ul>
        </div>

        <div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div id="content_tab_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

                <div class="control-group">
                    <label for="section_provider_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("provider");?>
:</label>
                    <div class="controls">
                        <select name="provider_data[provider]" id="provider" class="cm-select-provider">
                            <?php  $_smarty_tpl->tpl_vars['provider_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['provider_code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_providers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['provider_code']->key => $_smarty_tpl->tpl_vars['provider_code']->value) {
$_smarty_tpl->tpl_vars['provider_code']->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_code']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['provider_code']->value==$_smarty_tpl->tpl_vars['provider_data']->value['provider']) {?> selected="selected"<?php }?> data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-provider="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider_code']->value]['provider'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label for="section_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input type="text" name="provider_data[name]" id="section_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('provider'=>$_smarty_tpl->tpl_vars['provider']->value), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("addons/hybrid_auth/views/hybrid_auth/provider_params.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('provider'=>$_smarty_tpl->tpl_vars['provider']->value), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"provider_data[status]",'id'=>"provider_status",'obj'=>$_smarty_tpl->tpl_vars['section']->value), 0);?>

            </div>
            <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")) {?>
                <div class="hidden" id="content_tab_storefronts_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->tpl_vars['add_storefront_text'] = new Smarty_variable($_smarty_tpl->__("add_storefronts"), null, 0);?>
                    <?php if (fn_allowed_for("ULTIMATE")) {?>
                        <?php $_smarty_tpl->tpl_vars['add_storefront_text'] = new Smarty_variable($_smarty_tpl->__("add_companies"), null, 0);?>
                    <?php }?>
                    <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'input_name'=>"provider_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['provider_data']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0);?>

                </div>
            <?php }?>
            <div class="hidden" id="content_tab_callback_urls_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['param']->value['type']==="template") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['param']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label'=>$_smarty_tpl->tpl_vars['param']->value['label'],'callback_url'=>$_smarty_tpl->tpl_vars['param']->value['callback_url']), 0);?>

                    <?php }?>
                <?php } ?>
            <!--content_tab_callback_urls_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[hybrid_auth.update_provider]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

        </div>

    </form>
<!--content_group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
