<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:03:07
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\pages\components\parent_page_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102840080760cb642bf23872-01637926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0357ea48bc610df3f16a5278be3ec5c32285b7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\pages\\components\\parent_page_selector.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102840080760cb642bf23872-01637926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_label' => 0,
    'parent_pages' => 0,
    'is_exclusive_page_type' => 0,
    'page_type' => 0,
    'page_data' => 0,
    'bulkedit_changer' => 0,
    'page' => 0,
    'show_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb642c19ffd5_78746829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb642c19ffd5_78746829')) {function content_60cb642c19ffd5_78746829($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('parent_page','root_level','root_page'));
?>
<?php $_smarty_tpl->tpl_vars['show_label'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_label']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<div class="control-group" id="parent_page_selector">

    <?php if ($_smarty_tpl->tpl_vars['show_label']->value) {?>
        <label class="control-label cm-required" for="elm_parent_id"><?php echo $_smarty_tpl->__("parent_page");?>
:</label>
    <?php }?>

    <div class="controls">
        <?php if (!$_smarty_tpl->tpl_vars['parent_pages']->value) {?>

            <?php if ($_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {?>
            <?php $_smarty_tpl->tpl_vars['extra_url'] = new Smarty_variable("&get_tree=multi_level&page_type=".((string)$_smarty_tpl->tpl_vars['page_type']->value), null, 0);?>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("pickers/pages/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_page",'input_name'=>"page_data[parent_id]",'item_ids'=>(($tmp = @$_smarty_tpl->tpl_vars['page_data']->value['parent_id'])===null||$tmp==='' ? "0" : $tmp),'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("root_level"),'display_input_id'=>"elm_parent_id",'except_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id'],'prepend'=>true), 0);?>

        <?php } else { ?>
            <select 
                name="page_data[parent_id]" 
                id="elm_parent_id"
                <?php if ($_smarty_tpl->tpl_vars['bulkedit_changer']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bulkedit_changer']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>
            >
                <option value="0">- <?php echo $_smarty_tpl->__("root_page");?>
 -</option>
                <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
                <?php if ((strpos($_smarty_tpl->tpl_vars['page']->value['id_path'],((string)$_smarty_tpl->tpl_vars['page_data']->value['id_path'])."/")===false&&$_smarty_tpl->tpl_vars['page_data']->value['page_id']!=$_smarty_tpl->tpl_vars['page']->value['page_id'])||$_smarty_tpl->tpl_vars['show_all']->value) {?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_id']==$_REQUEST['parent_id']||$_smarty_tpl->tpl_vars['page']->value['page_id']==$_smarty_tpl->tpl_vars['page_data']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['page']->value['level']),htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8', true));?>
</option>
                <?php }?>
                <?php } ?>
            </select>
        <?php }?>
    </div>
<!--parent_page_selector--></div>
<?php }} ?>