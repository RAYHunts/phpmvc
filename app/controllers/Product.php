<?php 
class Product extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Produk';
        $data['products'] = $this->model('ProductModel')->getAllProduct();
        $this->view('libs/head', $data);
        $this->view('libs/header');
        $this->view(__CLASS__.'/'.__FUNCTION__, $data);
        $this->view('libs/footer');
    }
}