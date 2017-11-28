<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5a1181a076ef6',
	'title' => 'Event-signup Fields',
	'fields' => array (
		array (
			'key' => 'field_5a1181b250f6d',
			'label' => 'Participant List',
			'name' => 'participant_list',
			'type' => 'repeater',
			'instructions' => 'This is a list of the participants that signed up. You can either sign people up from here, or on an event page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Participant',
			'sub_fields' => array (
				array (
					'key' => 'field_5a1182a650f6e',
					'label' => 'First Name',
					'name' => 'first_name',
					'type' => 'text',
					'instructions' => 'Participant\'s first name.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
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
				array (
					'key' => 'field_5a1182d050f6f',
					'label' => 'Last Name',
					'name' => 'last_name',
					'type' => 'text',
					'instructions' => 'Participant\'s last name.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
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
				array (
					'key' => 'field_5a1182e150f70',
					'label' => 'E-Mail Address',
					'name' => 'email',
					'type' => 'email',
					'instructions' => 'Participant\'s E-Mail Address.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array (
					'key' => 'field_5a11831f50f71',
					'label' => 'Phone Number',
					'name' => 'phone_number',
					'type' => 'text',
					'instructions' => 'Participant\'s phone number.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
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
				array (
					'key' => 'field_5a11834e50f72',
					'label' => 'Resume',
					'name' => 'resume',
					'type' => 'file',
					'instructions' => 'Participant\'s resume in PDF format (smaller than 10MB).',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'all',
					'min_size' => '',
					'max_size' => 10,
					'mime_types' => 'PDF',
				),
				array (
					'key' => 'field_5a1183a250f73',
					'label' => 'Motivation letter',
					'name' => 'motivation',
					'type' => 'file',
					'instructions' => 'Participant\'s motivation letter (PDF under 10MB).',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'all',
					'min_size' => '',
					'max_size' => 10,
					'mime_types' => 'PDF',
				),
				array (
					'key' => 'field_5a1183e050f74',
					'label' => 'Portfolio',
					'name' => 'portfolio',
					'type' => 'file',
					'instructions' => 'Participant\'s portfolio (PDF file under 25MB).',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'all',
					'min_size' => '',
					'max_size' => 25,
					'mime_types' => 'PDF',
				),
				array (
					'key' => 'field_5a1d7c37cfcc0',
					'label' => 'Unique ID',
					'name' => 'unique_ID',
					'type' => 'password',
					'instructions' => 'Unique ID used for deleting an event sign-up (do not edit!)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'event',
			),
			array (
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:case',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'event',
			),
			array (
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:contest',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'event',
			),
			array (
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:speeddates',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'event',
			),
			array (
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:workshop',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
