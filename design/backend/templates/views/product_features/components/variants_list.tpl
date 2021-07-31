    {if $feature_variants|is_array}
        {include file="common/pagination.tpl" div_id="content_tab_feature_variants_`$id`" pagination_class=$hide_inputs_class}
        {assign var="variants_ids" value=$feature_variants|array_keys}
    {/if}
    {if $id}
        <input type="hidden" value="{if $variants_ids}{","|implode:$variants_ids}{/if}" name="feature_data[original_var_ids]">
    {/if}
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive" width="100%">
        <thead>
        <tr class="cm-first-sibling">
            {hook name="product_features:variants_list_head"}
                <th class="cm-extended-feature {if $feature_type != "ProductFeatures::EXTENDED"|enum}hidden{/if}">
                    <div name="plus_minus" id="on_st_{$id}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand hidden cm-combinations-features-{$id} icon-caret-right"></div><div name="minus_plus" id="off_st_{$id}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand cm-combinations-features-{$id} icon-caret-down"></div>
                </th>
                <th width="5%">{__("position_short")}</th>
                <th width="50%">{__("variant")}</th>
            {/hook}
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody class="hover" id="box_feature_variants_{$var.variant_id}">
        {foreach from=$feature_variants item="var" name="fe_f"}
        {assign var="num" value=$smarty.foreach.fe_f.iteration}
        <tr>
            {hook name="product_features:variants_list_body"}
                <td width="2%" class="cm-extended-feature {if $feature_type != "ProductFeatures::EXTENDED"|enum}hidden{/if}" data-th="&nbsp;">
                    <span id="on_extra_feature_{$id}_{$num}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination-features-{$id}"><span class="icon-caret-right"></span></span>
                    <span id="off_extra_feature_{$id}_{$num}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand cm-combination-features-{$id}"><span class="icon-caret-down"></span></span>
                </td>
                <td width="5%" data-th="{__("position_short")}">
                    <input type="hidden" name="feature_data[variants][{$num}][variant_id]" value="{$var.variant_id}">
                    <input type="text" name="feature_data[variants][{$num}][position]" value="{$var.position}" size="4" class="input-micro input-hidden"/></td>
                <td data-th="{__("variant")}">
                    <div class="input-prepend input-prepend--full">
                        <div class="colorpicker--wrapper">
                        {include file="common/colorpicker.tpl"
                            cp_name="feature_data[variants][{$num}][color]"
                            cp_id="feature_value_color_picker_{$num}"
                            cp_value=$var.color
                            show_picker=true
                            cp_meta="js-feature-variant-conditional-column colorpicker--hidden"
                            cp_attrs=["data-ca-column-for-feature-style" => "ProductFeatureStyles::COLOR"|enum, "data-ca-column-for-filter-style" => "ProductFilterStyles::COLOR"|enum]
                        }
                        </div>
                        <input type="text" name="feature_data[variants][{$num}][variant]" value="{$var.variant}" class="input-full input-hidden cm-feature-value {if $feature_type == "ProductFeatures::NUMBER_SELECTBOX"|enum}cm-value-decimal{/if}">
                    </div>
                </td>
            {/hook}
            <td data-th="&nbsp;">&nbsp;</td>
            <td class="right nowrap" data-th="&nbsp;">
                {include file="buttons/multiple_buttons.tpl" item_id="feature_variants_`$var.variant_id`" tag_level="3" only_delete="Y"}
            </td>
        </tr>
        <tr {if $feature_type != "ProductFeatures::EXTENDED"|enum}class="hidden"{/if} id="extra_feature_{$id}_{$num}">
            <td colspan="6" data-th="{__("information")}">
                <div class="control-group">
                    <label class="control-label" for="elm_image_{$id}_{$num}">{__("image")}</label>
                    <div class="controls">
                        {include file="common/attach_images.tpl" image_name="variant_image" image_key=$num hide_titles=true no_detailed=true image_object_type="feature_variant" image_type="V" image_pair=$var.image_pair prefix=$id}
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_description_{$id}_{$num}">{__("description")}</label>
                    <div class="controls">
                    <!--processForm-->
                    <textarea id="elm_description_{$id}_{$num}" name="feature_data[variants][{$num}][description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long">{$var.description}</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_page_title_{$id}_{$num}">{__("page_title")}</label>
                    <div class="controls">
                        <input type="text" name="feature_data[variants][{$num}][page_title]" id="elm_page_title_{$id}_{$num}" size="55" value="{$var.page_title}" class="input-large" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_url_{$id}_{$num}">{__("url")}</label>
                    <div class="controls">
                    <input type="text" name="feature_data[variants][{$num}][url]" id="elm_url_{$id}_{$num}" size="55" value="{$var.url}" class="input-large" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_meta_description_{$id}_{$num}">{__("meta_description")}</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][{$num}][meta_description]" id="elm_meta_description_{$id}_{$num}" cols="55" rows="2" class="input-textarea-long">{$var.meta_description}</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="elm_meta_keywords_{$id}_{$num}">{__("meta_keywords")}</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][{$num}][meta_keywords]" id="elm_meta_keywords_{$id}_{$num}" cols="55" rows="2" class="input-textarea-long">{$var.meta_keywords}</textarea>
                    </div>
                </div>
                {hook name="product_features:extended_feature"}{/hook}
            </td>
        </tr>
        {/foreach}
        </tbody>

        {math equation="x + 1" assign="num" x=$num|default:0}
        {$var = array()}
        <tbody class="hover" id="box_add_variants_for_existing_{$id}">
        <tr>
            {hook name="product_features:variants_list_clone"}
                <td class="cm-extended-feature {if $feature_type != "ProductFeatures::EXTENDED"|enum}hidden{/if}" data-th="&nbsp;">
                    <span id="on_extra_feature_{$id}_{$num}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination-features-{$id}"><span class="icon-caret-right"></span></span>
                    <span id="off_extra_feature_{$id}_{$num}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand cm-combination-features-{$id}"><span class="icon-caret-down"></span></span>
                </td>
                <td data-th="{__("position_short")}">
                    <input type="text" name="feature_data[variants][{$num}][position]" value="" size="4" class="input-micro" /></td>
                <td data-th="{__("variant")}">
                    <div class="input-prepend input-prepend--full">
                        <div class="colorpicker--wrapper">
                        {include file="common/colorpicker.tpl"
                            cp_name="feature_data[variants][{$num}][color]"
                            cp_id="feature_value_color_picker_{$num}"
                            cp_value="#ffffff"
                            show_picker=true
                            cp_meta="js-feature-variant-conditional-column"
                            cp_attrs=["data-ca-column-for-feature-style" => "ProductFeatureStyles::COLOR"|enum, "data-ca-column-for-filter-style" => "ProductFilterStyles::COLOR"|enum]
                        }
                        </div>
                        <input type="text" name="feature_data[variants][{$num}][variant]" value="" class="input-full cm-feature-value {if $feature_type == "ProductFeatures::NUMBER_SELECTBOX"|enum}cm-value-decimal{/if}">
                    </div>
                </td>
            {/hook}
            <td data-th="&nbsp;">&nbsp;</td>
            <td class="right" data-th="&nbsp;">
                {include file="buttons/multiple_buttons.tpl" item_id="add_variants_for_existing_`$id`" tag_level=2}
            </td>
        </tr>
        <tr {if $feature_type != "ProductFeatures::EXTENDED"|enum}class="hidden"{/if} id="extra_feature_{$id}_{$num}">
            <td colspan="6" data-th="{__("information")}">

                <div class="control-group">
                    <label class="control-label" for="elm_image_{$id}_{$num}">{__("image")}</label>
                    <div class="controls">
                    {include file="common/attach_images.tpl" image_name="variant_image" image_key=$num hide_titles=true no_detailed=true image_object_type="feature_variant" image_type="V" image_pair="" prefix=$id}
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_description_{$id}_{$num}">{__("description")}</label>
                    <div class="controls">
                    <textarea id="elm_description_{$id}_{$num}" name="feature_data[variants][{$num}][description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_page_title_{$id}_{$num}">{__("page_title")}</label>
                    <div class="controls">
                    <input type="text" name="feature_data[variants][{$num}][page_title]" id="elm_page_title_{$id}_{$num}" size="55" value="" class="input-large" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_url_{$id}_{$num}">{__("url")}</label>
                    <div class="controls">
                    <input type="text" name="feature_data[variants][{$num}][url]" id="elm_url_{$id}_{$num}" size="55" value="" class="input-large" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_meta_description_{$id}_{$num}">{__("meta_description")}</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][{$num}][meta_description]" id="elm_meta_description_{$id}_{$num}" cols="55" rows="2" class="input-textarea-long"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_meta_keywords_{$id}_{$num}">{__("meta_keywords")}</label>
                    <div class="controls">
                    <textarea name="feature_data[variants][{$num}][meta_keywords]" id="elm_meta_keywords_{$id}_{$num}" cols="55" rows="2" class="input-textarea-long"></textarea>
                    </div>
                </div>
                {hook name="product_features:extended_feature"}{/hook}
            </td>
        </tr>
        </tbody>
        </table>
    </div>
{if $feature_variants|is_array}
    {include file="common/pagination.tpl" div_id="content_tab_feature_variants_`$id`"}
{/if}
