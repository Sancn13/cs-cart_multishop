<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 04:18:56
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_plans\views\vendor_plans\components\plans_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97896049060bc228064de07-03517194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b373e6289e71897359535160da4f10737af86ee2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_plans\\views\\vendor_plans\\components\\plans_search_form.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '97896049060bc228064de07-03517194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'search' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc228066aab4_39193359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc228066aab4_39193359')) {function content_60bc228066aab4_39193359($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','name','status','active','hidden','disabled','price'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form name="companies_search_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

    <div class="sidebar-field">
        <label for="elm_name"><?php echo $_smarty_tpl->__("name");?>
</label>
        <input type="text" name="plan" id="elm_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['plan'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="sidebar-field">
        <label for="status" class="control-label"><?php echo $_smarty_tpl->__("status");?>
</label>
        <select name="status" id="status">
            <option value="">--</option>
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="H" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="H") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("hidden");?>
</option>
            <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status']=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
    </div>

    <div class="sidebar-field">
        <label for="price_from"><?php echo $_smarty_tpl->__("price");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
        <input type="text" class="input-small" name="price_from" id="price_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['price_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" /> - <input type="text" class="input-small" name="price_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['price_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" />
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0);?>

</form>
<?php }} ?>
