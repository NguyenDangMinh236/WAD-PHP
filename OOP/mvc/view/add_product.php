
<h2>Add product</h2>
<form action="index.php?action=submitAdd" method="POST">
    <form class="user" action="#" method="POST" >
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="title" placeholder="Product name">
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="description" placeholder="description">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="price" placeholder="price">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="discount" placeholder="discount">
        </div>
        <input type="submit" name="submitAdd" value="Add product" class="btn btn-primary btn-user btn-block" >
    </form>
</form>