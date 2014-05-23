<?php
class updateBarang {
  public $idBarang; // int
  public $statusPengiriman; // string
}

class updateBarangResponse {
  public $return; // boolean
}

class cekTarif {
  public $kotaPengirim; // string
  public $kotaPenerima; // string
  public $berat; // int
  public $paket; // string
}

class cekTarifResponse {
  public $return; // int
}

class kirimBarang {
  public $namaPenerima; // string
  public $kotaPenerima; // string
  public $noTelpPenerima; // string
  public $alamatPenerima; // string
  public $berat; // int
}

class kirimBarangResponse {
  public $return; // string
}

class cariLokasiAgen {
  public $kota; // string
}

class cariLokasiAgenResponse {
  public $return; // Agent
}

class cekStatusKirim {
  public $id; // int
}

class cekStatusKirimResponse {
  public $return; // Barang
}

class Agent {
  public $alamat; // string
  public $id; // int
  public $kota; // string
  public $latitude; // string
  public $longitude; // string
  public $namaAgen; // string
  public $telepon; // string
}

class Barang {
  public $berat; // int
  public $id; // int
  public $penerima; // Pelanggan
  public $pengirim; // Pelanggan
  public $status; // string
  public $tanggalKirim; // Date
}

class Pelanggan {
  public $alamat; // string
  public $kota; // string
  public $nama; // string
  public $noTelp; // string
}

class Date {
  public $bulan; // int
  public $tahun; // int
  public $tanggal; // int
}


/**
 * ExpeditionTK class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ExpeditionTK extends SoapClient {

  private static $classmap = array(
                                    'updateBarang' => 'updateBarang',
                                    'updateBarangResponse' => 'updateBarangResponse',
                                    'cekTarif' => 'cekTarif',
                                    'cekTarifResponse' => 'cekTarifResponse',
                                    'kirimBarang' => 'kirimBarang',
                                    'kirimBarangResponse' => 'kirimBarangResponse',
                                    'cariLokasiAgen' => 'cariLokasiAgen',
                                    'cariLokasiAgenResponse' => 'cariLokasiAgenResponse',
                                    'cekStatusKirim' => 'cekStatusKirim',
                                    'cekStatusKirimResponse' => 'cekStatusKirimResponse',
                                    'Agent' => 'Agent',
                                    'Barang' => 'Barang',
                                    'Pelanggan' => 'Pelanggan',
                                    'Date' => 'Date',
                                   );

  public function ExpeditionTK($wsdl = "http://localhost:8080/axis2/services/ExpeditionTK?wsdl", $options = array()) {
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
   * @param cekStatusKirim $parameters
   * @return cekStatusKirimResponse
   */
  public function cekStatusKirim(cekStatusKirim $parameters) {
    return $this->__soapCall('cekStatusKirim', array($parameters),       array(
            'uri' => 'http://services/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param updateBarang $parameters
   * @return updateBarangResponse
   */
  public function updateBarang(updateBarang $parameters) {
    return $this->__soapCall('updateBarang', array($parameters),       array(
            'uri' => 'http://services/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param kirimBarang $parameters
   * @return kirimBarangResponse
   */
  public function kirimBarang(kirimBarang $parameters) {
    return $this->__soapCall('kirimBarang', array($parameters),       array(
            'uri' => 'http://services/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param cekTarif $parameters
   * @return cekTarifResponse
   */
  public function cekTarif(cekTarif $parameters) {
    return $this->__soapCall('cekTarif', array($parameters),       array(
            'uri' => 'http://services/',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param cariLokasiAgen $parameters
   * @return cariLokasiAgenResponse
   */
  public function cariLokasiAgen(cariLokasiAgen $parameters) {
    return $this->__soapCall('cariLokasiAgen', array($parameters),       array(
            'uri' => 'http://services/',
            'soapaction' => ''
           )
      );
  }

}

?>
