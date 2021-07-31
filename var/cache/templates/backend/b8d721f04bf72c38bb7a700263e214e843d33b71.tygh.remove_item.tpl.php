<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:34:48
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\buttons\remove_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42301956460acd2c8e5b1b8-79496443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d721f04bf72c38bb7a700263e214e843d33b71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\buttons\\remove_item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42301956460acd2c8e5b1b8-79496443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simple' => 0,
    'only_delete' => 0,
    'item_id' => 0,
    'but_class' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2c8e9efe8_24455651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2c8e9efe8_24455651')) {function content_60acd2c8e9efe8_24455651($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove'));
?>
<?php if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
    <button type="button"
            class="btn cm-opacity <?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y") {?> hidden<?php }?>"
            name="remove"
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("remove");?>
"
    >
        <i class="icon-trash"></i>
    </button>
<?php }?>

<button type="button"
        name="remove_hidden"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="btn <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['but_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');
}?>"
        title="<?php echo $_smarty_tpl->__("remove");?>
"
        <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
>
    <i class="icon-trash"></i>
</button>
<?php }} ?>
