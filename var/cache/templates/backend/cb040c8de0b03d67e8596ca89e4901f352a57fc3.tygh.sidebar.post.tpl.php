<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:03:10
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\blog\hooks\pages\sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189545094160cb642e166d27-76113036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb040c8de0b03d67e8596ca89e4901f352a57fc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\sidebar.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189545094160cb642e166d27-76113036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb642e1b4549_79255485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb642e1b4549_79255485')) {function content_60cb642e1b4549_79255485($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
