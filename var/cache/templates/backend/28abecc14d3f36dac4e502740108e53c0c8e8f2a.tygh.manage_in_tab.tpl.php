<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:40
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\tabs\manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53882974060af5ce8527340-66767663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28abecc14d3f36dac4e502740108e53c0c8e8f2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\tabs\\manage_in_tab.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53882974060af5ce8527340-66767663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5ce85e6400_97452040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5ce85e6400_97452040')) {function content_60af5ce85e6400_97452040($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_product_tabs--></div>
<?php }} ?>
