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
          // Check for POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
      $img_name = $_FILES['img']['name'];
      $img_tmp = $_FILES['img']['tmp_name'];
      move_uploaded_file($img_tmp, 'img/upload/' . $img_name);

      $data = [
        'name_product' => trim($_POST['prod_name']),
        'quantite_product' => trim($_POST['quantite']),
        'price_product' =>  trim($_POST['price']),
        'img_product' => $img_name,
        'name_product_err'=>'',
        'quantite_product_err'=>'',
        'price_product_err' =>'',
        'img_product_err'=>'',
      ];

      // Validate name
      if(empty($data['name_product'])){
        $data['name_product_err'] = 'Please enter Name';
      }
       // Validate quantite
      if(empty($data['quantite_product'])){
        $data['quantite_product_err'] = 'Please enter Quantite';
      }
       // Validate price
      if(empty($data['price_product'])){
        $data['price_product_err'] = 'Please enter Price';
      }
       // Validate image
      if(empty($data['img_product'])){
        $data['img_product_err'] = 'Please enter Image';
      }
      //make sure no errors
      if (empty($data['name_product_err']) && empty($data['quantite_product_err']) && empty($data['price_product_err']) && empty($data['img_product_err'])) {
                      if ($this->postModel->addProducts($data)) {
        redirect("posts/dashboard");
      } else {
        //load the view
        $this->view('posts/dashboard', $data);
      }
                
            } else {
                $data = [
                    'name_prod' => '',
                    'quantite' => '',
                    'prix' => '',
                    'image' => '',
                    'user_id' => '',
                    'name_prod_err' => '',
                    'quantite_err' => '',
                    'prix_err' => '',
                    'image_err' => '',
                ];
    
                $this->view('posts/dashboard', $data);
         }
      
   

    }
    
}

   
  }