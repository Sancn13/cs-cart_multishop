<?php /* Smarty version Smarty-3.1.21, created on 2021-07-17 05:59:12
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\settings\components\start_rating_period.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170188197560f247801a0a63-43549359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bfe106d885544ba7c6599e3ddec9172aea32914' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\settings\\components\\start_rating_period.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170188197560f247801a0a63-43549359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60f2478023eaa5_73423818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f2478023eaa5_73423818')) {function content_60f2478023eaa5_73423818($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.start_rating_period'));
?>
<div class="control-group setting-wide">
    <label for="elm_start_rating_period" class="control-label">
        <?php echo $_smarty_tpl->__("vendor_rating.start_rating_period");?>

    </label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_start_rating_period",'date_name'=>"addon_settings[start_rating_period]",'date_val'=>(($tmp = @$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['start_rating_period'])===null||$tmp==='' ? 0 : $tmp),'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

    </div>
</div>
<?php }} ?>
