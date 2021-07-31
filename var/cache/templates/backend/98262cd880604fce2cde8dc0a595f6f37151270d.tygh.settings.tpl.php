<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 07:18:21
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_debt_payout\settings\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33398294960bc4c8d0f07b9-05487460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98262cd880604fce2cde8dc0a595f6f37151270d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_debt_payout\\settings\\settings.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '33398294960bc4c8d0f07b9-05487460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_setting_ids' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc4c8d15c054_97591455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4c8d15c054_97591455')) {function content_60bc4c8d15c054_97591455($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.actions_on_suspended','vendor_debt_payout.hide_products','vendor_debt_payout.block_admin_panel','vendor_debt_payout.disable_suspended_vendors','vendor_debt_payout.days_before_disable','vendor_debt_payout.day_or_days','vendor_debt_payout.notifications','vendor_debt_payout.admin_weekly_digest_of_suspended_vendors','vendor_debt_payout.edit_notifications_link','vendor_debt_payout.vendor_notifications','vendor_debt_payout.edit_notifications_link','vendor_debt_payout.admin_notifications','vendor_debt_payout.edit_notifications_link','vendor_debt_payout.vendor_notifications_about_disable','vendor_debt_payout.edit_notifications_link','vendor_debt_payout.admin_notifications_about_disable','vendor_debt_payout.edit_notifications_link'));
?>
<h4 class="subheader hand" data-toggle="collapse" data-target="#collapsable_addon_option_vendor_debt_payout_actions_on_suspended">
    <?php echo $_smarty_tpl->__("vendor_debt_payout.actions_on_suspended");?>

    <span class="exicon-collapse"></span></h4>
<div id="collapsable_addon_option_vendor_debt_payout_actions_on_suspended" class="in collapse">
    <fieldset>
        <div class="control-group setting-wide">
            <label class="control-label" for="elm_hide_products">
                <?php echo $_smarty_tpl->__("vendor_debt_payout.hide_products");?>
:
            </label>
            <div class="controls">
                <input type="hidden" name="addon_data[options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_setting_ids']->value['hide_products'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input type="checkbox" id="elm_hide_products" name="addon_data[options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_setting_ids']->value['hide_products'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['hide_products']==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group setting-wide">
            <label class="control-label" for="elm_block_admin_panel">
                <?php echo $_smarty_tpl->__("vendor_debt_payout.block_admin_panel");?>
:
            </label>
            <div class="controls">
                <input type="hidden" name="addon_data[options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_setting_ids']->value['block_admin_panel'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input type="checkbox" id="elm_block_admin_panel" name="addon_data[options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_setting_ids']->value['block_admin_panel'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['block_admin_panel']==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> />
            </div>
        </div>
        <div class="control-group setting-wide">
            <label class="control-label" for="elm_disable_suspended_vendors">
                <?php echo $_smarty_tpl->__("vendor_debt_payout.disable_suspended_vendors");?>
:
            </label>
            <div class="controls">
                <input type="hidden" name="addon_data[options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_setting_ids']->value['disable_suspended_vendors'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input
                        type="checkbox"
                        id="elm_disable_suspended_vendors"
                        name="addon_data[options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_setting_ids']->value['disable_suspended_vendors'], ENT_QUOTES, 'UTF-8');?>
]"
                        value="Y"
                        <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['disable_suspended_vendors']==smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>
                />
            </div>
        </div>

        <div id="container_disable_vendors_settings" <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['disable_suspended_vendors']!==smarty_modifier_enum("YesNo::YES")) {?>class="hidden"<?php }?>>
            <div class="control-group setting-wide">
                <label class="control-label" for="elm_days_before_disable">
                    <?php echo $_smarty_tpl->__("vendor_debt_payout.days_before_disable");?>
:
                </label>
                <div class="controls">
                    <input type="text"
                           class="input-small cm-numeric"
                           data-m-dec="0"
                           data-a-sign=" <?php echo $_smarty_tpl->__("vendor_debt_payout.day_or_days");?>
"
                           data-p-sign="s"
                           id="elm_days_before_disable"
                           name="addon_data[options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_setting_ids']->value['days_before_disable'], ENT_QUOTES, 'UTF-8');?>
]"
                           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['days_before_disable'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                </div>
            </div>
        </div>
    </fieldset>
</div>

<h4 class="subheader hand" data-toggle="collapse" data-target="#collapsable_addon_option_vendor_debt_payout_notifications">
    <?php echo $_smarty_tpl->__("vendor_debt_payout.notifications");?>

    <span class="exicon-collapse"></span></h4>
<div id="collapsable_addon_option_vendor_debt_payout_notifications" class="in collapse">
    <fieldset>
        <div class="control-group setting-wide">
            <label class="control-label" for="elm_admin_notifications">
                <?php echo $_smarty_tpl->__("vendor_debt_payout.admin_weekly_digest_of_suspended_vendors");?>
:
            </label>
            <div class="controls">
                <p><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("SiteArea::ADMIN_PANEL"), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::ADMIN"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_debt_payout.edit_notifications_link",array("[link]"=>fn_url("email_templates.update?code=vendor_debt_payout_weekly_digest_of_debtors&area=".$_tmp1."&event_id=vendor_debt_payout.weekly_digest_of_debtors&receiver=".$_tmp2)));?>
</p>
            </div>
        </div>

        <div class="control-group setting-wide">
            <label class="control-label" for="elm_vendor_notifications">
                <?php echo $_smarty_tpl->__("vendor_debt_payout.vendor_notifications");?>
:
            </label>
            <div class="controls">
                <p><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("SiteArea::ADMIN_PANEL"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::VENDOR"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_debt_payout.edit_notifications_link",array("[link]"=>fn_url("email_templates.update?code=vendor_debt_payout_vendor_days_before_suspended&area=".$_tmp3."&event_id=vendor_debt_payout.vendor_days_before_suspend&receiver=".$_tmp4)));?>
</p>
            </div>
        </div>

        <div class="control-group setting-wide">
            <label class="control-label" for="elm_admin_notifications">
                <?php echo $_smarty_tpl->__("vendor_debt_payout.admin_notifications");?>
:
            </label>
            <div class="controls">
                <p><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("SiteArea::ADMIN_PANEL"), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::ADMIN"), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_debt_payout.edit_notifications_link",array("[link]"=>fn_url("email_templates.update?code=vendor_debt_payout_email_admin_notification_vendor_status_changed_to_suspended&area=".$_tmp5."&event_id=vendor_debt_payout.vendor_status_changed_to_suspended&receiver=".$_tmp6)));?>
</p>
            </div>
        </div>

        <div id="container_disable_vendors_notify_settings" <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_debt_payout']['disable_suspended_vendors']!==smarty_modifier_enum("YesNo::YES")) {?>class="hidden"<?php }?>>
            <div class="control-group setting-wide">
                <label class="control-label" for="elm_admin_notifications_weekly">
                    <?php echo $_smarty_tpl->__("vendor_debt_payout.vendor_notifications_about_disable");?>
:
                </label>
                <div class="controls">
                    <p><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("SiteArea::ADMIN_PANEL"), ENT_QUOTES, 'UTF-8');
$_tmp7=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::VENDOR"), ENT_QUOTES, 'UTF-8');
$_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_debt_payout.edit_notifications_link",array("[link]"=>fn_url("email_templates.update?code=company_status_suspended_notification&area=".$_tmp7."&event_id=vendor_status_changed_suspended&receiver=".$_tmp8)));?>
</p>
                </div>
            </div>

            <div class="control-group setting-wide">
                <label class="control-label" for="elm_admin_notifications_weekly">
                    <?php echo $_smarty_tpl->__("vendor_debt_payout.admin_notifications_about_disable");?>
:
                </label>
                <div class="controls">
                    <p><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("SiteArea::ADMIN_PANEL"), ENT_QUOTES, 'UTF-8');
$_tmp9=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::ADMIN"), ENT_QUOTES, 'UTF-8');
$_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_debt_payout.edit_notifications_link",array("[link]"=>fn_url("email_templates.update?code=vendor_debt_payout_email_admin_notification_vendor_status_changed_to_disabled&area=".$_tmp9."&event_id=vendor_debt_payout.vendor_status_changed_to_disabled&receiver=".$_tmp10)));?>
</p>
                </div>
            </div>
        </div>
    </fieldset>
</div>
<?php }} ?>
