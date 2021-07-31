<?php /* Smarty version Smarty-3.1.21, created on 2021-06-08 11:28:57
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\warehouses\hooks\store_locator\content_detailed.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131463796260bf2a49b19c16-00422720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '344dbc823b328d5726c9e4ea3bac4fef689e3138' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\warehouses\\hooks\\store_locator\\content_detailed.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '131463796260bf2a49b19c16-00422720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_location' => 0,
    'store_types' => 0,
    'type_code' => 0,
    'store_type' => 0,
    'type_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bf2a49b6f7c0_86025557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bf2a49b6f7c0_86025557')) {function content_60bf2a49b6f7c0_86025557($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.store_type'));
?>
<div class="control-group">
    <label for="elm_name" class="cm-required control-label"><?php echo $_smarty_tpl->__("warehouses.store_type");?>
:</label>
    <div class="controls">
        <select name="store_location_data[store_type]">
            <?php $_smarty_tpl->tpl_vars['store_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['store_location']->value['store_type'])===null||$tmp==='' ? $_REQUEST['store_type'] : $tmp), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['type_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_name']->_loop = false;
 $_smarty_tpl->tpl_vars['type_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_name']->key => $_smarty_tpl->tpl_vars['type_name']->value) {
$_smarty_tpl->tpl_vars['type_name']->_loop = true;
 $_smarty_tpl->tpl_vars['type_code']->value = $_smarty_tpl->tpl_vars['type_name']->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_code']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['type_code']->value==$_smarty_tpl->tpl_vars['store_type']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<?php }} ?>
