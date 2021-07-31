<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:43:57
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\pingpp\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165215837660b309fd401178-43652028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3777a4a0cd7284bb331db2a291b6386350b0c6e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\pingpp\\hooks\\index\\scripts.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165215837660b309fd401178-43652028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b309fd406434_86247784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b309fd406434_86247784')) {function content_60b309fd406434_86247784($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/pingpp/config.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/pingpp/payment.js"),$_smarty_tpl);?>
<?php }} ?>
