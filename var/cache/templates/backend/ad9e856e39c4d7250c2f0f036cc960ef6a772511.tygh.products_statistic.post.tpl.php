<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:48:02
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_data_premoderation\hooks\index\products_statistic.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116075096060acd5e2885637-77951118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad9e856e39c4d7250c2f0f036cc960ef6a772511' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\index\\products_statistic.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '116075096060acd5e2885637-77951118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_data_premoderation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd5e28b82c3_49560752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd5e28b82c3_49560752')) {function content_60acd5e28b82c3_49560752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.require_approval','vendor_data_premoderation.disapproved'));
?>
<div class="dashboard-card">
    <div class="dashboard-card-title">
        <?php echo $_smarty_tpl->__("vendor_data_premoderation.require_approval");?>

    </div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp2), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>

<div class="dashboard-card">
    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproved");?>
</div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }} ?>
