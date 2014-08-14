<?php
/*
 * Sytems settings form for listing skill
 */
function skillbar_form($form, &$form_state) {

    $form['javascript'] = array(
        '#type' => 'textfield',
        '#title' => t('JavaScript'),
        '#default_value' => variable_get('javascript'),
        '#description' => t('Enter a percent of your javascript skill'),
    );
    $form['css3'] = array(
        '#type' => 'textfield',
        '#title' => t('CSS3'),
        '#default_value' => variable_get('css3'),
        '#description' => t('Enter a percent of your Css3 skill'),
    );
    $form['html5'] = array(
        '#type' => 'textfield',
        '#title' => t('HTML5'),
        '#default_value' => variable_get('html5'),
        '#description' => t('Enter a percent of your HTML5 skill'),
    );
    $form['php'] = array(
        '#type' => 'textfield',
        '#title' => t('PHP'),
        '#default_value' => variable_get('php'),
        '#description' => t('Enter a percent of your PHP skill'),
    );
    $form['mysql'] = array(
        '#type' => 'textfield',
        '#title' => t('MySql'),
        '#default_value' => variable_get('mysql'),
        '#description' => t('Enter a percent of your MySql skill'),
    );

    return(system_settings_form($form));

}