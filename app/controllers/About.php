<?php 
class About extends Controller {
    public function index()
    {
        $data['judul'] = 'About';
        $this->view('libs/head', $data);
        $this->view('libs/header');
        $this->view(__CLASS__.'/'.__FUNCTION__);
        $this->view('libs/footer');
    }
    public function page()
    {
        $data['judul'] = 'About/Page';
        $this->view('libs/head', $data);
        $this->view('libs/header');
        $this->view(__CLASS__.'/'.__FUNCTION__);
        $this->view('libs/footer');
    }
}