<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:10:04
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\common\popupbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158927186960acccfc5ea426-92441215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce868d32fadefb024075e257147ca0fde8835458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\common\\popupbox.tpl',
      1 => 1617678752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '158927186960acccfc5ea426-92441215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'capture_link' => 0,
    'text' => 0,
    'title' => 0,
    'show_brackets' => 0,
    'id' => 0,
    'link_meta' => 0,
    'href' => 0,
    'edit_onclick' => 0,
    'dialog_title' => 0,
    'dialog_additional_attrs' => 0,
    'link_icon' => 0,
    'link_icon_first' => 0,
    'link_text_meta' => 0,
    'link_text' => 0,
    'content' => 0,
    'edit_picker' => 0,
    'wysiwyg' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acccfc68f6c3_34440970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acccfc68f6c3_34440970')) {function content_60acccfc68f6c3_34440970($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("link", null, null); ob_start(); ?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['text']->value) {?>
    <?php $_smarty_tpl->tpl_vars['dialog_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['text']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
    <?php $_smarty_tpl->tpl_vars['dialog_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title']->value, null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>(<?php }?>
    <a id="opener_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> href="#"<?php }?>
        data-ca-target-id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['dialog_title']->value) {?>data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dialog_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['dialog_additional_attrs']->value);?>

        rel="nofollow"
    >
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value&&$_smarty_tpl->tpl_vars['link_icon_first']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
        <span <?php if ($_smarty_tpl->tpl_vars['link_text_meta']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_text_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value&&!$_smarty_tpl->tpl_vars['link_icon_first']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
    </a>
<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>)<?php }?>

<?php if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value||$_smarty_tpl->tpl_vars['href']->value||$_smarty_tpl->tpl_vars['edit_picker']->value) {?>
<div class="hidden<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value) {?> ty-wysiwyg-content<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/popupbox.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/popupbox.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("link", null, null); ob_start(); ?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['text']->value) {?>
    <?php $_smarty_tpl->tpl_vars['dialog_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['text']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
    <?php $_smarty_tpl->tpl_vars['dialog_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['title']->value, null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>(<?php }?>
    <a id="opener_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> href="#"<?php }?>
        data-ca-target-id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['dialog_title']->value) {?>data-ca-dialog-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dialog_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['dialog_additional_attrs']->value);?>

        rel="nofollow"
    >
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value&&$_smarty_tpl->tpl_vars['link_icon_first']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
        <span <?php if ($_smarty_tpl->tpl_vars['link_text_meta']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_text_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value&&!$_smarty_tpl->tpl_vars['link_icon_first']->value) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?>
    </a>
<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>)<?php }?>

<?php if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value||$_smarty_tpl->tpl_vars['href']->value||$_smarty_tpl->tpl_vars['edit_picker']->value) {?>
<div class="hidden<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value) {?> ty-wysiwyg-content<?php }?>" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }
}?><?php }} ?>