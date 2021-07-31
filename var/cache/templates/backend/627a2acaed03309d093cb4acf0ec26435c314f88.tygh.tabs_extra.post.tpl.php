<?php /* Smarty version Smarty-3.1.21, created on 2021-06-22 04:54:58
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\discussion\hooks\categories\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202701232560d142f2356631-26449179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '627a2acaed03309d093cb4acf0ec26435c314f88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\tabs_extra.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '202701232560d142f2356631-26449179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d142f2392d56_63029966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d142f2392d56_63029966')) {function content_60d142f2392d56_63029966($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
