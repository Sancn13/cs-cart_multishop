<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 11:12:03
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\email_templates\preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123215479960b348d361a995-06261534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '177eefe06e66f3155386a9b2a3b29eeb095cc8a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\email_templates\\preview.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123215479960b348d361a995-06261534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b348d3641a39_52409572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b348d3641a39_52409572')) {function content_60b348d3641a39_52409572($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('preview','subject','body'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <h4><?php echo $_smarty_tpl->__("subject");?>
:</h4>
    <div>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview']->value->getSubject(), ENT_QUOTES, 'UTF-8');?>

    </div>
    <h4><?php echo $_smarty_tpl->__("body");?>
:</h4>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value->getBody();?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }} ?>
