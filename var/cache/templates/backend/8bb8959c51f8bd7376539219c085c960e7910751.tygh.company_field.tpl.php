<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:34:47
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\companies\components\company_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110794396760acd2c70b7803-76632653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb8959c51f8bd7376539219c085c960e7910751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\companies\\components\\company_field.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '110794396760acd2c70b7803-76632653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required' => 0,
    'runtime' => 0,
    'selected' => 0,
    'disable_company_picker' => 0,
    'zero_company_id_name_lang_var' => 0,
    'name' => 0,
    'id' => 0,
    'meta' => 0,
    'url_extra' => 0,
    'onclick' => 0,
    'js_action' => 0,
    'no_wrap' => 0,
    'tooltip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2c7140207_08566004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2c7140207_08566004')) {function content_60acd2c7140207_08566004($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('owner_company'));
?>
<?php $_smarty_tpl->tpl_vars['required'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['required']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&(!$_smarty_tpl->tpl_vars['selected']->value||fn_allowed_for("MULTIVENDOR"))&&!$_smarty_tpl->tpl_vars['disable_company_picker']->value) {?>
    <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['selected']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable($_smarty_tpl->tpl_vars['required']->value ? '' : "0", null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(fn_get_default_company_id(), null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("c_body", null, null); ob_start(); ?>
    <input type="hidden" class="cm-no-failed-msg" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "company_id" : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['disable_company_picker']->value) {?>
            <div class="text-type-value"><?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), ENT_QUOTES, 'UTF-8');?>
</div>
        <?php } else { ?>
            <div class="text-type-value ajax-select-wrap <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value) {?>
                    <?php $_smarty_tpl->tpl_vars['url_extra'] = new Smarty_variable("&show_all=Y&default_label=".((string)$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['url_extra'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['url_extra']->value)."&search=Y", null, 0);?>
                    <?php }?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"companies.get_companies_list?onclick=".((string)$_smarty_tpl->tpl_vars['onclick']->value).((string)$_smarty_tpl->tpl_vars['url_extra']->value),'text'=>fn_get_company_name($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value),'result_elm'=>(($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "company_id" : $tmp),'id'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_selector",'js_action'=>$_smarty_tpl->tpl_vars['js_action']->value), 0);?>

            </div>
        <?php }?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?>
        <div class="control-group">
            <label class="control-label <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>cm-required<?php }?>" for="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "company_id" : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("owner_company");?>
</label>
            <div class="controls">
                <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

                <?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?>
                    <p class="muted description"><?php echo $_smarty_tpl->tpl_vars['tooltip']->value;?>
</p>
                <?php }?>
            </div>
        </div>
    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

    <?php }?>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

<?php }?><?php }} ?>
