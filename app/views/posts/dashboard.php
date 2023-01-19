<?php require APPROOT . '/views/inc/header.php'; ?>










<div class="container">
  <h1>Product Dashboard</h1>
  <form method="post" action="<?php echo URLROOT; ?>/pages/add" enctype="multipart/form-data">
    <div class="form-group">
      <label for="productName">Product Name:<sup>*<sup></label>
      <input type="text" name="prod_name" class="form-control" id="productName" required>
    </div>
    <div class="form-group">
      <label for="productQuantity">Product Quantity:<sup>*<sup></label>
      <input required min="1" type="number" class="form-control" name="quantite" id="productQuantity">
    </div>

    <div class="form-group">
      <label for="productPrice">Product Price:<sup>*<sup></label>
      <input required min="0" type="number" name="price" class="form-control" id="productPrice">
    </div>

    <div class="form-group">
      <label for="productDescription">Image:<sup>*<sup></label>
      <input required type="file" name="img" class="form-control" id="productDescription" accept="image/png, image/jpeg, image/jpg"></input>
    </div>

    <button type="submit" value="submit" class="btn btn-success">Submit</button>
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
      <?php foreach ($data['allItems'] as $zedka) : ?>
        <tr>
          <td><?= $zedka->id_product ?></td>
          <td><?= $zedka->name_product ?></td>
          <td><?= $zedka->quantite_product ?></td>
          <td><?= $zedka->price_product ?></td>
          <td><img src="<?= URLROOT . '/img/upload/' . $zedka->img_product ?>" width="50px" style="style=" width:128px;height:128px;object-fit: contain;""></td>
          <td>
            <button class="btn btn-danger btn-sm">Delete</button>
            <button class="btn btn-warning btn-sm">Edit</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>





  <?php require APPROOT . '/views/inc/footer.php'; ?>