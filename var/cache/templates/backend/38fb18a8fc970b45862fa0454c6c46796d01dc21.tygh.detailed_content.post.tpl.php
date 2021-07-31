<?php /* Smarty version Smarty-3.1.21, created on 2021-06-22 04:54:57
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\age_verification\hooks\categories\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100995948160d142f1c39a11-19717221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38fb18a8fc970b45862fa0454c6c46796d01dc21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\age_verification\\hooks\\categories\\detailed_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '100995948160d142f1c39a11-19717221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60d142f1c78556_50080354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d142f1c78556_50080354')) {function content_60d142f1c78556_50080354($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('age_verification'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/age_verification/views/age_verification/components/update_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('array_name'=>"category_data",'record'=>$_smarty_tpl->tpl_vars['category_data']->value), 0);?>
<?php }} ?>
