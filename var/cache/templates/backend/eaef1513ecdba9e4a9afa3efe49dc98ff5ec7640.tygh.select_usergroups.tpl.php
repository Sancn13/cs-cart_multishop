<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 13:34:37
         compiled from "C:\xampp\htdocs\cscmultiShop\design\backend\templates\common\select_usergroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161398105560acd2bd52e368-98923213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaef1513ecdba9e4a9afa3efe49dc98ff5ec7640' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\backend\\templates\\common\\select_usergroups.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161398105560acd2bd52e368-98923213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usergroup_ids' => 0,
    'name' => 0,
    'input_extra' => 0,
    'usergroups_default' => 0,
    'select_mode' => 0,
    'list_mode' => 0,
    'id' => 0,
    'usergroup' => 0,
    'ug_ids' => 0,
    'usergroups' => 0,
    'title' => 0,
    'ug_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd2bd62b6a1_66671715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd2bd62b6a1_66671715')) {function content_60acd2bd62b6a1_66671715($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.inline_script.php';
?>
<?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
<?php if ($_smarty_tpl->tpl_vars['usergroup_ids']->value!=='') {?>
<?php $_smarty_tpl->tpl_vars["ug_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['usergroup_ids']->value), null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:select_usergroups")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:select_usergroups"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" value="0" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
/>
<?php $_smarty_tpl->_capture_stack[0][] = array("usergroups_list", null, null); ob_start(); ?>
<?php $_smarty_tpl->tpl_vars['usergroups_default'] = new Smarty_variable(fn_get_default_usergroups(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['usergroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usergroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups_default']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->key => $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?><li><a>
    <?php } else { ?><label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if (($_smarty_tpl->tpl_vars['ug_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value))||(!$_smarty_tpl->tpl_vars['ug_ids']->value&&$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']==(defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null))) {?> checked="checked"<?php }?> <?php if ((!$_smarty_tpl->tpl_vars['ug_ids']->value||($_smarty_tpl->tpl_vars['ug_ids']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value)==1&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value)))&&$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']==(defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null)) {?> disabled="disabled"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
 onclick="fn_switch_default_box(this, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null), ENT_QUOTES, 'UTF-8');?>
);" />
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>


    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?></a></li>
    <?php } else { ?></label>
    <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['usergroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usergroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->key => $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?><li><a>
    <?php } else { ?><label class="checkbox <?php if (!$_smarty_tpl->tpl_vars['list_mode']->value) {?>inline<?php }?>" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
        
        <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['ug_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],$_smarty_tpl->tpl_vars['ug_ids']->value)) {?> checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['input_extra']->value;?>
 onclick="fn_switch_default_box(this, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((defined('USERGROUP_ALL') ? constant('USERGROUP_ALL') : null), ENT_QUOTES, 'UTF-8');?>
);" />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>


    <?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?></a></li>
    <?php } else { ?></label>
    <?php }?>

<?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:select_usergroups"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['select_mode']->value) {?>
    <div class="btn-group">
    <a class="btn-text dropdown-toggle" data-toggle="dropdown">
    <?php if ($_smarty_tpl->tpl_vars['ug_ids']->value) {?>
        <?php $_smarty_tpl->tpl_vars["ug_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["ug_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['ug_ids']->value), null, 0);?>
    <?php }?>
        <i class="icon-user"></i>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
 <span class="cm-ug-amount">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ug_count']->value, ENT_QUOTES, 'UTF-8');?>
)</span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <?php echo Smarty::$_smarty_vars['capture']['usergroups_list'];?>

    </ul>
    </div>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['usergroups_list'];?>

<?php }?>

<?php if (!defined("SMARTY_USERGROUPS_LOADED")) {?>
    <?php $_smarty_tpl->tpl_vars["tmp"] = new Smarty_variable(define("SMARTY_USERGROUPS_LOADED",true), null, 0);?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
        
        function fn_switch_default_box(holder, prefix, default_id)
        {
            var $ = Tygh.$;
            var p = $(holder).parents(':not(li,a,label,ul):first');

            var default_box = $('input[id^=' + prefix + '_' + default_id + ']', p);
            var checked_groups = $('input[id^=' + prefix + '_][type=checkbox]:checked', p).not(default_box).not(holder).length + (holder.checked ? 1 : 0);

            default_box.prop('disabled', (checked_groups == 0));
            if (checked_groups == 0) {
                default_box.prop('checked', true);
            }

            fn_calculate_usergroups(p);
            return true;
        }

        function fn_calculate_usergroups(holder)
        {
            var $ = Tygh.$;
            if ($(holder).length) {
                var note = $('.cm-ug-amount', $(holder));
            } else {
                var note = $('.cm-ug-amount');
            }

            note.each(function(){
                var p = $(this).parents(':not(li,a,label,ul):first');
                var total_checked = $('input[type=checkbox]:checked', p).length;
                $(this).html('(' + total_checked + ')');
            });

        }
        
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php }?><?php }} ?>
