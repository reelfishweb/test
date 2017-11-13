<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestAjax
 *
 * @author cwkadmin
 */
class TestAjax {

    public static function init()
    {

        $ajaxevents = array(
            'searchEmployee' => false,
        );
        foreach ($ajaxevents as $ajax => $priv)
        {
            add_action('wp_ajax_' . $ajax, array(__CLASS__, $ajax));
            if (!$priv)
            {
                add_action('wp_ajax_nopriv_' . $ajax, array(__CLASS__, $ajax));
            }
        }
    }

    public static function searchEmployee()
    {
        $aEmployee = array();
        $args = array(
            'post_type' => 'employee',
            'p;ost_status' => array('pending', 'publish'),
        );
        $args['order'] = 'DESC';
        $posts = new WP_Query($args);
        $i = 0;
        foreach ($posts as $post)
        {
            $id = $post->ID;
            $imgID = get_field('image', $id);
            $scrIMG = wp_get_attachment_image_src($imgID);
            $name = get_field('name', $id);
            if (!empty($name))
            {
                echo '<div><img src="' . $scrIMG[0] . '"><p>' . $name . '</p></div>';
            }
        }
    }

}

TestAjax::init();
