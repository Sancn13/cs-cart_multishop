<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:28:30
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\store_locator\search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161361319160bf2a2eed43c6-75064727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0e5250470961ea2793b94fbaa0b15471d7e7b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\store_locator\\search.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161361319160bf2a2eed43c6-75064727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'store_types' => 0,
    'type_code' => 0,
    'type_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2a2ef22433_12994692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2a2ef22433_12994692')) {function content_60bf2a2ef22433_12994692($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type','warehouses.any_store_type'));
?>
<div class="sidebar-field">
    <label for="elm_type"><?php echo $_smarty_tpl->__("type");?>
</label>
    <select id="elm_type" name="store_types">
        <option value="" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['store_types'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("warehouses.any_store_type");?>
</option>
        <?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['type_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['type_code']->value = $_smarty_tpl->tpl_vars['type_name']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_code']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['type_code']->value==$_smarty_tpl->tpl_vars['search']->value['store_types']) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
</div><?php }} ?>
