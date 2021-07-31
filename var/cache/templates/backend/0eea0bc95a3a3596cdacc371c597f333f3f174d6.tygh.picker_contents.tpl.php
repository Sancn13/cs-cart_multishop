<?php /* Smarty version Smarty-3.1.21, created on 2021-06-06 05:16:27
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\pickers\storefronts\picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172221072560bc2ffbde53c0-85136228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eea0bc95a3a3596cdacc371c597f333f3f174d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\pickers\\storefronts\\picker_contents.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '172221072560bc2ffbde53c0-85136228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefronts' => 0,
    'search' => 0,
    'config' => 0,
    'button_names' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60bc2ffbe7b9d9_40463685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc2ffbe7b9d9_40463685')) {function content_60bc2ffbe7b9d9_40463685($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','choose','add_storefronts_and_close','add_storefronts'));
?>
<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    
    $.ceEvent('on', 'ce.formpost_storefronts_form', function(frm, elm) {
        var storefronts = {},
            storefrontCompanies = {};

        $.ceEvent('on', 'ce.picker_add_js_item', function(hook_data) {
            var storefrontId = hook_data.var_id;
            var newItemId = '#' + frm.data('caResultId') + '_' + storefrontId;
            $(newItemId).data({
                caStorefrontId: storefrontId,
                caStorefrontCompanyIds: storefrontCompanies[storefrontId]
            });
        });

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                var $storefront = $(this).closest('.storefront');
                storefronts[id] = $('.storefront__name', $storefront).text();
                storefrontCompanies[id] = $storefront.data('caStorefrontCompanyIds');
            });

            $.cePicker('add_js_item', frm.data('caResultId'), storefronts, 'a', {
                '{storefront_id}': '%id',
                '{storefront}': '%item'
            });

            if (display_type !== 'radio') {
                $.ceNotification('show', {
                    type: 'N', 
                    title: _.tr('notice'), 
                    message: _.tr('text_items_added'), 
                    message_state: 'I'
                });
            }
        }

        return false;        
    });
    
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"storefronts.picker",'class'=>"cm-ajax",'in_popup'=>true,'extra'=>"<input type='hidden' name='result_ids' value='pagination_".((string)$_REQUEST['data_id'])."' /><input type='hidden' name='data_id' value='".((string)$_REQUEST['data_id'])."' /><input type='hidden' name='extra' value='".((string)$_REQUEST['extra'])."' />",'select_mode'=>$_REQUEST['select_mode']), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
"
      data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
"
      method="post"
      name="storefronts_form"
>

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("views/storefronts/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefronts'=>$_smarty_tpl->tpl_vars['storefronts']->value,'search'=>$_smarty_tpl->tpl_vars['search']->value,'sort_url'=>fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"),'sort_active_icon_class'=>"<i class='icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."'></i>",'sort_dummy_icon_class'=>"<i class='icon-dummy'></i>",'return_url'=>rawurlencode(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url'])),'is_readonly'=>true,'select_mode'=>$_REQUEST['select_mode'],'force_selector_display'=>true,'get_company_ids'=>true), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['storefronts']->value) {?>
        <div class="buttons-container">
            <?php if ($_REQUEST['display']=="radio") {?>
                <?php $_smarty_tpl->tpl_vars['but_close_text'] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['but_close_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['button_names']->value['but_close_text'])===null||$tmp==='' ? $_smarty_tpl->__("add_storefronts_and_close") : $tmp), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['button_names']->value['but_text'])===null||$tmp==='' ? $_smarty_tpl->__("add_storefronts") : $tmp), null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

        </div>
    <?php }?>
</form>
<?php }} ?>
