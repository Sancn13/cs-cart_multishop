<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:27:11
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\buttons\update_for_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10130577260af57df690731-72908904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fffbb013adf17ef3e9e8da9ce616e7c3182230c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\buttons\\update_for_all.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10130577260af57df690731-72908904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'absolute_position' => 0,
    'hide_element' => 0,
    'settings' => 0,
    'title_act' => 0,
    'title_dis' => 0,
    'runtime' => 0,
    'object_ids' => 0,
    'object_id' => 0,
    'names' => 0,
    'name' => 0,
    'static_position' => 0,
    'visible' => 0,
    'meta' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af57df6fa589_92325977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af57df6fa589_92325977')) {function content_60af57df6fa589_92325977($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.to_json.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('update_for_all_hid_act','update_for_all_hid_dis','update_for_all_act','update_for_all_dis'));
?>
<?php if ($_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars['absolute_position'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['absolute_position']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>
        <?php $_smarty_tpl->tpl_vars['title_act'] = new Smarty_variable($_smarty_tpl->__("update_for_all_hid_act"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_dis'] = new Smarty_variable($_smarty_tpl->__("update_for_all_hid_dis"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title_act'] = new Smarty_variable($_smarty_tpl->__("update_for_all_act"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['title_dis'] = new Smarty_variable($_smarty_tpl->__("update_for_all_dis"), null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']=='active') {?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title_act']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable("visible", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title_dis']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
        <?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable("hidden", null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['object_ids'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['object_ids']->value)===null||$tmp==='' ? array($_smarty_tpl->tpl_vars['object_id']->value) : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['names'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['names']->value)===null||$tmp==='' ? array($_smarty_tpl->tpl_vars['object_id']->value=>$_smarty_tpl->tpl_vars['name']->value) : $tmp), null, 0);?>

    <div class="update-for-all
        <?php if ($_smarty_tpl->tpl_vars['absolute_position']->value) {?>
            update-for-all--absolute
        <?php } elseif ($_smarty_tpl->tpl_vars['static_position']->value) {?>
            update-for-all--static
        <?php }?>
    ">
        <a class="cm-update-for-all-icon
            icon-group
            update-for-all__icon
            cm-tooltip
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visible']->value, ENT_QUOTES, 'UTF-8');?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="#"
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-title-active="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_act']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-title-disabled="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_dis']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-disable-id="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['object_ids']->value), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>data-ca-hide-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hide_element']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        </a>
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['object_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['object_id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
            <input type="hidden"
                class="cm-no-hide-input"
                id="hidden_update_all_vendors_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all']==="not_active"&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                    disabled="disabled"
                <?php }?>
            />
        <?php } ?>
    </div>
<?php }?>
<?php }} ?>
