<?php
/**
 * Created by PhpStorm.
 * User: apokorski
 * Date: 26/07/2018
 * Time: 11:27
 */

class MassActionPlugin extends MantisPlugin {

    /**
     * A method that populates the plugin information and minimum requirements.
     * @return void
     */
    function register() {
        $this->name = 'Copie des actions de masse';
        $this->description = 'Copie les actions de masses en haut du tableau d\'affichage des fiches.';

        $this->version     = '1.0';
        $this->requires    = array(
            'MantisCore'       => '2.0.0',
        );

        $this->author      = 'Alexis POKORSKI';
        $this->contact     = '';
        $this->url         = '';
    }

    /**
     * Event hook declaration.
     * @return array
     */
    function hooks(){
        return array(
            "EVENT_LAYOUT_RESOURCES" => 'ressources',
            'EVENT_MENU_FILTER'=>'reporting_menu'
        );
    }

    /**
     * Include massAction.
     */
    function reporting_menu(){
        include('pages/menuActions.php');
    }

    /**
     * Include js function.
     */
    function ressources() {
        if(basename($_SERVER['PHP_SELF']) === 'view_all_bug_page.php'){
            echo '<script src="'. plugin_file('UpdateSelected.js') . '" ></script>';
        }
    }
}