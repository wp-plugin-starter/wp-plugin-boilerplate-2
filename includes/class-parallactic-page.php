<?php

class Parallactic_Page {

	public function __construct() {
        add_action('acf/init', array($this, 'add_custom_fields'));

        $this->add_image_sizes();

	}
    
    public function add_custom_fields() {
        if (!function_exists('acf_add_local_field_group')) return;

        acf_add_local_field_group(array(
            'key' => 'group_page_content',
            'title' => 'Page Content',
            'fields' => array(
                array(
                    'key' => 'field_page_content',
                    'label' => 'Content Blocks',
                    'name' => 'page_content',
                    'type' => 'flexible_content',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layouts' => array(
                        'layout_page_text_block' => array(
                            'key' => 'layout_page_text_block',
                            'name' => 'text_block',
                            'label' => 'Text Block',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_page_text_block_text',
                                    'label' => 'Text',
                                    'name' => 'text',
                                    'type' => 'wysiwyg',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 0,
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        'layout_page_image_block' => array(
                            'key' => 'layout_page_image_block',
                            'name' => 'image_block',
                            'label' => 'Image',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_page_image_block_image',
                                    'label' => 'Image',
                                    'name' => 'image',
                                    'type' => 'image',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'return_format' => 'array',
                                    'preview_size' => 'medium',
                                    'library' => 'all',
                                    'min_width' => '',
                                    'min_height' => '',
                                    'min_size' => '',
                                    'max_width' => '',
                                    'max_height' => '',
                                    'max_size' => '',
                                    'mime_types' => '',
                                ),
                                array(
                                    'key' => 'field_page_image_block_caption',
                                    'label' => 'Caption',
                                    'name' => 'caption',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        'layout_page_contact_form' => array(
                            'key' => 'layout_page_contact_form',
                            'name' => 'contact_form',
                            'label' => 'Contact Form',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_page_contact_form_title',
                                    'label' => 'Form Title',
                                    'name' => 'title',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                ),
                                array(
                                    'key' => 'field_page_contact_form_email',
                                    'label' => 'Email Receiver',
                                    'name' => 'email_to',
                                    'type' => 'email',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                ),
                                array(
                                    'key' => 'field_page_contact_form_button_label',
                                    'label' => 'Button Label',
                                    'name' => 'button_label',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => 'Submit',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                ),
                                array(
                                    'key' => 'field_page_contact_form_confirm_message',
                                    'label' => 'Confirm Message',
                                    'name' => 'confirm_message',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                ),
                                array(
                                    'key' => 'field_page_contact_form_fields',
                                    'label' => 'Form Fields',
                                    'name' => 'fields',
                                    'type' => 'repeater',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'collapsed' => '',
                                    'min' => 0,
                                    'max' => 0,
                                    'layout' => 'block',
                                    'button_label' => 'Add Field',
                                    'sub_fields' => array(
                                        array(
                                            'key' => 'field_page_contact_form_label',
                                            'label' => 'Field Label',
                                            'name' => 'label',
                                            'type' => 'text',
                                            'instructions' => '',
                                            'required' => 1,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                            'maxlength' => '',
                                        ),
                                        array(
                                            'key' => 'field_page_contact_form_type',
                                            'label' => 'Field Type',
                                            'name' => 'type',
                                            'type' => 'select',
                                            'instructions' => '',
                                            'required' => 1,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'choices' => array(
                                                'text' => 'Text',
                                                'number' => 'Number',
                                                'email' => 'Email',
                                                'tel' => 'Phone Number',
                                                'textarea' => 'Textarea',
                                            ),
                                            'default_value' => 'text',
                                            'allow_null' => 0,
                                            'multiple' => 0,
                                            'ui' => 0,
                                            'return_format' => 'value',
                                            'ajax' => 0,
                                            'placeholder' => '',
                                        ),
                                        array(
                                            'key' => 'field_page_contact_form_mandatory',
                                            'label' => 'Mandatory',
                                            'name' => 'mandatory',
                                            'type' => 'true_false',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'message' => 'Make this field mandatory',
                                            'default_value' => 0,
                                            'ui' => 0,
                                            'ui_on_text' => '',
                                            'ui_off_text' => '',
                                        ),
                                        array(
                                            'key' => 'field_page_contact_form_validation',
                                            'label' => 'Validation Message',
                                            'name' => 'validation_message',
                                            'type' => 'text',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => array(
                                                array(
                                                    array(
                                                        'field' => 'field_page_contact_form_mandatory',
                                                        'operator' => '==',
                                                        'value' => '1',
                                                    ),
                                                ),
                                            ),
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'default_value' => 'Please enter a value',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                            'maxlength' => '',
                                        ),
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                    ),
                    'button_label' => 'Add Content Block',
                    'min' => '',
                    'max' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => array(
                // 0 => 'the_content',
                // 1 => 'excerpt',
                // 2 => 'discussion',
                // 3 => 'comments',
                // 4 => 'author',
                // 5 => 'format',
                // 6 => 'page_attributes',
                // 7 => 'featured_image',
                // 8 => 'categories',
                // 9 => 'tags',
                // 10 => 'send-trackbacks',
            ),
            'active' => true,
            'description' => '',
        ));

    }

    private function add_image_sizes() {
        add_image_size('xl', 1280, 1440, false);
    }

}
