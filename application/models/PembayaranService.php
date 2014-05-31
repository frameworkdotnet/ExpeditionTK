<?php

class getTokoById {

    public $idToko; // string

}

class getTokoByIdResponse {

    public $return; // Toko

}

class transaksi {

    public $idPembeli; // string
    public $idToko; // string
    public $jumlahTagihan; // double

}

class transaksiResponse {

    public $return; // boolean

}

class getAllToko {
    
}

class getAllTokoResponse {

    public $return; // Toko

}

class getAllPembeli {
    
}

class getAllPembeliResponse {

    public $return; // Pembeli

}

class sayHello {

    public $nama; // string

}

class sayHelloResponse {

    public $return; // string

}

class getAllTransaksi {
    
}

class getAllTransaksiResponse {

    public $return; // History

}

class getPembeliById {

    public $idPembeli; // string

}

class getPembeliByIdResponse {

    public $return; // Pembeli

}

class getPembelidDariToko {

    public $idToko; // string

}

class getPembelidDariTokoResponse {

    public $return; // Pembeli

}

class Toko {

    public $id; // string
    public $jumlahUang; // double
    public $matauang; // MataUang
    public $nama; // string

}

class MataUang {

    public $idMataUang; // string
    public $namaMataUang; // string

}

class Pembeli {

    public $id; // string
    public $jumlahUang; // double
    public $matauang; // MataUang
    public $nama; // string

}

class History {

    public $idPembayaran; // string
    public $jumlahPembayaran; // double
    public $pembeli; // Pembeli
    public $tgl; // string
    public $toko; // Toko

}

/**
 * PembayaranService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class PembayaranService extends SoapClient {

    private static $classmap = array(
        'getTokoById' => 'getTokoById',
        'getTokoByIdResponse' => 'getTokoByIdResponse',
        'transaksi' => 'transaksi',
        'transaksiResponse' => 'transaksiResponse',
        'getAllToko' => 'getAllToko',
        'getAllTokoResponse' => 'getAllTokoResponse',
        'getAllPembeli' => 'getAllPembeli',
        'getAllPembeliResponse' => 'getAllPembeliResponse',
        'sayHello' => 'sayHello',
        'sayHelloResponse' => 'sayHelloResponse',
        'getAllTransaksi' => 'getAllTransaksi',
        'getAllTransaksiResponse' => 'getAllTransaksiResponse',
        'getPembeliById' => 'getPembeliById',
        'getPembeliByIdResponse' => 'getPembeliByIdResponse',
        'getPembelidDariToko' => 'getPembelidDariToko',
        'getPembelidDariTokoResponse' => 'getPembelidDariTokoResponse',
        'Toko' => 'Toko',
        'MataUang' => 'MataUang',
        'Pembeli' => 'Pembeli',
        'History' => 'History',
    );

    public function PembayaranService($wsdl = "http://10.100.77.58:8080/axis2/services/PembayaranService?wsdl", $options = array()) {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        parent::__construct($wsdl, $options);
    }

    /**
     *  
     *
     * @param getPembeliById $parameters
     * @return getPembeliByIdResponse
     */
    public function getPembeliById(getPembeliById $parameters) {
        return $this->__soapCall('getPembeliById', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

    /**
     *  
     *
     * @param getPembelidDariToko $parameters
     * @return getPembelidDariTokoResponse
     */
    public function getPembelidDariToko(getPembelidDariToko $parameters) {
        return $this->__soapCall('getPembelidDariToko', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

    /**
     *  
     *
     * @param getAllPembeli $parameters
     * @return getAllPembeliResponse
     */
    public function getAllPembeli(getAllPembeli $parameters) {
        return $this->__soapCall('getAllPembeli', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

    /**
     *  
     *
     * @param transaksi $parameters
     * @return transaksiResponse
     */
    public function transaksi(transaksi $parameters) {
        return $this->__soapCall('transaksi', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

    /**
     *  
     *
     * @param getAllToko $parameters
     * @return getAllTokoResponse
     */
    public function getAllToko(getAllToko $parameters) {
        return $this->__soapCall('getAllToko', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

    /**
     *  
     *
     * @param sayHello $parameters
     * @return sayHelloResponse
     */
    public function sayHello(sayHello $parameters) {
        return $this->__soapCall('sayHello', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

    /**
     *  
     *
     * @param getTokoById $parameters
     * @return getTokoByIdResponse
     */
    public function getTokoById(getTokoById $parameters) {
        return $this->__soapCall('getTokoById', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

    /**
     *  
     *
     * @param getAllTransaksi $parameters
     * @return getAllTransaksiResponse
     */
    public function getAllTransaksi(getAllTransaksi $parameters) {
        return $this->__soapCall('getAllTransaksi', array($parameters), array(
                    'uri' => 'http://services',
                    'soapaction' => ''
                        )
        );
    }

}

?>
