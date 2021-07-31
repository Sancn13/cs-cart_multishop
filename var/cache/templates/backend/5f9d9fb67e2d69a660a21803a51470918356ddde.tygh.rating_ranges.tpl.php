<?php /* Smarty version Smarty-3.1.21, created on 2021-07-17 05:59:12
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\settings\components\rating_ranges.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20524901360f247804397d5-31663156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f9d9fb67e2d69a660a21803a51470918356ddde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\settings\\components\\rating_ranges.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20524901360f247804397d5-31663156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60f24780464d27_16720275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f24780464d27_16720275')) {function content_60f24780464d27_16720275($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.bronze_rating_lower_limit','vendor_rating.silver_rating_lower_limit','vendor_rating.gold_rating_lower_limit'));
?>
<div class="control-group setting-wide">
    <label for="elm_bronze_rating_lower_limit" class="control-label cm-required">
        <?php echo $_smarty_tpl->__("vendor_rating.bronze_rating_lower_limit");?>

    </label>
    <div class="controls">
        <input type="text"
               id="elm_bronze_rating_lower_limit"
               class="input input-small cm-numeric"
               name="addon_settings[bronze_rating_lower_limit]"
               data-a-sign="%"
               data-p-sign="s"
               data-m-dec="0"
               data-v-min="0"
               data-v-max="100"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'], ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>

<div class="control-group setting-wide">
    <label for="elm_silver_rating_lower_limit" class="control-label cm-required">
        <?php echo $_smarty_tpl->__("vendor_rating.silver_rating_lower_limit");?>

    </label>
    <div class="controls">
        <input type="text"
               id="elm_silver_rating_lower_limit"
               class="input input-small cm-numeric"
               name="addon_settings[silver_rating_lower_limit]"
               data-a-sign="%"
               data-p-sign="s"
               data-m-dec="0"
               data-v-min="0"
               data-v-max="100"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'], ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>

<div class="control-group setting-wide">
    <label for="elm_gold_rating_lower_limit" class="control-label cm-required">
        <?php echo $_smarty_tpl->__("vendor_rating.gold_rating_lower_limit");?>

    </label>
    <div class="controls">
        <input type="text"
               id="elm_gold_rating_lower_limit"
               class="input input-small cm-numeric"
               name="addon_settings[gold_rating_lower_limit]"
               data-a-sign="%"
               data-p-sign="s"
               data-m-dec="0"
               data-v-min="0"
               data-v-max="100"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'], ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>
<?php }} ?>
