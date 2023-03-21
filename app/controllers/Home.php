<?php

class Home extends Controller {

    public function index() {
        $data['style'] = 'shop';
        $data['produk'] = $this->model('Product_model')->getAllProduct();
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('home/index', $data);
        $this->view('template/footer');
    }

    public function detail($id) {
        $data['style'] = 'detail-shop';
        $data['produk'] = $this->model('Product_model')->getGeneralProductById($id);
        $data['detail_produk'] = $this->model('Product_model')->getProductById($id);
        $data['penjual'] = $this->model('Product_model')->getSellerById($id);
        $data['komentar'] = $this->model('Product_model')->getCommentById($id);
        $this->view('template/header', $data);
        $this->view('home/detail', $data);
    }

    public function search() {
        $data['style'] = 'shop';
        $data['produk'] = $this->model('Product_model')->searchProduct();
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('home/index', $data);
        $this->view('template/footer');
    }

    public function comment() {
        if ( $this->model('Product_model')->setComments($_POST) > 0) {
            header('Location: ' . BASEURL . '/home/detail/' . $_POST['id_product']);
            exit;
        }
    }

}