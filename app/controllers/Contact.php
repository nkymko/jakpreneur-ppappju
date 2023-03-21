<?php

class Contact extends Controller {

    public function index() {
        $data['style'] = 'contact';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('contact/index');
        $this->view('template/footer');
    }

}