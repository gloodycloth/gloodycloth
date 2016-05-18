<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Fields_Terms
 */
class NF_Fields_Terms extends NF_Fields_ListCheckbox
{
    protected $_name = 'terms';
    protected $_type = 'terms';

    protected $_nicename = 'Terms List';

    protected $_section = '';

    protected $_icon = 'tags';

    protected $_settings = array( 'taxonomy' );

    protected $_settings_exclude = array( 'required' );

<<<<<<< HEAD
    protected $_excluded_taxonomies = array(
        'post_format'
    );

=======
>>>>>>> a1eca4bf0077364949b64d53c7e76f88657445db
    public function __construct()
    {
        parent::__construct();

        $this->_nicename = __( 'Terms List', 'ninja-forms' );

        add_filter( 'ninja_forms_localize_field_' . $this->_type, array( $this, 'add_term_options' ) );
        add_filter( 'ninja_forms_localize_field_' . $this->_type . '_preview', array( $this, 'add_term_options' ) );

        $term_settings = array();
<<<<<<< HEAD
        $taxonomies = get_taxonomies( array( 'public' => true ), 'objects' );
        foreach( $taxonomies as $name => $taxonomy ){

            if( in_array( $name, $this->_excluded_taxonomies ) ) continue;

=======
        $taxonomies = get_taxonomies( '', 'objects' );
        foreach( $taxonomies as $name => $taxonomy ){
>>>>>>> a1eca4bf0077364949b64d53c7e76f88657445db
            $this->_settings[ 'taxonomy' ][ 'options' ][] = array(
                'label' => $taxonomy->labels->name,
                'value' => $name
            );

<<<<<<< HEAD
            $terms = get_terms( $name, array( 'hide_empty' => false ) );

            if( ! $terms ){
                $term_settings[] =  array(
                    'name' => $name . '_no_terms',
                    'type' => 'html',
                    'width' => 'full',
                    'value' => sprintf( __( 'No available terms for this taxonomy. %sAdd a term%s', 'ninja-forms' ), '<a href="' . admin_url( "edit-tags.php?taxonomy=$name" ) . '">', '</a>' ),
                    'deps' => array(
                        'taxonomy' => $name
                    )
                );
            }

            foreach( $terms as $term ){

                if( 1 == $term->term_id ) continue;

                $term_settings[] =  array(
                    'name' => 'taxonomy_term_' . $term->term_id,
                    'type' => 'toggle',
                    'label' => $term->name . ' (' . $term->count .')',
=======
            $terms = get_terms( $name );
            foreach( $terms as $term ){
                $term_settings[] =  array(
                    'name' => 'taxonomy_term_' . $term->term_id,
                    'type' => 'toggle',
                    'label' => $term->name,
>>>>>>> a1eca4bf0077364949b64d53c7e76f88657445db
                    'width' => 'one-third',
                    'deps' => array(
                        'taxonomy' => $name
                    )
                );
            }
        }

        $this->_settings[ 'taxonomy_terms' ] = array(
            'name' => 'taxonomy_terms',
            'type' => 'fieldset',
            'label' => __( 'Available Terms' ),
            'width' => 'full',
            'group' => 'primary',
<<<<<<< HEAD
            'settings' => $term_settings
=======
            'settings' => $term_settings,
>>>>>>> a1eca4bf0077364949b64d53c7e76f88657445db
        );

        $this->_settings[ 'options' ][ 'group' ] = '';
    }

<<<<<<< HEAD
    public function process( $field, $data )
    {
        return $data;
    }

    public function add_term_options( $field )
    {
        $settings = ( is_object( $field ) ) ? $field->get_settings() : $field[ 'settings' ];
        if( ! isset( $settings[ 'taxonomy' ] ) ) return $field;

        $terms = get_terms( $settings[ 'taxonomy' ], array( 'hide_empty' => false ) );

        $settings['options'] = array();
        foreach( $terms as $term ) {

            if( ! isset( $settings[ 'taxonomy_term_' . $term->term_id ] ) ) continue;
            if( ! $settings[ 'taxonomy_term_' . $term->term_id ] ) continue;

            $settings['options'][] = array(
=======
    public function add_term_options( $field )
    {
        if( ! isset( $field[ 'settings' ][ 'taxonomy' ] ) ) return $field;

        $terms = get_terms( $field[ 'settings' ][ 'taxonomy' ] );

        $field['settings']['options'] = array();
        foreach( $terms as $term ) {

            if( ! isset( $field[ 'settings' ][ 'taxonomy_term_' . $term->term_id ] ) ) continue;
            if( ! $field[ 'settings' ][ 'taxonomy_term_' . $term->term_id ] ) continue;

            $field['settings']['options'][] = array(
>>>>>>> a1eca4bf0077364949b64d53c7e76f88657445db
                'label' => $term->name,
                'value' => $term->term_id,
                'calc' => '',
                'selected' => 0,
                'order' => 0
            );
        }

<<<<<<< HEAD
        if( is_object( $field ) ) {
            $field->update_settings( $settings );
        } else {
            $field[ 'settings' ] = $settings;
        }

=======
>>>>>>> a1eca4bf0077364949b64d53c7e76f88657445db
        return $field;
    }
}
