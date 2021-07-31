<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:59:35
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\pingpp\views\payments\components\cc_processors\pingpp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149893657860b30da747d797-74898282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14882d0ba48ba2022b9fcd7884b469d127c00185' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\pingpp\\views\\payments\\components\\cc_processors\\pingpp.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '149893657860b30da747d797-74898282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment' => 0,
    'currencies' => 0,
    'id' => 0,
    'processor_params' => 0,
    'wx_enabled' => 0,
    'pingpp_channels' => 0,
    'channel' => 0,
    'is_enabled' => 0,
    'definition' => 0,
    'scope' => 0,
    'setting' => 0,
    'setting_id' => 0,
    'variant_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b30da7547772_34673029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b30da7547772_34673029')) {function content_60b30da7547772_34673029($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('pingpp.enable_cny_currency','pingpp.general_settings','pingpp.app_id','pingpp.api_key','pingpp.order_prefix_characters','pingpp.order_prefix','pingpp.wx_settings','pingpp.wx_app_id','pingpp.wx_app_secret','pingpp.channels','pingpp.channel.','pingpp.scope.','pingpp.channel.','pingpp.channel.'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['payment']->value['id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<div class="pingpp-configuration-form">
<?php if (!$_smarty_tpl->tpl_vars['currencies']->value['CNY']) {?>
    <div class="alert alert-block">
        <p class=""><?php echo $_smarty_tpl->__("pingpp.enable_cny_currency");?>
</p>
    </div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("pingpp.general_settings")), 0);?>


<div class="control-group">
    <label for="elm_app_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("pingpp.app_id");?>
:</label>
    <div class="controls">
        <input id="elm_app_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="text"
               name="payment_data[processor_params][app_id]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['app_id'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label for="elm_api_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("pingpp.api_key");?>
:</label>
    <div class="controls">
        <input id="elm_api_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="text"
               name="payment_data[processor_params][api_key]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['api_key'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label for="elm_order_prefix<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-regexp cm-required"
           data-ca-regexp="^[a-zA-Z0-9]{7,10}$"
           data-ca-message="<?php echo $_smarty_tpl->__("pingpp.order_prefix_characters");?>
"
    ><?php echo $_smarty_tpl->__("pingpp.order_prefix");?>
:</label>
    <div class="controls">
        <input id="elm_order_prefix<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="text"
               name="payment_data[processor_params][order_prefix]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
"
               maxlength="10"
        />
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("pingpp.wx_settings")), 0);?>


<div class="control-group">
    <label for="elm_app_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label pingpp-wx-required <?php if ($_smarty_tpl->tpl_vars['wx_enabled']->value) {?>cm-required<?php }?>"
    ><?php echo $_smarty_tpl->__("pingpp.wx_app_id");?>
:</label>
    <div class="controls">
        <input id="elm_app_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="text"
               name="payment_data[processor_params][wx_app_id]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['wx_app_id'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<div class="control-group">
    <label for="elm_api_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label pingpp-wx-required <?php if ($_smarty_tpl->tpl_vars['wx_enabled']->value) {?>cm-required<?php }?>"
    ><?php echo $_smarty_tpl->__("pingpp.wx_app_secret");?>
:</label>
    <div class="controls">
        <input id="elm_api_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="text"
               name="payment_data[processor_params][wx_app_secret]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['wx_app_secret'], ENT_QUOTES, 'UTF-8');?>
"/>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("pingpp.channels")), 0);?>


<?php  $_smarty_tpl->tpl_vars['definition'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['definition']->_loop = false;
 $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pingpp_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['definition']->key => $_smarty_tpl->tpl_vars['definition']->value) {
$_smarty_tpl->tpl_vars['definition']->_loop = true;
 $_smarty_tpl->tpl_vars['channel']->value = $_smarty_tpl->tpl_vars['definition']->key;
?>
    <?php $_smarty_tpl->tpl_vars['is_enabled'] = new Smarty_variable($_smarty_tpl->tpl_vars['processor_params']->value['channels'][$_smarty_tpl->tpl_vars['channel']->value]['is_enabled']=="Y", null, 0);?>
    <div class="control-group pingpp-channel-wrapper">
        <label class="checkbox strong">
            <input type="hidden"
                   name="payment_data[processor_params][channels][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
][is_enabled]"
                   value="N"
            />
            <input type="checkbox"
                   name="payment_data[processor_params][channels][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
][is_enabled]"
                   <?php if ($_smarty_tpl->tpl_vars['is_enabled']->value) {?>checked="checked"<?php }?>
                   value="Y"
                   id="sw_settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-combo-checkbox cm-combination"
                   data-ca-pingpp-channel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
            <?php echo $_smarty_tpl->__("pingpp.channel.".((string)$_smarty_tpl->tpl_vars['channel']->value));?>

            <span class="pingpp-scopes">
                <?php  $_smarty_tpl->tpl_vars['scope'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scope']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['definition']->value['scope']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scope']->key => $_smarty_tpl->tpl_vars['scope']->value) {
$_smarty_tpl->tpl_vars['scope']->_loop = true;
?>
                    <i class="pingpp-scope-icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scope']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("pingpp.scope.".((string)$_smarty_tpl->tpl_vars['scope']->value));?>
"></i>
                    <input type="hidden"
                           name="payment_data[processor_params][channels][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
][scopes][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scope']->value, ENT_QUOTES, 'UTF-8');?>
"
                    />
                <?php } ?>
            </span>
        </label>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['definition']->value['settings']) {?>
        <div class="pingpp-channel-settings" id="settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" style="<?php if (!$_smarty_tpl->tpl_vars['is_enabled']->value) {?>display: none;<?php }?>">
            <?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_smarty_tpl->tpl_vars['setting_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['definition']->value['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->_loop = true;
 $_smarty_tpl->tpl_vars['setting_id']->value = $_smarty_tpl->tpl_vars['setting']->key;
?>
                <div class="control-group">
                    <label class="control-label <?php if ($_smarty_tpl->tpl_vars['is_enabled']->value&&$_smarty_tpl->tpl_vars['setting']->value['type']!="select") {?>cm-required<?php }?>"
                           for="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
_settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    ><?php echo $_smarty_tpl->__("pingpp.channel.".((string)$_smarty_tpl->tpl_vars['channel']->value).".settings.".((string)$_smarty_tpl->tpl_vars['setting_id']->value));?>
:</label>
                    <div class="controls">
                        <?php if ($_smarty_tpl->tpl_vars['setting']->value['type']=="select") {?>
                            <select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
_settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    name="payment_data[processor_params][channels][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
][settings][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            >
                                <?php  $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setting']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant_id']->key => $_smarty_tpl->tpl_vars['variant_id']->value) {
$_smarty_tpl->tpl_vars['variant_id']->_loop = true;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['channels'][$_smarty_tpl->tpl_vars['channel']->value]['settings'][$_smarty_tpl->tpl_vars['setting_id']->value]==$_smarty_tpl->tpl_vars['variant_id']->value) {?>selected="selected"<?php }?>
                                    ><?php echo $_smarty_tpl->__("pingpp.channel.".((string)$_smarty_tpl->tpl_vars['channel']->value).".settings.".((string)$_smarty_tpl->tpl_vars['setting_id']->value).".variants.".((string)$_smarty_tpl->tpl_vars['variant_id']->value));?>
</option>
                                <?php } ?>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value['type']=="text"||$_smarty_tpl->tpl_vars['setting']->value['type']=="password") {?>
                            <input id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
_settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
                                   name="payment_data[processor_params][channels][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
][settings][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['channels'][$_smarty_tpl->tpl_vars['channel']->value]['settings'][$_smarty_tpl->tpl_vars['setting_id']->value], ENT_QUOTES, 'UTF-8');?>
"
                                   rows="5"
                            />
                        <?php } elseif ($_smarty_tpl->tpl_vars['setting']->value['type']=="textarea") {?>
                            <textarea id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
_settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                      name="payment_data[processor_params][channels][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value, ENT_QUOTES, 'UTF-8');?>
][settings][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['channels'][$_smarty_tpl->tpl_vars['channel']->value]['settings'][$_smarty_tpl->tpl_vars['setting_id']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
                        <?php }?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php }?>
<?php } ?>
</div><?php }} ?>
