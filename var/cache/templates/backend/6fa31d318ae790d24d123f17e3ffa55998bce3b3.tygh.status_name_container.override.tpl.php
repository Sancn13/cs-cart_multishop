<?php /* Smarty version Smarty-3.1.21, created on 2021-05-27 11:48:01
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\addons\vendor_data_premoderation\hooks\products\status_name_container.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113789453660af5cc12bc8a3-03009405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fa31d318ae790d24d123f17e3ffa55998bce3b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\status_name_container.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113789453660af5cc12bc8a3-03009405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'id' => 0,
    'config' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60af5cc1322197_20328960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60af5cc1322197_20328960')) {function content_60af5cc1322197_20328960($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.approve_product','vendor_data_premoderation.disapprove_product'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")&&fn_check_permissions("premoderation","m_approve","admin")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:status_name_container")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:status_name_container"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="btn-group" id="product_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select">
            <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'id'=>"premoderation_approve_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'title'=>$_smarty_tpl->__("vendor_data_premoderation.approve_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product'])),'href'=>"premoderation.m_approve?product_ids[]=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'icon'=>"icon-thumbs-up",'class'=>"btn",'method'=>"POST"));?>


            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'id'=>"premoderation_disapprove_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product'])),'href'=>"premoderation.m_decline?product_ids[]=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'icon'=>"icon-thumbs-down",'class'=>"btn",'target_id'=>"disapproval_reason_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])));?>

        <!--product_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select--></div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:status_name_container"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>