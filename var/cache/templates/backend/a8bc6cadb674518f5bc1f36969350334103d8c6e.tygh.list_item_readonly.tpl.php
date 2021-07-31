<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:16:29
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\components\list_item_readonly.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96904967360bc2ffd3e0717-64869267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8bc6cadb674518f5bc1f36969350334103d8c6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\components\\list_item_readonly.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96904967360bc2ffd3e0717-64869267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_text_storefront_names' => 0,
    'storefront' => 0,
    'get_company_ids' => 0,
    'get_language_ids' => 0,
    'get_currency_ids' => 0,
    'get_country_codes' => 0,
    'force_selector_display' => 0,
    'select_mode' => 0,
    'settings' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc2ffd411ca8_77453402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc2ffd411ca8_77453402')) {function content_60bc2ffd411ca8_77453402($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','default_storefront','url','storefront_status'));
?>

<?php $_smarty_tpl->tpl_vars['show_text_storefront_names'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_text_storefront_names']->value)===null||$tmp==='' ? (!fn_check_view_permissions("storefronts.update","GET")) : $tmp), null, 0);?>
<tr class="storefront"
    data-ca-storefront-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
    <?php if ($_smarty_tpl->tpl_vars['get_company_ids']->value) {?>
        data-ca-storefront-company-ids="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCompanyIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_language_ids']->value) {?>
        data-ca-storefront-language-ids="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getLanguageIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_currency_ids']->value) {?>
        data-ca-storefront-currency-ids="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCurrencyIds()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['get_country_codes']->value) {?>
        data-ca-storefront-country-codes="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['storefront']->value->getCountryCodes()), ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <td data-th=""
        class="center <?php if (!$_smarty_tpl->tpl_vars['force_selector_display']->value) {?>mobile-hide<?php }?>"
    >
        <?php if ($_smarty_tpl->tpl_vars['select_mode']->value=="multiple") {?>
            <input type="checkbox"
                   name="storefront_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-item storefront__selector storefront__selector--multiple"
            />
        <?php } elseif ($_smarty_tpl->tpl_vars['select_mode']->value=="single") {?>
            <input type="radio"
                   name="storefront_id"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->storefront_id, ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-item storefront__selector storefront__selector--single"
            />
        <?php } else { ?>
            &nbsp;
        <?php }?>
    </td>

    <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_text_storefront_names']->value) {?>
            <span class="storefront__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->name, ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } else { ?>
            <a class="storefront__name"
               href="<?php echo htmlspecialchars(fn_url("storefronts.update?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id)), ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['storefront']->value->is_default) {?>
            <span class="muted">(<?php echo $_smarty_tpl->__("default_storefront");?>
)</span>
        <?php }?>
    </td>

    <td width="45%" data-th="<?php echo $_smarty_tpl->__("url");?>
">
        <a class="storefront__url"
           href="<?php if ($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']===smarty_modifier_enum("YesNo::NO")) {?>http://<?php } else { ?>https://<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->url, ENT_QUOTES, 'UTF-8');?>
"
           target="_blank"
        ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value->url, ENT_QUOTES, 'UTF-8');?>
</a>
    </td>

    <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("storefront_status");?>
">
        <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"company-switch-storefront-status-button storefront__status",'checked'=>$_smarty_tpl->tpl_vars['storefront']->value->status==smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-submit-url"=>'storefronts.update_status',"data-ca-storefront-id"=>$_smarty_tpl->tpl_vars['storefront']->value->storefront_id,"data-ca-opened-status"=>$_tmp1,"data-ca-closed-status"=>$_tmp2,"data-ca-return-url"=>$_smarty_tpl->tpl_vars['return_url']->value),'input_readonly'=>true,'input_disabled'=>true), 0);?>

    </td>
</tr>
<?php }} ?>
