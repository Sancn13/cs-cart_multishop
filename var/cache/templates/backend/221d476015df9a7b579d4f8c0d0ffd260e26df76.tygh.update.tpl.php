<?php /* Smarty version Smarty-3.1.21, created on 2021-06-23 04:13:31
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\sales_reports\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168599780560d28abb053160-52043919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221d476015df9a7b579d4f8c0d0ffd260e26df76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\sales_reports\\update.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '168599780560d28abb053160-52043919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'report' => 0,
    'report_id' => 0,
    'table' => 0,
    'report_elements' => 0,
    'element' => 0,
    'element_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d28abbb10293_35907001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d28abbb10293_35907001')) {function content_60d28abbb10293_35907001($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','position_short','name','type','value_to_display','position_short','name','type','table','graphic','bar','graphic','pie_3d','value_to_display','tools','edit','no_data','add_chart','new_report'));
?>
<?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
    <?php $_smarty_tpl->tpl_vars["report_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['report']->value['report_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["report_id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" name="statistics_form" class=" form-horizontal">
<input type="hidden" name="report_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['selected_section'])===null||$tmp==='' ? "general" : $tmp), ENT_QUOTES, 'UTF-8');?>
">

<div id="content_general">

    <div class="control-group">
        <label for="description" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="report_data[description]" id="description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['report']->value['description'], ENT_QUOTES, 'UTF-8');?>
" size="70">
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"report_data[status]",'id'=>"report",'obj'=>$_smarty_tpl->tpl_vars['report']->value), 0);?>

</div>

<?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
<div id="content_tables">
    <?php if ($_smarty_tpl->tpl_vars['report']->value['tables']) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
        <thead>
            <tr>
                <th class="center mobile-hide" width="1%"><?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
                <th width="4%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                <th width="55%"><?php echo $_smarty_tpl->__("name");?>
</th>
                <th width="10%"><?php echo $_smarty_tpl->__("type");?>
</th>
                <th width="20%"><?php echo $_smarty_tpl->__("value_to_display");?>
</th>
                <th width="10%">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['table'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['table']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report']->value['tables']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['table']->key => $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->tpl_vars['table']->_loop = true;
?>
        <tr>
            <td class="center mobile-hide">
                <input type="hidden" name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][table_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
">
                <input type="checkbox" name="del[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
]" id="delete_checkbox" value="Y" class="cm-item">
            </td>
            <td data-th="<?php echo $_smarty_tpl->__("position_short");?>
"><input type="text" name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden"></td>
            <td data-th="<?php echo $_smarty_tpl->__("name");?>
"><a href="<?php echo htmlspecialchars(fn_url("sales_reports.update_table?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&table_id=".((string)$_smarty_tpl->tpl_vars['table']->value['table_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td data-th="<?php echo $_smarty_tpl->__("type");?>
">
                <select name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][type]">
                    <option value="T"><?php echo $_smarty_tpl->__("table");?>
</option>
                    <option value="B" <?php if ($_smarty_tpl->tpl_vars['table']->value['type']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("graphic");?>
 [<?php echo $_smarty_tpl->__("bar");?>
] </option>
                    <option value="P" <?php if ($_smarty_tpl->tpl_vars['table']->value['type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("graphic");?>
 [<?php echo $_smarty_tpl->__("pie_3d");?>
] </option>
                </select>
            </td>
            <td data-th="<?php echo $_smarty_tpl->__("value_to_display");?>
">
                <select name="report_data[tables][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value['table_id'], ENT_QUOTES, 'UTF-8');?>
][display]">
                    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report_elements']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["element_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['element']->value['element_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["element_name"] = new Smarty_variable("reports_parameter_".((string)$_smarty_tpl->tpl_vars['element_id']->value), null, 0);?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['table']->value['display']==$_smarty_tpl->tpl_vars['element']->value['code']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['element_name']->value);?>
</option>
                    <?php } ?>
                </select>
            </td>
            <td class="nowrap right" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                <div class="hidden-tools">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"sales_reports:update_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"sales_reports:update_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"sales_reports.update_table?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value)."&table_id=".((string)$_smarty_tpl->tpl_vars['table']->value['table_id'])));?>
</li>
                            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete",'class'=>"cm-config",'href'=>"sales_reports.delete_table?table_id=".((string)$_smarty_tpl->tpl_vars['table']->value['table_id'])."&report_id=".((string)$_smarty_tpl->tpl_vars['report']->value['report_id']),'method'=>"POST"));?>
</li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"sales_reports:update_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                </div>
            </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
</div>
<?php }?>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <span class="mobile-hide shift-right">
    <?php if ($_smarty_tpl->tpl_vars['report_id']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"sales_reports.update_table?report_id=".((string)$_smarty_tpl->tpl_vars['report_id']->value),'prefix'=>"bottom",'hide_tools'=>true,'link_text'=>$_smarty_tpl->__("add_chart")), 0);?>

    <?php }?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['report']->value['tables']) {?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[sales_reports.m_delete_tables]",'form'=>"statistics_form"));?>
</li>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"cm-tab-tools",'id'=>"tools_tables"));?>

    </span>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[sales_reports.update]",'but_role'=>"action",'but_target_form'=>"statistics_form",'but_meta'=>"cm-submit",'save'=>$_smarty_tpl->tpl_vars['report_id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['report_id']->value ? $_smarty_tpl->tpl_vars['report']->value['description'] : $_smarty_tpl->__("new_report"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
