<?php
  class Pages extends Controller {
    private $postModel;
    public function __construct(){
     
    $this->postModel = $this->model('post');
    }
    
    public function index(){
      $data = [
        'title' => 'Gold Star',
      ];
     
      $this->view('pages/index', $data);
    }

    public function gallery(){
      //get posts
      $posts = $this->postModel->getProducts();
      
      $data = [
         'allItems' => $posts
      ];
      
      // load view with data 
      $this->view('pages/gallery',$data);
  }

  public function Add(){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $data = [
        'name_product' => trim($_POST['product_name']),
        'quantite_product' => trim($_POST['quantite_product']),
        'price_product' =>  trim($_POST['price_product']),
        'img_product' => $_FILES['img_product']['product_name']
      ];
      
      if ($this->postModel->addProducts($data)) {
        die('succe');
      } else {
        die('failed');
      }

    }
    
}

   
  }