<?php require APPROOT . '/views/inc/header.php';?>






<



    <div class="container">
      <h1>Product Dashboard</h1>
      <form method="post" action="<?php echo URLROOT; ?>/pages/add">
        <div class="form-group">
          <label for="productName">Product Name</label>
          <input type="text" name="product_name" class="form-control" id="productName">
        </div>
        <div class="form-group">
          <label for="productQuantity">Product Quantity</label>
          <input min="1" type="number" class="form-control" name="quantite_product" id="productQuantity">
        </div>
        
        <div class="form-group">
          <label for="productPrice">Product Price</label>
          <input min="0" type="number" name="price_product" class="form-control" id="productPrice">
        </div>

        <div class="form-group">
          <label for="productDescription">Image</label>
          <input type="file" name="img_product" class="form-control" id="productDescription"></input>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <br>
      <h2>Added Products</h2>


   <table class="table table-striped">
  <thead>
    <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Product Image</th>
    </tr>
  </thead>
  <tbody id="product-list">
  <?php foreach($data['allItems'] as $zedka) : ?>
    <!-- Added products will be inserted here -->
    <tr>
          <td><?= $zedka->id_product ?></td>
          <td><?= $zedka->name_product ?></td>
          <td><?= $zedka->quantite_product ?></td>
          <td><?= $zedka->price_product ?></td>
          <td><img src="<?= $zedka->img_product ?>" width="50px" style="style="width:128px;height:128px;object-fit: contain;""></td>
      <td>
        <button class="btn btn-danger btn-sm" onclick="deleteProduct(event)">Delete</button>
        <button class="btn btn-warning btn-sm" onclick="editProduct(event)">Edit</button>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>





<?php require APPROOT . '/views/inc/footer.php'; ?>