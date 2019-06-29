<?php

class Rc{

    //------------------- ROLE ------------------------
    public $role=array(
        "super" => 1,
        "admin" => 2,
        "vendor" => 3,
        "buyer" => 4,
    );

    public $role_name=array(
        1 => "Super",
        2 => "Admin",
        3 => "Vendor",
        4 => "Buyer",
    );

    public $statusPR=array(
        0 => "Butuh Persetujuan",
        1 => "Request to Lvl 1",
        2 => "Request to Lvl 2",
        3 => "Approved",
        4 => "Rejected By Lvl 1",
        5 => "Rejected By Lvl 2
        ",
    );
    //------------------- ROLE ------------------------

    //------------------- category ------------------------
    public $category=array(
        "Makanan/Minuman" => 1,
        "Alat Tulis" => 2,
        "Cleaning Service" => 3
    );

    public $category_name=array(
      1 => "Makanan/Minuman",
      2 => "Alat Tulis",
      3 => "Cleaning Service"
    );
    //------------------- category ------------------------

    //------------------- product_type ------------------------
    public $product_type=array(
        "Barang Stok" => 1,
        "Barang Non Stok" => 2,
        "Jasa" => 3
    );

    public $product_type_name=array(
      1 => "Barang Stok",
      2 => "Barang Non Stok",
      3 => "Jasa"
    );
    //------------------- product_type ------------------------

    //------------------- status ------------------------
    public $status=array(
        "Aktif" => 1,
        "Tidak Aktif" => 0
    );

    public $status_name=array(
      1 => "Aktif",
      0 => "Tidak Aktif"
    );
    //------------------- status ------------------------

    //------------------- vendor_dummy ------------------------
    public $vendor_dummy=array(
        "super" => 1,
        "admin" => 2,
        "pegawai" => 3,
        "vendor" => 4,
    );

    public $vendor_dummy_name=array(
        1 => "PT ABC",
        2 => "PT Sukses Jaya",
        3 => "PT Kreasi Anak Bangsa",
        4 => "PT Usaha Kita",
    );
    //------------------- vendor_dummy ------------------------

    //------------------- user_dummy ------------------------

    public $user_dummy_name=array(
        1 => "SD Negeri 01 Karet Pagi ",
        2 => "SD Negeri Menteng 03 Pagi",
        3 => "SD Negeri Gondangdia 05 Pagi",
        4 => "SD Negeri Rawasari 02 Pagi",
    );
    //------------------- user_dummy ------------------------

    //------------------- duration_type ------------------------
    public $duration_type=array(
        "Hari" => 1,
        "Bulan" => 2,
        "Tahun" => 3
    );

    public $duration_type_name=array(
      1 => "Hari",
      2 => "Bulan",
      3 => "Tahun"
    );
    //------------------- duration_type ------------------------

    //------------------- contract_status ------------------------
    public $contract_status=array(
        "CONTRACT_NOT_ACTIVE" => 0,
        "CONTRACT_PUBLISHED" => 1,
        "CONTRACT_EDITED" => 2,
        "CONTRACT_UPDATED" => 3
    );

    public $contract_status_name=array(
      0 => "Kontrak Tidak Aktif",
      1 => "Kontrak Dipublish",
      2 => "Kontrak Tidak Aktif",
      3 => "Kontrak Diupdate"
    );
    //------------------- contract_status ------------------------
}

?>