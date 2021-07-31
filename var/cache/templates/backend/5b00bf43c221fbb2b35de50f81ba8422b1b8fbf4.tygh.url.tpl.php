<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:23:26
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\storefronts\components\url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203008308260bc319e373fc2-51763204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b00bf43c221fbb2b35de50f81ba8422b1b8fbf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\storefronts\\components\\url.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '203008308260bc319e373fc2-51763204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'readonly' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc319e3df491_15163163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc319e3df491_15163163')) {function content_60bc319e3df491_15163163($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_puny_decode')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.puny_decode.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_url'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[url]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("storefront_url");?>
</label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
            <?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <input type="text"
                   id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="input-large"
                   value="<?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
    </div>
</div>
<?php }} ?>
