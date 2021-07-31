<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 07:16:20
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_plans\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180957552560bc4c14b82f86-03989761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a754b88d3f9e90657910101731646c3478d5f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '180957552560bc4c14b82f86-03989761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_plans' => 0,
    'company_data' => 0,
    'default_vendor_plan' => 0,
    'company_plan_id' => 0,
    'allow_add_plan' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc4c14bdb2e0_04240729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4c14bdb2e0_04240729')) {function content_60bc4c14bdb2e0_04240729($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.choose_your_plan','vendor_plans.plan'));
?>
<div id="content_plan" class="hidden">
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <p><?php echo $_smarty_tpl->__("vendor_plans.choose_your_plan");?>
</p>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/plans_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('plans'=>$_smarty_tpl->tpl_vars['vendor_plans']->value,'current_plan_id'=>$_smarty_tpl->tpl_vars['company_data']->value['plan_id'],'name'=>"company_data[plan_id]"), 0);?>

    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['allow_add_plan'] = new Smarty_variable(fn_check_permissions("vendor_plans","quick_add","admin","POST"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['company_plan_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['company_data']->value['plan_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_vendor_plan']->value['plan_id'] : $tmp), null, 0);?>
        <div class="control-group">
            <label class="control-label" for="elm_company_plan"><?php echo $_smarty_tpl->__("vendor_plans.plan");?>
:</label>
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_ids'=>array($_smarty_tpl->tpl_vars['company_plan_id']->value),'input_name'=>"company_data[plan_id]",'picker_id'=>"vendor_plans_picker",'allow_add'=>$_smarty_tpl->tpl_vars['allow_add_plan']->value,'current_plan_id'=>$_smarty_tpl->tpl_vars['company_plan_id']->value), 0);?>

            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['allow_add_plan']->value) {?>
            <?php echo smarty_function_script(array('src'=>"js/addons/vendor_plans/backend/companies_update_vendor_plan.js"),$_smarty_tpl);?>


            <div class="control-toolbar__panel">
                <div id="companies_quick_add_vendor_plan"
                        data-ca-inline-dialog-action-context="vendor_update"
                        data-ca-inline-dialog-url="<?php echo htmlspecialchars(fn_url("vendor_plans.quick_add"), ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/storefronts_update_for_vendor_dialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php }?>
</div>
<?php }} ?>
