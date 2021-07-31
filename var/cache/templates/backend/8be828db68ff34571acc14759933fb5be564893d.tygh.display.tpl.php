<?php /* Smarty version Smarty-3.1.21, created on 2021-05-28 04:02:46
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\product_features\components\bulk_edit\display.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182068328960b0413616ff08-56007718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be828db68ff34571acc14759933fb5be564893d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\product_features\\components\\bulk_edit\\display.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182068328960b0413616ff08-56007718',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b041361a3772_30662790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b041361a3772_30662790')) {function content_60b041361a3772_30662790($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('feature_display_on_product','feature_hide_on_product','feature_display_on_catalog','feature_hide_on_catalog','feature_display_on_header','feature_hide_on_header'));
?>
<li>
    <a class="cm-ajax cm-post cm-ajax-send-form"
        href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.m_set_display?display_on=product&value=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="#manage_product_features_form"
    >
        <?php echo $_smarty_tpl->__("feature_display_on_product");?>

    </a>
</li>

<li>
    <a class="cm-ajax cm-post cm-ajax-send-form"
        href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.m_set_display?display_on=product&value=".$_tmp4), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="#manage_product_features_form"
    >
        <?php echo $_smarty_tpl->__("feature_hide_on_product");?>

    </a>
</li>

<li>
    <a class="cm-ajax cm-post cm-ajax-send-form"
        href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.m_set_display?display_on=catalog&value=".$_tmp5), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="#manage_product_features_form"
    >
        <?php echo $_smarty_tpl->__("feature_display_on_catalog");?>

    </a>
</li>

<li>
    <a class="cm-ajax cm-post cm-ajax-send-form"
        href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_tmp6=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.m_set_display?display_on=catalog&value=".$_tmp6), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="#manage_product_features_form"
    >
        <?php echo $_smarty_tpl->__("feature_hide_on_catalog");?>

    </a>
</li>

<li>
    <a class="cm-ajax cm-post cm-ajax-send-form"
        href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');
$_tmp7=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.m_set_display?display_on=header&value=".$_tmp7), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="#manage_product_features_form"
    >
        <?php echo $_smarty_tpl->__("feature_display_on_header");?>

    </a>
</li>

<li>
    <a class="cm-ajax cm-post cm-ajax-send-form"
        href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_tmp8=ob_get_clean();?><?php echo htmlspecialchars(fn_url("product_features.m_set_display?display_on=header&value=".$_tmp8), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-form="#manage_product_features_form"
    >
        <?php echo $_smarty_tpl->__("feature_hide_on_header");?>

    </a>
</li>
<?php }} ?>
