<?php /* Smarty version Smarty-3.1.21, created on 2021-05-30 06:36:27
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\views\promotions\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101372308560b3083bd2bfe4-02345347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0697318d29bc8f40a3fbb4d3690cdf7993c0ff8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\views\\promotions\\list.tpl',
      1 => 1617678753,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101372308560b3083bd2bfe4-02345347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'promotions' => 0,
    'promotion' => 0,
    'settings' => 0,
    'company_name' => 0,
    'company_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b3083be185d8_10595917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b3083be185d8_10595917')) {function content_60b3083be185d8_10595917($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('avail_till','text_no_active_promotions','active_promotions','avail_till','text_no_active_promotions','active_promotions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="grid-list ty-grid-promotions">
    <?php  $_smarty_tpl->tpl_vars['promotion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promotion']->_loop = false;
 $_smarty_tpl->tpl_vars['promotion_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->key => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->_loop = true;
 $_smarty_tpl->tpl_vars['promotion_id']->value = $_smarty_tpl->tpl_vars['promotion']->key;
?>
        <div class="ty-column3">
            <div class="ty-grid-list__item ty-grid-promotions__item">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:list_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:list_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image'],'image_id'=>"promotion_image",'class'=>"ty-grid-promotions__image"), 0);?>

                    <?php }?>
                    <div class="ty-grid-promotions__content">
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <div class="ty-grid-list__available">
                                <?php echo $_smarty_tpl->__("avail_till");?>
: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                            </div>
                        <?php }?>
                        <?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['promotion']->value['company_id'])) {?>
                            <div class="ty-grid-promotions__company">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-grid-promotions__company-link">
                                    <?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['promotion']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?>
                                </a>
                            </div>
                        <?php }?>
                        <h2 class="ty-grid-promotions__header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['detailed_description']||$_smarty_tpl->tpl_vars['promotion']->value['short_description']) {?>
                            <div class="ty-wysiwyg-content ty-grid-promotions__description">
                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['promotion']->value['detailed_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['short_description'] : $tmp);?>

                            </div>
                        <?php }?>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:list_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    <?php }
if (!$_smarty_tpl->tpl_vars['promotion']->_loop) {
?>
        <p><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
    <?php } ?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("active_promotions");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/promotions/list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/promotions/list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="grid-list ty-grid-promotions">
    <?php  $_smarty_tpl->tpl_vars['promotion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promotion']->_loop = false;
 $_smarty_tpl->tpl_vars['promotion_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promotions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->key => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->_loop = true;
 $_smarty_tpl->tpl_vars['promotion_id']->value = $_smarty_tpl->tpl_vars['promotion']->key;
?>
        <div class="ty-column3">
            <div class="ty-grid-list__item ty-grid-promotions__item">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"promotions:list_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"promotions:list_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['promotion']->value['image']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['image'],'image_id'=>"promotion_image",'class'=>"ty-grid-promotions__image"), 0);?>

                    <?php }?>
                    <div class="ty-grid-promotions__content">
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <div class="ty-grid-list__available">
                                <?php echo $_smarty_tpl->__("avail_till");?>
: <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

                            </div>
                        <?php }?>
                        <?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['promotion']->value['company_id'])) {?>
                            <div class="ty-grid-promotions__company">
                                <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="ty-grid-promotions__company-link">
                                    <?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['promotion']->value['company_id']), ENT_QUOTES, 'UTF-8');
}?>
                                </a>
                            </div>
                        <?php }?>
                        <h2 class="ty-grid-promotions__header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['detailed_description']||$_smarty_tpl->tpl_vars['promotion']->value['short_description']) {?>
                            <div class="ty-wysiwyg-content ty-grid-promotions__description">
                                <?php echo (($tmp = @$_smarty_tpl->tpl_vars['promotion']->value['detailed_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['promotion']->value['short_description'] : $tmp);?>

                            </div>
                        <?php }?>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"promotions:list_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    <?php }
if (!$_smarty_tpl->tpl_vars['promotion']->_loop) {
?>
        <p><?php echo $_smarty_tpl->__("text_no_active_promotions");?>
</p>
    <?php } ?>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("active_promotions");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
