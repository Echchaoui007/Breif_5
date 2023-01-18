<?php 
class Posts extends Controller{
    private $postModel;

public function __construct()
{
    if(!isLoggedIn()){
        redirect('users/login');
    }
    $this->postModel = $this->model('post');
}

    public function dashboard(){
        //get posts
        $posts = $this->postModel->getProducts();
        $data = [
           'allItems' => $posts
        ];
        
        // load view with data 
        $this->view('posts/dashboard',$data);
    }



    public function create(){

        $data=[];


        $this->view('inc/creat',$data);
    }


    // public function create()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          

    //         $data = [
    //             'name_product' => trim($_POST['name']),
    //             'quantite_product' => trim($_POST['quantite']),
    //             'price_product' => trim($_POST['prix']),
    //             'img_product' =>$_FILES['image']['name'],
    //             'name_product_err' => '',
    //             'quantite_product_err' => '',
    //             'price_product_err' => '',
    //         ];

    //         if (empty($data['name_product'])) {
    //             $data['name_product_err'] = 'please enter name article';
    //         }
    //         if (empty($data['quantite_product'])) {
    //             $data['quantite_product_err'] = 'please enter quantite';
    //         }
    //         if (empty($data['price_product'])) {
    //             $data['price_product_err'] = 'please enter prix';
    //         }

    //         if (empty($data['ame_product_err']) && empty($data['quantite_product_err']) && empty($data['price_product_err'])) {
    //             if ($this->postModel->create($data)) {
    //                 flash('done', 'product  Added');
    //                 redirect('inc/create');
    //             } else {
    //                 die('wrong');
    //             }
    //         } else {
    //             $this->view('inc/create', $data);
    //         }
    //     } else {
    //         $data = [
    //             'name_prod' => '',
    //             'quantite' => '',
    //             'prix' => '',
    //             'image' => '',
    //             'user_id' => '',
    //             'name_prod_err' => '',
    //             'quantite_err' => '',
    //             'prix_err' => '',
    //             'image_err' => '',
    //         ];

    //         $this->view('inc/create', $data);
    //     }
    // }


}