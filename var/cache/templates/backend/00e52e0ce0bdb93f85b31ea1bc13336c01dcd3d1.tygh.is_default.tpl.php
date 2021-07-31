<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:23:26
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\components\is_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66398274960bc319e50aba3-99915969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e52e0ce0bdb93f85b31ea1bc13336c01dcd3d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\components\\is_default.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '66398274960bc319e50aba3-99915969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'is_default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc319e51b9e6_85705789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc319e51b9e6_85705789')) {function content_60bc319e51b9e6_85705789($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('is_default_storefront'));
?>

<div class="control-group">
    <label for="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("is_default_storefront");?>

    </label>
    <div class="controls" id="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>checked<?php }?>
        />
    </div>
</div>
<?php }} ?>
