<?php
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_59df8b583fb84',
		'title' => 'Front Page Field Group',
		'fields' => array (
			array (
				'key' => 'field_59df8b61efbec',
				'label' => 'Stats Repeat Group',
				'name' => 'stats_repeat_group',
				'type' => 'repeater',
				'instructions' => 'Front-page statistic',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_59df8c0aefbee',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array (
					array (
						'key' => 'field_59df8b8eefbed',
						'label' => 'Stat value',
						'name' => 'stat_value',
						'type' => 'number',
						'instructions' => 'set a value for the statistic',
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
						'append' => '+',
						'min' => '',
						'max' => '',
						'step' => 1,
					),
					array (
						'key' => 'field_59df8c0aefbee',
						'label' => 'Stat description',
						'name' => 'stat_description',
						'type' => 'text',
						'instructions' => 'Statistic description',
						'required' => 0,
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
						'maxlength' => 30,
					),
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array (
			0 => 'excerpt',
			1 => 'slug',
			2 => 'author',
			3 => 'categories',
			4 => 'tags',
		),
		'active' => 1,
		'description' => '',
	));

	endif;
