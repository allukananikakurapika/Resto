<?php
class Produk extends Controller{
    public function index () {
        $data['judul'] = 'Halaman Product';
        $data['produk'] = $this->model('Produk_model')->getAllproduk();
        $this->view('templates/header' , $data);
        $this->view('makanan/index' , $data);
        $this->view('templates/footer');
    } 
}