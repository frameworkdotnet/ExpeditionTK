<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Services extends REST_Controller {

    function tarif_get() {
        if (!$this->get('berat') || !$this->get('kota_penerima') || !$this->get('kota_pengirim') || !$this->get('paket')) {
            $this->response(NULL, 400);
        } else {
            $this->load->model('Expedition');
            $berat = $this->get('berat');
            $kotaPenerima = $this->get('kota_penerima');
            $kotaPengirim = $this->get('kota_pengirim');
            $paket = $this->get('paket');

            $user = Expedition::getTarif($berat, $kotaPenerima, $kotaPengirim, $paket);

            if ($user !== null) {
                $this->response($user, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Tarif tidak ditemukan'), 204);
            }
        }
    }

    function status_get() {
        if (!$this->get('id')) {
            $this->response(NULL, 400);
        } else {
            $this->load->model('Expedition');
            $id = $this->get('id');

            $status = Expedition::getStatus($id);

            if ($status !== null) {
                $this->response($status, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Status barang tidak ditemukan'), 204);
            }
        }
    }

    public function agens_get() {
        if (!$this->get('kota')) {
            $this->response(NULL, 400);
        } else {
            $this->load->model('Expedition');
            $kota = $this->get('kota');

            $agens = Expedition::getAgens($kota);

            if ($agens !== null) {
                $this->response($agens, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Agen tidak ditemukan'), 204);
            }
        }
    }

    public function barang_post() {
        if (!$this->post('id') || !$this->post('status')) {
            $this->response(NULL, 400);
        } else {
            $this->load->model('Expedition');
            $id = $this->post('id');
            $status = $this->post('status');

            $barang = Expedition::updatePengiriman($id, $status);

            if ($barang === true) {
                $this->response($barang, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Agen tidak ditemukan'), 204);
            }
        }
    }

    public function map_get() {
        if (!$this->get('latitude') || !$this->get('longitude')) {
            $this->response(NULL, 400);
        } else {
            $this->load->model('Expedition');
            $latitude = $this->get('latitude');
            $longitude = $this->get('longitude');

            $map = Expedition::getMap($latitude, $longitude);

            if ($map !== null) {
                $this->response($map, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Agen tidak ditemukan'), 204);
            }
        }
    }

    public function kirim_barang_post() {
        if (!$this->post('nama_penerima') || !$this->post('kota_penerima') 
                || !$this->post('telp_penerima') || !$this->post('alamat_penerima') 
                || !$this->post('berat')) {
            $this->response(NULL, 400);
        } else {
            $this->load->model('Expedition');
            $namaPenerima = $this->post('nama_penerima');
            $kotaPenerima = $this->post('kota_penerima');
            $noTelpPenerima = $this->post('telp_penerima');
            $alamatPenerima = $this->post('alamat_penerima');
            $berat = $this->post('berat');

            $barang = Expedition::kirimBarang($namaPenerima, $kotaPenerima, 
                    $noTelpPenerima, $alamatPenerima, $berat);

            if ($barang !== null) {
                $this->response($barang, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Barang tidak ditemukan'), 204);
            }
        }
    }

    /**
     * Web Service YUDI
     */
    public function laporan_post() {
        if (!$this->post('onlineshop')) {
            $this->response(NULL, 400);
        } else {
            $onlineShop = $this->post('onlineshop');

            $this->load->model('Expedition');
            $respon = Expedition::laporPengirimanBerhasil($onlineShop);

            if ($respon !== null) {
                $this->response($respon, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Laporan tidak ditemukan'), 204);
            }
        }
    }
    
    /**
     * Web Service ARIF
     */
    public function saldo_get() {
        if (!$this->get('id')) {
            $this->response(NULL, 400);
        } else {
            $idToko = $this->get('id');

            $this->load->model('Expedition');
            $respon = Expedition::saldoDariArif($idToko);

            if ($respon !== null) {
                $this->response($respon, 200); // 200 being the HTTP response code
            } else {
                $this->response(array('error' => 'Laporan tidak ditemukan'), 204);
            }
        }
    }
}