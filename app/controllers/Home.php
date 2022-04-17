<?php 
class Home extends Controller{
    public function index()
    {
        $data['products'] = $this->model('ProductModel')->getAllProduct();
        $data['kategori'] = $this->model('CategoryModel')->getAllCategory();
        $head['judul'] = 'Home';
        $this->view('libs/head', $head);
        $this->view('libs/header');
        $this->view(__CLASS__.'/'.__FUNCTION__, $data);
        $this->view('libs/footer');
    }
}