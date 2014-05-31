<?php
class Item {
  public $berat; // int
  public $deskripsi; // string
  public $harga; // int
  public $id; // int
  public $image; // string
  public $nama; // string
}

class Distributor {
  public $id; // int
  public $logo; // string
  public $nama; // string
  public $noTelepon; // string
}

class User {
  public $alamat; // string
  public $email; // string
  public $nama; // string
  public $noTelepon; // string
  public $password; // string
  public $username; // string
}


/**
 * VendorWSService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class VendorWSService extends SoapClient {

  private static $classmap = array(
                                    'Item' => 'Item',
                                    'Distributor' => 'Distributor',
                                    'User' => 'User',
                                   );

  public function VendorWSService($wsdl = "http://10.100.77.62:8080/axis/services/VendorService?wsdl", $options = array()) {
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
   * @param int $in0
   * @return Item
   */
  public function getItem($in0) {
    return $this->__soapCall('getItem', array($in0),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param int $in0
   * @return Distributor
   */
  public function getDistributor($in0) {
    return $this->__soapCall('getDistributor', array($in0),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @return void
   */
  public function laporPengirimanBerhasil($in0) {
    return $this->__soapCall('laporPengirimanBerhasil', array($in0),       array(
            'uri' => 'http://10.100.77.62:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOfDistributor
   */
  public function getAllDistributor() {
    return $this->__soapCall('getAllDistributor', array(),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @param string $in1
   * @param string $in2
   * @return void
   */
  public function addDistributor($in0, $in1, $in2) {
    return $this->__soapCall('addDistributor', array($in0, $in1, $in2),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @param int $in1
   * @param int $in2
   * @param string $in3
   * @param string $in4
   * @return void
   */
  public function addItem($in0, $in1, $in2, $in3, $in4) {
    return $this->__soapCall('addItem', array($in0, $in1, $in2, $in3, $in4),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @return User
   */
  public function getUser($in0) {
    return $this->__soapCall('getUser', array($in0),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOfItem
   */
  public function getAllItem() {
    return $this->__soapCall('getAllItem', array(),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param int $in0
   * @return void
   */
  public function deleteItem($in0) {
    return $this->__soapCall('deleteItem', array($in0),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @param string $in1
   * @param string $in2
   * @return void
   */
  public function setUser($in0, $in1, $in2) {
    return $this->__soapCall('setUser', array($in0, $in1, $in2),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @param string $in1
   * @param string $in2
   * @param string $in3
   * @param string $in4
   * @param string $in5
   * @return void
   */
  public function addUser($in0, $in1, $in2, $in3, $in4, $in5) {
    return $this->__soapCall('addUser', array($in0, $in1, $in2, $in3, $in4, $in5),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOfUser
   */
  public function getAllUser() {
    return $this->__soapCall('getAllUser', array(),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @param string $in1
   * @return boolean
   */
  public function login($in0, $in1) {
    return $this->__soapCall('login', array($in0, $in1),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $in0
   * @param string $in1
   * @param int $in2
   * @return void
   */
  public function setItem($in0, $in1, $in2) {
    return $this->__soapCall('setItem', array($in0, $in1, $in2),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param int $in0
   * @param int $in1
   * @param string $in2
   * @return void
   */
  public function addPengiriman($in0, $in1, $in2) {
    return $this->__soapCall('addPengiriman', array($in0, $in1, $in2),       array(
            'uri' => 'http://localhost:8080/axis/services/VendorService',
            'soapaction' => ''
           )
      );
  }

}

?>
