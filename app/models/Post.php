<?php 
class post {
    private $db;
public function __construct(){
    $this->db = new Database;
}

public function getProducts(){
$this->db->query('SELECT * FROM items');  

$results = $this->db->resultSet();

return $results;
}


public function  addProducts($data){

    // $this->db->query(" INSERT INTO `items`( `name_product`, `quantite_product`, `price_product`, `img_product`) VALUES (':namee',':quantite',':prix',':image')");
     $this->db->query('INSERT INTO `items`( `name_product`, `quantite_product`, `price_product`, `img_product`)  VALUES (:name, :quantite, :prix ,:image)');
        $this->db->bind(":name", $data['name_product']);
        $this->db->bind(":quantite", $data['quantite_product']);
        $this->db->bind(":prix", $data['price_product']);
        $this->db->bind(":image", $data['img_product']);
       

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

}
// public function deleteProduct($id_product){
//     $this->db->query('DELETE FROM `items`  WHERE `id_product`= :id_product');
//     $this->db->bind(':id_product', $id_product);
//     if ($this->db->execute()) {
//         return true;
//     } else {
//         return false;
//     }
//    }

//    public function updateArticle($data){
//     $this->db->query(' UPDATE `produits` SET `name_product`= :name,`quantite_product`= :quantite,`price_product`=:prix,`img_product`= :image WHERE `id_product`= :id_product');
//     $this->db->bind(':id_product', $data['id_product']);
//     $this->db->bind(':name_prod', $data['name_product']);
//     $this->db->bind(':quantite', $data['quantite_product']);
//     $this->db->bind(':prix', $data['price_product']);
//     $this->db->bind(':image', $data['img_product']);

//     if ($this->db->execute()) {
//         return true;
//     } else {
//         return false;
//     }
// }


}