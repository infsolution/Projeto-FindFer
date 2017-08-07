<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-07-27 at 03:35:25.
 */
require_once '../model/Connection.php';
class ConnectionTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Connection
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Connection;
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    function testa_conexao_com_banco_de_dados(){
        $this->conn = new PDO("mysql:host=localhost;dbname=findferdb","root", "ffapp2017ffapp");
        $this->assertEquals($this->conn,  $this->object->connect());
    }
    
   
    /*function testa_metodo_execute(){//OK
        $this->object->connect();
        $query = "INSERT INTO media_type (name_type) VALUES ('SVG');";
        $this->assertEquals(7, $this->object->execute($query));
    }*/

    /*function testa_metodo_insert(){
            $this->object->connect();
            $dados=Array('name_type'=>'PNG');
            $this->assertEquals(3,  $this->object->insert('media_type', $dados));
            } 
         
    function testa_metodo_update(){
        //"UPDATE media_type SET name_type =  H64 WHERE id_media_type = 1"
        $this->object->connect();
        $dados=Array('name_type'=>'SGV');
        $this->assertEquals(0,  $this->object->update("media_type", $dados,"id_media_type = 2"));

    }
    function testa_metodo_delete(){
        $this->object->connect();
        $this->assertEquals(0,  $this->object->delete('media_type', "id_media_type = 1"));
    }*/
    function testa_metodo_select(){
        $this->object->connect();
        $this->assertEquals(array(array('id_media_type'=>'2','name_type'=>'SVG'),array('id_media_type'=>'3','name_type'=>'PNG')),  $this->object->select('media_type'));
    }

}
