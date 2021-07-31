<?php /* Smarty version Smarty-3.1.21, created on 2021-06-05 05:42:42
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\pingpp\hooks\orders\payment_info_text_item.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78160200460bae4a28f6709-16546106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8201f5b561cd61148421e52b520c70b4c1c1c458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\pingpp\\hooks\\orders\\payment_info_text_item.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '78160200460bae4a28f6709-16546106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bae4a298af25_77409040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bae4a298af25_77409040')) {function content_60bae4a298af25_77409040($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('pingpp.channel.'));
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value=="channel") {?>
    <?php echo $_smarty_tpl->__("pingpp.channel.".((string)$_smarty_tpl->tpl_vars['item']->value));?>

<?php } else { ?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
