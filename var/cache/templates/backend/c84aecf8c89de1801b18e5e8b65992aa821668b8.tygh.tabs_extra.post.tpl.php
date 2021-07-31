<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:24
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\attachments\hooks\products\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175198918960af5cd8a53278-40131872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c84aecf8c89de1801b18e5e8b65992aa821668b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\attachments\\hooks\\products\\tabs_extra.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175198918960af5cd8a53278-40131872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cd8a8de58_10143266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cd8a8de58_10143266')) {function content_60af5cd8a8de58_10143266($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="attachments") {?>hidden<?php }?>">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
