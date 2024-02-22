<?php
require 'src/index.php';
use PHPUnit\Framework\TestCase;

class IntegracionTest extends TestCase{

    //DATA PROVIDER 
    public static function dataVuelta(){
        return[
            ["AlOh", "hOlA"],
            ["av", "va"],
            ["is","si"]
        ];
    }
    public static function dataMayusc(){
        return[
            ["HOLA", "hOlA"],
            ["VA", "va"],
            ["SI","si"]
        ];
    }
    public static function dataMinusc(){
        return[
            ["hola", "hOlA"],
            ["va", "VA"],
            ["si","Si"]
        ];
    }
    public static function dataCont(){
        return[
            [4, "hOlA"],
            [2, "VA"],
            [7,"Siempre"]
        ];
    }

    //ASSERTEQUALS

    /**
     * @dataProvider dataVuelta
     */
    public function testDarVuelta($dato1, $dato2){
        // primero el resultado que quiero q salga 
        $this->assertEquals($dato1, darVuelta($dato2));
    }

    /**
     * @dataProvider dataMayusc
     */
    public function testMayusc($dato1, $dato2){
        $this->assertEquals($dato1, mayusc($dato2));
    }

    /**
     * @dataProvider dataMinusc
     */
    public function testMinusc($dato1, $dato2){
        $this->assertEquals($dato1, minusc($dato2));
    }

    /**
     * @dataProvider dataCont
     */
    public function testContLetras($dato1, $dato2){
        $this->assertEquals($dato1, contLetras($dato2));
    }

        //DATA PROVIDER 2
        public static function dataNotVuelta(){
            return[
                ["Aloh", "hOlA"],
                ["aV", "va"],
                ["iS","si"]
            ];
        }
        public static function dataNotMayusc(){
            return[
                ["hola", "hOlA"],
                ["va", "va"],
                ["si","si"]
            ];
        }
        public static function dataNotMinusc(){
            return[
                ["HOLA", "hOlA"],
                ["VA", "VA"],
                ["SI","Si"]
            ];
        }
        public static function dataNotCont(){
            return[
                [3, "hOlA"],
                [4, "VA"],
                [5,"Siempre"]
            ];
        }
    



    // ASSERTNOTEQUALS

    /**
     * @dataProvider dataNotVuelta
     */
    public function testNotVuelta($dato1, $dato2){
        // primero el resultado que quiero q salga 
        $this->assertNotEquals($dato1, darVuelta($dato2));
    }
    /**
     * @dataProvider dataNotMayusc
     */
    public function testNotMayusc($dato1, $dato2){
        // primero el resultado que quiero q salga 
        $this->assertNotEquals($dato1, mayusc($dato2));
    }
    /**
     * @dataProvider dataNotMinusc
     */
    public function testNotMinusc($dato1, $dato2){
        // primero el resultado que quiero q salga 
        $this->assertNotEquals($dato1, minusc($dato2));
    }

    /**
     * @dataProvider dataNotCont
     */
    public function testNotCont($dato1, $dato2){
        // primero el resultado que quiero q salga 
        $this->assertNotEquals($dato1, contLetras($dato2));
    }

    // 
}