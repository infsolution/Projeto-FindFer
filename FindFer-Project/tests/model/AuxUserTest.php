<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-09-02 at 01:53:16.
 */
require_once '../model/AuxUser.php';
class AuxUserTest extends PHPUnit_Framework_TestCase {

    /**
     * @var AuxUser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new AuxUser;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers AuxUser::defineUser
     * @todo   Implement testDefineUser().
     */
 
    public function testDefineUser() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers AuxUser::getQuery
     * @todo   Implement testGetQuery().
     */
    public function testa_se_a_query_e_criada_corretamente() {
        // Remove the following lines when you implement this test.
       $this->assertEquals("SELECT id_conta FROM user WHERE user_name = 'catiane' AND password = '1234'",$this->object->getQuery("id_conta", "user_name = 'catiane' AND password = '1234'"));
    }
    function testa_se_retorna_id_conta_com_dados_corretos(){
        $this->assertEquals(2,  $this->object->defineUser('Catiane', '1234'));
    }
    function testa_se_retorna_zero_com_dados_errados(){
        $this->assertEquals(0,  $this->object->defineUser('Cate', '134'));
    }

}
