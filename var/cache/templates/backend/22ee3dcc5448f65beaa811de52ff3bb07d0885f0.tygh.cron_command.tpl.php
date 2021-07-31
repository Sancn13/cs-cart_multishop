<?php /* Smarty version Smarty-3.1.21, created on 2021-07-17 05:59:12
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\settings\components\cron_command.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211490812360f247802ff223-02942041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22ee3dcc5448f65beaa811de52ff3bb07d0885f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\settings\\components\\cron_command.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '211490812360f247802ff223-02942041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60f2478032aa08_36063457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f2478032aa08_36063457')) {function content_60f2478032aa08_36063457($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.recalculate_rating','vendor_rating.run_recalculation','tip','vendor_rating.run_rating_calculation_by_cron'));
?>
<div class="control-group setting-wide vendor-rating-recalculate">
    <label class="control-label">
        <?php echo $_smarty_tpl->__("vendor_rating.recalculate_rating");?>

    </label>
    <div class="controls">
        <p>
            <a href="<?php echo htmlspecialchars(fn_url("vendor_rating.recalculate"), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-post vendor-rating-recalculate__run" data-ca-target-id="rating">
                <?php echo $_smarty_tpl->__("vendor_rating.run_recalculation");?>

            </a>
        </p>

        <div class="vendor-rating-recalculate__results" id="rating">
        <!--rating--></div>

        <?php echo $_smarty_tpl->getSubTemplate ("common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('widget_copy_title'=>$_smarty_tpl->__("tip"),'widget_copy_text'=>$_smarty_tpl->__("vendor_rating.run_rating_calculation_by_cron"),'widget_copy_code_text'=>fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"vendor_rating.recalculate","p"))), 0);?>

    </div>
</div>
<?php }} ?>
