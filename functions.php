<?php

	add_action('after_setup_theme', 'portefolio_setup');
	add_action('init', 'create_post_type');

	if(! function_exists('portefolio_setup')){
		function portefolio_setup(){
			register_nav_menu('header-menu', __('Header Menu', "mon portefolio"));
			add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image'));
			add_theme_support('post-thumbnails');
		}
	}

	if(! function_exists('create_post_type')){
		function create_post_type(){
			register_post_type('competences',
				array('labels' => array(
						'name' => __('compétences'),
						'singular_name' => __('compétence')
						),
					'supports' => array('title',
					                    'custom-fields', 
					                    'thumbnail', 
					                    'post-formats'),
					'public' => true,
					'has_archive' => true
				)
			);

			register_post_type('travaux',
				array('labels' => array(
						'name' => __('travaux'),
						'singular_name' => __('travail')
						),
					'supports' => array('title',
					'editor', 'thumbnail', 'post-formats'),
					'public' => true,
					'has_archive' => true
				)
			);
		}
	}