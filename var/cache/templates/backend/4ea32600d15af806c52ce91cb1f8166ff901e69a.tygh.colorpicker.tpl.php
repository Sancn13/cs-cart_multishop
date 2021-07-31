<?php /* Smarty version Smarty-3.1.21, created on 2021-05-28 04:02:48
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\common\colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166243114460b04138137179-10288138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea32600d15af806c52ce91cb1f8166ff901e69a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\common\\colorpicker.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166243114460b04138137179-10288138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_meta' => 0,
    'cp_attrs' => 0,
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
    'show_picker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b041381647c0_14255207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b041381647c0_14255207')) {function content_60b041381647c0_14255207($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
?><div class="colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo smarty_modifier_render_tag_attrs((($tmp = @$_smarty_tpl->tpl_vars['cp_attrs']->value)===null||$tmp==='' ? array() : $tmp));?>
>
    <input
        type="hidden"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['show_picker']->value) {?>data-ca-spectrum-show-initial="true"<?php } else { ?>data-ca-view="palette"<?php }?>
        class="cm-colorpicker"
    >
</div><?php }} ?>
