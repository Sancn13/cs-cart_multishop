<?php /* Smarty version Smarty-3.1.21, created on 2021-05-29 12:29:14
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\views\categories\components\bulk_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153183850560b2096ace7879-78571321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '986709c5e9cf43f9c5bf969e60c9b9bec0511212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\views\\categories\\components\\bulk_edit.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '153183850560b2096ace7879-78571321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b2096ad1b2d1_68963797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b2096ad1b2d1_68963797')) {function content_60b2096ad1b2d1_68963797($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected','status','edit_selected','actions'));
?>
<div class="bulk-edit clearfix hidden" data-ca-bulkedit-expanded-object="true" data-ca-bulkedit-component="expandedObject">
    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:bulk_edit_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:bulk_edit_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="btn bulk-edit__btn bulk-edit__btn--check-items">
                <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler" 
                    type="checkbox" 
                    checked 
                    data-ca-bulkedit-toggler="true"
                    data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]" 
                    data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
                />
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                    <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
                </span>
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>fn_get_default_status_filters('',true)), 0);?>

            </li>

            <li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

                <ul class="dropdown-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/bulk_edit/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </li>

            <li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
                <span class="bulk-edit__btn-content">
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form"));?>

                </span>
            </li>

            <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("actions");?>
 <span class="caret mobile-hide"></span></span>

                <ul class="dropdown-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:bulk_edit_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

</div>
<?php }} ?>
