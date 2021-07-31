<?php /* Smarty version Smarty-3.1.21, created on 2021-07-17 05:59:11
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_rating\settings\config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159706453860f2477f8c2da5-22970690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95742d526fff62223850fcaa0628561e4e73df52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_rating\\settings\\config.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '159706453860f2477f8c2da5-22970690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60f2477fd27189_49570793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f2477fd27189_49570793')) {function content_60f2477fd27189_49570793($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('general','vendor_rating.rating_ranges'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("general", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_rating/settings/components/formula.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_rating/settings/components/start_rating_period.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_rating/settings/components/cron_command.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("rating_ranges", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_rating/settings/components/rating_ranges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="cm-j-tabs cm-track tabs">
    <ul class="nav nav-tabs">
        <li id="vendor_rating_tab_general" class="cm-js active">
            <a><?php echo $_smarty_tpl->__("general");?>
</a>
        </li>
        <li id="vendor_rating_tab_rating_ranges" class="cm-js">
            <a><?php echo $_smarty_tpl->__("vendor_rating.rating_ranges");?>
</a>
        </li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div id="content_vendor_rating_tab_general" class="hidden"><?php echo Smarty::$_smarty_vars['capture']['general'];?>
</div>
    <div id="content_vendor_rating_tab_rating_ranges" class="hidden"><?php echo Smarty::$_smarty_vars['capture']['rating_ranges'];?>
</div>
</div>
<?php }} ?>
