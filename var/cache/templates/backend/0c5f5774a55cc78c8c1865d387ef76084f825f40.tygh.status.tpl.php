<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 12:03:43
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\promotions\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141863744660b354efbd9053-36027264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c5f5774a55cc78c8c1865d387ef76084f825f40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\promotions\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141863744660b354efbd9053-36027264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'promotion_statuses' => 0,
    'status' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b354efc0f536_80971465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b354efc0f536_80971465')) {function content_60b354efc0f536_80971465($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status'));
?>
<?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotion_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
    <li>
        <a class="cm-ajax cm-post cm-ajax-send-form"
            href="<?php echo htmlspecialchars(fn_url("promotions.update_status?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-id="pagination_contents"
            data-ca-target-form="#promotion_form"
        >
            <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

        </a>
    </li>
<?php } ?><?php }} ?>
