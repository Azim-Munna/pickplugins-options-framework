<?php
if ( ! defined('ABSPATH')) exit;  // if direct access 















add_shortcode('display_conditional_fields','pp_display_conditional_fields');

function pp_display_conditional_fields(){

    $FormFieldsGenerator = new FormFieldsGenerator();


    ob_start();





    ?>
<!--    <pre>--><?php ////echo var_export($_POST, true); ?><!--</pre>-->
    <div class="fieldsGenerator">
        <form action="#" method="post">


    <?php

    echo '<link rel="stylesheet"  href="'.PPOF_PLUGIN_URL.'css/fieldsGenerator.css">';
    echo '<link rel="stylesheet"  href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">';


    echo 'Uncheck to hide the text box';


    $args = array(
        'id'		=> 'test_1_checkbox_field',
        'title'		=> __('Checkbox  Field','text-domain'),
        'details'	=> __('Description of checkbox field','text-domain'),
        'default'		=> array('option_3','option_2'),
        'value'		=> 'option_1',
        'args'		=> array(
            'option_1'	=> __('Option 1','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_checkbox($args);

    $args = array(
        'id'		    => 'test_1_text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 1','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_1_checkbox_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_text($args);


    $args = array(
        'id'		    => 'test_1_textarea',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Textarea placeholder','text-domain'),
        'conditions' => array(
            'field' => 'test_1_checkbox_field','value' => 'option_1','type' => 'empty'
        )
    );

    echo $FormFieldsGenerator->field_textarea($args);




    echo '<hr>';



    $args = array(
        'id'		    => 'test_2_switcher_field',
        'title'		    => __('Switcher Field','text-domain'),
        'details'	    => __('Description of switcher field','text-domain'),
        'value'		    => 'option_2',
        'default'		=> 'option_2',
        'args'		=> array(
            'on'	=> __('On','text-domain'),
            'off'	=> __('Off','text-domain'),
        ),

    );

    echo $FormFieldsGenerator->field_switcher($args);

    $args = array(
        'id'		    => 'test_2_text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 1','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_2_switcher_field','value' => 'option_2','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_text($args);



    echo '<hr>';



    $args = array(
        'id'		    => 'test_3_checkbox_multi_field',
        'title'		    => __('Switcher Field','text-domain'),
        'details'	    => __('Description of switcher field','text-domain'),
        'value'		    => 'option_2',
        'default'		=> 'option_2',
        'args'		=> array(
            'option_2'	=> __('Show text field','text-domain'),
            'option_3'	=> __('Hide text field','text-domain'),
        ),

    );

    //echo $FormFieldsGenerator->field_checkbox_multi($args);

    $args = array(
        'id'		    => 'test_3_text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 10','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_3_checkbox_multi_field','value' => array('option_2'),'type' => '='
        )
    );

    //echo $FormFieldsGenerator->field_text($args);



    echo '<hr>';


    $args = array(
        'id'		=> 'test_4_radio_field',
        'title'		=> __('Checkbox Field','text-domain'),
        'details'	=> __('Description of checkbox field','text-domain'),
        'value'		=> 'option_2',
        'default'	=> 'option_2',
        'args'		=> array(
            'option_2'	=> __('Show text field','text-domain'),
            'option_3'	=> __('Hide text field','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_radio($args);

    $args = array(
        'id'		    => 'test_4_text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 1','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_4_radio_field','value' => 'option_2','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_text($args);



    echo '<hr>';



    $args = array(
        'id'		=> 'test_5_select_field',
        'title'		=> __('Checkbox Field','text-domain'),
        'details'	=> __('Description of checkbox field','text-domain'),
        'value'		=> 'option_1',
        'default'	=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Show text field','text-domain'),
            'option_2'	=> __('Hide text field','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_select($args);

    $args = array(
        'id'		    => 'test_5_text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 2','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_5_select_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_text($args);


    echo '<hr>';


    $args = array(
        'id'		=> 'test_6_switch_field',
        'title'		=> __('Switch Field','text-domain'),
        'details'	=> __('Description of switch field','text-domain'),
        'value'		=> 'option_1',
        'default'	=> 'option_2',
        'args'		=> array(
            'option_1'	=> __('Show text','text-domain'),
            'option_2'	=> __('Show textarea','text-domain'),
            'option_3'	=> __('Show code','text-domain'),
            'option_4'	=> __('Show Editor','text-domain'),
        ),
    );

    echo $FormFieldsGenerator->field_switch($args);


    $args = array(
        'id'		    => 'test_6_text_field',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 3','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_6_switch_field','value' => 'option_1','type' => '='
        )
    );

    echo $FormFieldsGenerator->field_text($args);

    $args = array(
        'id'		    => 'test_6_textarea',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Textarea placeholder','text-domain'),
        'conditions' => array(
            'field' => 'test_6_switch_field','value' => 'option_2','type' => '='
        )
    );

    //echo $FormFieldsGenerator->field_textarea($args);





    echo '<hr>';




echo 'Write word "apple" text field will appear';
    $args = array(
        'id'		    => 'test_7_textarea_field',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => __('Textarea value','text-domain'),
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Textarea placeholder','text-domain'),
        'visible' => array( 'switch_field', '==', 'option_1' ),
    );

    echo $FormFieldsGenerator->field_textarea($args);


    $args = array(
        'id'		    => 'test_7_text_field_5',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 4','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_7_textarea_field','value' => 'apple','type' => 'equal'
        )
    );

    echo $FormFieldsGenerator->field_text($args);


    echo '<hr>';



    echo 'Keep this field not empty, text field will hide';
    $args = array(
        'id'		    => 'test_8_textarea_field_1',
        'title'		    => __('Textarea Field','text-domain'),
        'details'	    => __('Description of textarea field','text-domain'),
        'value'		    => '',
        'default'		=> '',
        'placeholder'   => __('Textarea placeholder','text-domain'),
    );

    echo $FormFieldsGenerator->field_textarea($args);


    $args = array(
        'id'		    => 'test_8_text_field_6',
        //'field_name'	=> 'text_field', // optional
        'title'		    => __('Text Field 4','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Hello text value',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
        //'visible' => array( 'switch_field', '==', 'option_2' ),
        'conditions' => array(
            'field' => 'test_8_textarea_field_1','type' => 'empty'
        )
    );

    echo $FormFieldsGenerator->field_text($args);


    echo '<hr>';




//    echo 'Write an email address';
//    $args = array(
//        'id'		    => 'email_field',
//        'title'		    => __('Textarea Field','text-domain'),
//        'details'	    => __('Description of textarea field','text-domain'),
//        'value'		    => '',
//        'default'		=> '',
//        'placeholder'   => __('hello@hi.com','text-domain'),
//    );
//
//    echo $FormFieldsGenerator->field_email($args);
//
//
//    $args = array(
//        'id'		    => 'text_field_7',
//        //'field_name'	=> 'text_field', // optional
//        'title'		    => __('Text Field 4','text-domain'),
//        'details'	    => __('Description of text field','text-domain'),
//        'value'		    => 'Hello text value',
//        'default'		=> __('Default Text Value','text-domain'),
//        'placeholder'   => __('Text value','text-domain'),
//        //'visible' => array( 'switch_field', '==', 'option_2' ),
//        'conditions' => array(
//            'field' => 'email_field','type' => 'regexp','pattern' => '[a-z]+@[a-z]+.[a-z]+','modifier' => 'gi'
//        )
//    );
//
//    echo $FormFieldsGenerator->field_text($args);


    //echo '<hr>';





    $args = array(
        'id'		    => 'submit_field',
        'title'		    => __('Text Field','text-domain'),
        'details'	    => __('Description of text field','text-domain'),
        'value'		    => 'Submit',
        'default'		=> __('Default Text Value','text-domain'),
        'placeholder'   => __('Text value','text-domain'),
    );

    echo $FormFieldsGenerator->field_submit($args);



    ?>
        </form>
    </div>
    <?php

    return ob_get_clean();
}