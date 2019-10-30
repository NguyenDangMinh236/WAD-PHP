<style>

  table, tr, td{
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>
<h2>Products page</h2>
<p><a href="index.php?action=add_product">Add product</a></p>
<p><a href="index.php?action=logout">Logout</a></p>

<table width="70%">
    <tr style="text-align: center; font-weight: bold;">
      <td>Title</td>
      <td>Description</td>
      <td>Price</td>
      <td>Discount</td>
      <td>Function</td>
    </tr>
    <?php while ($row = mysqli_fetch_array($productList)) { ?>
     <tr>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['description']?></td>
        <td><?php echo $row['price']?></td>
        <td><?php echo $row['discount']?></td>
        <td>
          <a href="index.php?action=edit_product&id=<?php echo $row['id'] ?>">Edit</a> 
          <a onclick="return confirm('Are you sure you want to delete?')"; href="index.php?action=Delete&id=<?php echo $row['id']?>">Delete</a>
        </td>
     </tr>

    <?php } ?>

</table>