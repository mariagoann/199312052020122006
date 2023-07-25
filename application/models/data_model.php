<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
/**
 * @author g
 */

 class data_model extends CI_Model{
	public function __construct(){
        parent::__construct();
		$this->load->model('general_model','general_model');
	}
    private static $_json1 = 'http://103.226.55.159/json/data_rekrutmen.json';
    private static $_json2 = 'http://103.226.55.159/json/data_attribut.json';

    public function mappingData(){
        $_map = [];
        $_peserta = json_decode($this->general_model->curl(false,self::$_json1),true);
        $_attribut = json_decode($this->general_model->curl(false,self::$_json2),true);
        $i=0;
        foreach ($_peserta['Form Responses 1'] as $key => $value) {
            echo $value['id']."-".$_attribut[$i]['id_pendaftar']."\n";
            // if($value['id']==$_attribut[$i]['id_pendaftar']){
            //     $_peserta['attribut'] = $_attribut[$i];
            // }
            $i++;
        }
        echo "<pre>";
        print_r($_peserta);
    }

    public function getPeserta(){
        $_peserta= json_decode($this->general_model->curl(false,self::$_json1),true);
        return $_peserta['Form Responses 1'];
    }
    public function getAttribut(){
        $attribute = json_decode($this->general_model->curl(false,self::$_json2),true);
        return $attribute;
    }

 }
 ?>