<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:21
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\age_verification\hooks\products\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159351815360af5cd54321e0-25577511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51adb17868298bf8fe5b2efea8a3760b9cb6558b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\age_verification\\hooks\\products\\detailed_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '159351815360af5cd54321e0-25577511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd5473ab0_76039297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd5473ab0_76039297')) {function content_60af5cd5473ab0_76039297($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('age_verification'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/age_verification/views/age_verification/components/update_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('array_name'=>"product_data",'record'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>
<?php }} ?>
