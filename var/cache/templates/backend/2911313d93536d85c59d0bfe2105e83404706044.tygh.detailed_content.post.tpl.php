<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:03:20
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\social_buttons\hooks\pages\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192459212960cb643801a8b5-71940673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2911313d93536d85c59d0bfe2105e83404706044' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\social_buttons\\hooks\\pages\\detailed_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '192459212960cb643801a8b5-71940673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb643805bdd6_76058869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb643805bdd6_76058869')) {function content_60cb643805bdd6_76058869($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

    <?php }?>
<?php }?>
<?php }} ?>
