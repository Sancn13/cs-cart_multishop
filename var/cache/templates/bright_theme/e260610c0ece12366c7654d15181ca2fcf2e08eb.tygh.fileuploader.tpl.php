<?php /* Smarty version Smarty-3.1.21, created on 2021-05-25 14:01:46
         compiled from "C:\xampp\htdocs\cscmultiShop\design\themes\responsive\templates\common\fileuploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81142855860acd91aa0dc90-03307490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e260610c0ece12366c7654d15181ca2fcf2e08eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscmultiShop\\design\\themes\\responsive\\templates\\common\\fileuploader.tpl',
      1 => 1617678752,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81142855860acd91aa0dc90-03307490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'server_env' => 0,
    'max_upload_filesize' => 0,
    'post_max_size' => 0,
    'upload_max_filesize' => 0,
    'prefix' => 0,
    'var_name' => 0,
    'disabled_param' => 0,
    'label_id' => 0,
    'images' => 0,
    'id_var_name' => 0,
    'image' => 0,
    'id' => 0,
    'po' => 0,
    'image_id' => 0,
    'delete_link' => 0,
    'multiupload' => 0,
    'download_link' => 0,
    'location' => 0,
    'image_name' => 0,
    'upload_another_file_text' => 0,
    'upload_file_text' => 0,
    'allow_url_uploading' => 0,
    'hidden_name' => 0,
    'hidden_value' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60acd91ab66931_46453055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60acd91ab66931_46453055')) {function content_60acd91ab66931_46453055($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscmultiShop/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','save','upload_another_file','upload_file','or','specify_url','file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','save','upload_another_file','upload_file','or','specify_url'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_var_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp1, null, 0);?>

<div class="ty-fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>hidden disabled<?php }?>>
    <input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['images']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');
}?>" />

    <?php  $_smarty_tpl->tpl_vars["image"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image"]->_loop = false;
 $_smarty_tpl->tpl_vars["image_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image"]->key => $_smarty_tpl->tpl_vars["image"]->value) {
$_smarty_tpl->tpl_vars["image"]->_loop = true;
 $_smarty_tpl->tpl_vars["image_id"]->value = $_smarty_tpl->tpl_vars["image"]->key;
?>
        <div class="ty-fileuploader__file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['image']->value['location']=="cart") {?>
                        <?php $_smarty_tpl->tpl_vars["delete_link"] = new Smarty_variable("checkout.delete_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value)."&redirect_mode=cart", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["download_link"] = new Smarty_variable("checkout.get_custom_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value), null, 0);?>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['image']->value['is_image']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['detailed']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['thumbnail']), ENT_QUOTES, 'UTF-8');?>
" /></a><br />
                <?php }?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:uploaded_files")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['delete_link']->value) {?>
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['delete_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
if (!($_smarty_tpl->tpl_vars['po']->value['required']=="Y"&&smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value)==1)) {?><i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y") {?>Tygh.fileuploader.toggle_links('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="ty-icon-cancel-circle fileuploader__icon"></i><?php }
if ($_smarty_tpl->tpl_vars['delete_link']->value) {?></a><?php }?><span class="ty-fileuploader__filename ty-filename-link"><?php if ($_smarty_tpl->tpl_vars['download_link']->value) {?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['download_link']->value) {?></a><?php }?></span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </p>
        </div>
    <?php } ?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:uploader")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:uploader"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file hidden">
                <i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y") {?>Tygh.fileuploader.toggle_links(this.id, 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="ty-icon-cancel-circle ty-fileuploader__icon"></i>
                <span class="ty-fileuploader__filename ty-filename-link"></span>
                <?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>
                    <br />
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0);?>

                <?php }?>
            </p>
        </div>

        <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"&&$_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local"><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_another_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:uploader"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div><!--fileuploader--><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/fileuploader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/fileuploader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['post_max_size'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value>$_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['upload_max_filesize'] = new Smarty_variable($_smarty_tpl->tpl_vars['max_upload_filesize']->value, null, 0);?>
    <?php }?>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $.extend(_, {
            post_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_bytes: '<?php echo htmlspecialchars(fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',

            post_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
            files_upload_max_size_mbytes: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
'
        });

        _.tr({
            file_is_too_large: '<?php echo strtr($_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            files_are_too_large: '<?php echo strtr($_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_var_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp2, null, 0);?>

<div class="ty-fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>hidden disabled<?php }?>>
    <input type="hidden" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['images']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');
}?>" />

    <?php  $_smarty_tpl->tpl_vars["image"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["image"]->_loop = false;
 $_smarty_tpl->tpl_vars["image_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["image"]->key => $_smarty_tpl->tpl_vars["image"]->value) {
$_smarty_tpl->tpl_vars["image"]->_loop = true;
 $_smarty_tpl->tpl_vars["image_id"]->value = $_smarty_tpl->tpl_vars["image"]->key;
?>
        <div class="ty-fileuploader__file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['image']->value['location']=="cart") {?>
                        <?php $_smarty_tpl->tpl_vars["delete_link"] = new Smarty_variable("checkout.delete_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value)."&redirect_mode=cart", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["download_link"] = new Smarty_variable("checkout.get_custom_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value), null, 0);?>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['image']->value['is_image']) {?>
                    <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['detailed']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['image']->value['thumbnail']), ENT_QUOTES, 'UTF-8');?>
" /></a><br />
                <?php }?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:uploaded_files")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['delete_link']->value) {?>
                    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['delete_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
if (!($_smarty_tpl->tpl_vars['po']->value['required']=="Y"&&smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value)==1)) {?><i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y") {?>Tygh.fileuploader.toggle_links('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="ty-icon-cancel-circle fileuploader__icon"></i><?php }
if ($_smarty_tpl->tpl_vars['delete_link']->value) {?></a><?php }?><span class="ty-fileuploader__filename ty-filename-link"><?php if ($_smarty_tpl->tpl_vars['download_link']->value) {?><a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['download_link']->value) {?></a><?php }?></span>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </p>
        </div>
    <?php } ?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"fileuploader:uploader")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"fileuploader:uploader"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ty-nowrap" id="file_uploader_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-fileuploader__file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
            <p class="cm-fu-file hidden">
                <i id="clean_selection_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" onclick="Tygh.fileuploader.clean_selection(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y") {?>Tygh.fileuploader.toggle_links(this.id, 'show');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="ty-icon-cancel-circle ty-fileuploader__icon"></i>
                <span class="ty-fileuploader__filename ty-filename-link"></span>
                <?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>
                    <br />
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_cart_save_file",'but_name'=>"dispatch[checkout.update]",'but_meta'=>"hidden hidden-phone hidden-tablet",'but_text'=>$_smarty_tpl->__("save")), 0);?>

                <?php }?>
            </p>
        </div>

        <div class="ty-fileuploader__file-link <?php if ($_smarty_tpl->tpl_vars['multiupload']->value!="Y"&&$_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-fileuploader-field" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>disabled<?php }?>/><div class="ty-fileuploader__file-local upload-file-local"><input type="file" class="ty-fileuploader__file-input" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');<?php if ($_smarty_tpl->tpl_vars['location']->value=='cart') {?>$('#button_cart_save_file').click();<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><a data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_another_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a><a data-ca-target-id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-multi="N" class="ty-fileuploader__a<?php if ($_smarty_tpl->tpl_vars['images']->value) {?> hidden<?php }?>"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['upload_file_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("upload_file") : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['allow_url_uploading']->value) {?>&nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;<a onclick="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value=="Y") {?>Tygh.fileuploader.check_image(this.id);<?php } else { ?>Tygh.fileuploader.toggle_links(this.id, 'hide');<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("specify_url");?>
</a><?php }
if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="hidden_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-skip-avail-switch"><?php }?></div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"fileuploader:uploader"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</div><!--fileuploader--><?php }?><?php }} ?>
