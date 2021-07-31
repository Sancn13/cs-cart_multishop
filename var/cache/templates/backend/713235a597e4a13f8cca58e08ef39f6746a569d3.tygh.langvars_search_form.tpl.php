<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 11:07:09
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\languages\components\langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141817982860bc822dae4078-06777398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '713235a597e4a13f8cca58e08ef39f6746a569d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\languages\\components\\langvars_search_form.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '141817982860bc822dae4078-06777398',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc822db11ea3_61200110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc822db11ea3_61200110')) {function content_60bc822db11ea3_61200110($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($_REQUEST['name'], ENT_QUOTES, 'UTF-8');?>
"/>

        <div class="sidebar-field">
            <label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
            <input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text"/>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

    </form>
</div><?php }} ?>
