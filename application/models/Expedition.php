<?php

class Expedition extends CI_Model {

    function __construct() {
        parent::__construct();
        require 'ExpeditionTK.php';
        require 'ImageryService.php';
        $this->expeditionTK = new ExpeditionTK();
    }

    function getTarif($berat, $kotaPenerima, $kotaPengirim, $paket) {
        $expeditionTK = new ExpeditionTK();
        $cekTarif = new cekTarif();
        $cekTarif->berat = $berat;
        $cekTarif->kotaPenerima = $kotaPenerima;
        $cekTarif->kotaPengirim = $kotaPengirim;
        $cekTarif->paket = $paket;
        $data = array(
            "tarif" => $expeditionTK->cekTarif($cekTarif)->return
        );
        return $data;
    }
    
    function getStatus($id) {
        $expeditionTK = new ExpeditionTK();
        $statusKirim = new cekStatusKirim();
        $statusKirim->id = $id;
        return $expeditionTK->cekStatusKirim($statusKirim)->return;
    }
    
    function getAgens($kota) {
        $expeditionTK = new ExpeditionTK();
        $agen = new cariLokasiAgen();
        $agen->kota = $kota;
        return $expeditionTK->cariLokasiAgen($agen)->return;
    }

    function updatePengiriman($idBarang, $status) {
        $expeditionTK = new ExpeditionTK();
        $updateBarang = new updateBarang();
        $updateBarang->idBarang = $idBarang;
        $updateBarang->statusPengiriman = $status;
        return $expeditionTK->updateBarang($updateBarang)->return;
    }

    function kirimBarang($namaPenerima, $kotaPenerima, $noTelpPenerima, $alamatPenerima, $berat) {
        $expeditionTK = new ExpeditionTK();
        $kirimBarang = new kirimBarang();
        $kirimBarang->namaPenerima = $namaPenerima;
        $kirimBarang->kotaPenerima = $kotaPenerima;
        $kirimBarang->noTelpPenerima = $noTelpPenerima;
        $kirimBarang->alamatPenerima = $alamatPenerima;
        $kirimBarang->berat = $berat;
        return array("id"=>$expeditionTK->kirimBarang($kirimBarang)->return);
    }
    
    function getMap($latitude, $longitude) {
        $imageryClient = new SoapClient("http://dev.virtualearth.net/webservices/v1/metadata/imageryservice/imageryservice.wsdl", array('trace' => 1));

        $location = array(
            'Latitude' => $latitude,
            'Longitude' => $longitude
        );

        $SizeOfint = array(
            'Height' => 534,
            'Width' => 900
        );
        
        $options = array(
            'ZoomLevel' => 16,
            'ImageSize' => $SizeOfint
        );

        $key = "AnUem4kR9530czKifWgqo6iEwx5v4GP_E1nOd2NO7cZY-P3wSFNSsnhgzql_T7H3";

        $credentials = array('ApplicationId' => $key);
        $pushpin = array(
            'IconStyle' => "11",
            'Location' => $location
        );

        $pushpins = array($pushpin);

        $mapUriRequest = array(
            'Credentials' => $credentials,
            'Pushpins' => $pushpins,
            'Options' => $options
        );

        try {
            $mapUriResponse = $imageryClient->GetMapUri(array('request' => $mapUriRequest));
        } catch (SoapFault $e) {
            die('Fault occurred using Web Service: ' . $e->getMessage());
        }

        $data = array(
            'url' => $mapUriResponse->GetMapUriResult->Uri
        );
        
        return $data;
    }
    
    public function laporPengirimanBerhasil($onlineShop) {
        require 'VendorWSService.php';
        $vendorWSService = new VendorWSService();
        $vendorWSService->laporPengirimanBerhasil($onlineShop);
        
        $data = array(
            'respon' => 'tidak ada respon dari server, mungkin berhasil'
        );
        return $data;
    }
    
    public function saldoDariArif($idToko) {
        require 'PembayaranService.php';
        $pembayaranService = new PembayaranService();
        $getTokoById = new getTokoById();
        $getTokoById->idToko = $idToko;
        $data = $pembayaranService->getTokoById($getTokoById)->return;
        return $data;
    }
}