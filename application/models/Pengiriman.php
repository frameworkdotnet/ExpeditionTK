<?php
class laporPengirimanBerhasil {
  public $onlineshop; // string
}

class addPengiriman {
  public $idDistributor; // int
  public $tujuan; // string
  public $idBarang; // int
}


/**
 * Pengiriman class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Pengiriman extends SoapClient {

  private static $classmap = array(
                                    'laporPengirimanBerhasil' => 'laporPengirimanBerhasil',
                                    'addPengiriman' => 'addPengiriman',
                                   );

  public function Pengiriman($wsdl = "http://10.100.77.75:8080/axis2/services/Pengiriman?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param addPengiriman $parameters
   * @return void
   */
  public function addPengiriman(addPengiriman $parameters) {
    return $this->__soapCall('addPengiriman', array($parameters),       array(
            'uri' => 'http://ws.apache.org/axis2',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param laporPengirimanBerhasil $parameters
   * @return void
   */
  public function laporPengirimanBerhasil(laporPengirimanBerhasil $parameters) {
    return $this->__soapCall('laporPengirimanBerhasil', array($parameters),       array(
            'uri' => 'http://ws.apache.org/axis2',
            'soapaction' => ''
           )
      );
  }

}

?>
