<?php /* Smarty version Smarty-3.1.21, created on 2021-06-17 18:03:07
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\pages\components\bulk_edit\parent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157581252060cb642bddf949-04112751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9e9fa50238573192a28f3d46f5386ae4324a8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\pages\\components\\bulk_edit\\parent.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157581252060cb642bddf949-04112751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60cb642bdf2d10_24863571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cb642bdf2d10_24863571')) {function content_60cb642bdf2d10_24863571($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('parent','reset','apply'));
?>
<div class="bulk-edit-inner bulk-edit-inner--parent">
    <div class="bulk-edit-inner__header">
         <span><?php echo $_smarty_tpl->__("parent");?>
</span>
    </div>
    <div class="bulk-edit-inner__body">
        <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/parent_page_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_label'=>false,'bulkedit_changer'=>"data-ca-bulkedit-parent-changer"), 0);?>

    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-parent-cancel" 
                role="button"
                data-ca-bulkedit-mod-parent-cancel
                data-ca-bulkedit-mod-parent-reset-changer="[data-ca-bulkedit-parent-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-parent-update" 
                role="button"
                data-ca-bulkedit-mod-parent-update
                data-ca-bulkedit-mod-values="<?php if (!$_smarty_tpl->tpl_vars['parent_pages']->value) {?>[name='page_data[parent_id]']<?php } else { ?>[data-ca-bulkedit-parent-changer]<?php }?>"
                data-ca-bulkedit-mod-target-form="[name=pages_tree_form]"
                data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-mod-dispatch="pages.m_update_parent_page"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
</div> <?php }} ?>
