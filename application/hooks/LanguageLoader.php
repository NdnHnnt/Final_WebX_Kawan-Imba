<?php 
class LanguageLoader{
    function initialize(){
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang){
            $ci->lang->load('menu',$siteLang);  //$siteLang="english" == 'english/menu_lang.php'
                                                //$siteLang="bahasa" == 'bahasa/menu_lang.php'
        }
        else {
            $ci->lang->load('menu','English'); //english/menu_lang.phpS
        }
    }
}