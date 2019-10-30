<h4>Update Product</h4>
<form method="POST" action="index.php?action=submitEdit">
    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
    <div class="form-group">
        <input type="text" name="title" class="form-control" value="<?php echo $product['title'] ?>" placeholder="Enter title">
    </div>
    <div class="form-group">
        <input type="text" name="description" class="form-control" value="<?php echo $product['description'] ?>" placeholder="Ender description">
    </div>
    <div class="form-group">
        <input type="text" name="price" class="form-control" value="<?php echo $product['price'] ?>" placeholder="Enter price">
    </div>
    <div class="form-group">
        <input type="text" name="discount" class="form-control" value="<?php echo $product['discount'] ?>" placeholder="Enter discount">
    </div>
    <div class="form-group">
        <button type="submit" name="submitEdit" class="btn btn-primary">Update</button>
    </div>
</form>