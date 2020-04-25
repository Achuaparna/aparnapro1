<html>
<head>
<link rel="stylesheet" href="css/approvedlist.css">
<style>
  .stock
{
  background: #313131;
  text-align: left;
   color:beige;
   border: 0px solid;
}
.price
{
  background: #313131;
  text-align: left;
   color:beige;
   border: 0px solid;
}
.exp
{
  background: #313131;
  text-align: left;
   color:beige;
   border: 0px solid;
}
  </style>
</head>
<body>
  <?php
include "connection.php";
$query="select a.catname,b.subcat_name,c.brand_name,d.pro_name,d.stock,d.status,d.pid,d.price,d.expiry_date,e.quantity_name from add_category a join add_subcategory b on a.cid=b.cid join brand c on b.subcat_id=c.subcat_id join add_product d on c.brand_id=d.brand_id JOIN quantity e on d.quantity_id=e.quantity_id";
$result = mysqli_query($db,$query) or die(mysqli_error($db));
  ?>
 <table>
 
     <thead>
            <tr>
               <th colspan="10"> STOCK LIST</th>
              
            </tr>
            <tr style="background-color:#414141e8;">
                <th>Index.</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Brand</th>
                <th>Product</th>
                <th>status</th>
                <th>stock</th>
                <th>Price per Unit</th>
               <th>Expirey Date</th>
               <th></th>
            </tr>
    </thead>
    <tbody>
       <?php
        if ($result->num_rows > 0)
            {
            $i=1;
            while($row = $result->fetch_assoc()) 
            {
            echo "<tr>";
            ?> 
            <form action="stockupdate.php" method="POST"><input type="hidden" name="proid" value="<?php echo $row["pid"]; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo $row["catname"]; ?></td>
            <td><?php echo $row["subcat_name"]; ?></td>
            <td><?php echo $row["brand_name"]; ?></td>
            <td><?php echo $row["pro_name"]; ?></td>
            <td><?php
                             if($row["status"]=="0")
                                {
                                  echo "Blocked";
                                } 
                                elseif($row["status"]=="1")
                                {
                                  echo "In Stock";
                                }
                                else if($row["status"]=="2")
                                {
                                  echo "Expired";
                                }
                                else
                                {
                                  echo "Out of Stock";
                                }?>
                      <input type="hidden" name="status" value="<?php echo $row["status"];?>">              
                                </td>
            
            <td><input style="width : 50px;" type="text" name="stock" class="stock" value="<?php echo $row["stock"]; ?>"><?php echo $row["quantity_name"]; ?></td>
            <td><input style="width : 50px;" type="text" name="price" class="price" value="<?php echo $row["price"]; ?>"></td>
            <td><input style="width : 140px;" type="date" name="expiry" class="exp" value="<?php echo $row["expiry_date"]; ?>" ></td>
            <td><button class="Edit" type="submit" name="submit">Update</button></form></td>
                         <?php
                           ++$i;
                            }
                            
                          }
                          else
                          {
                           
                          }
                          $db->close();
                          ?>
      
    </tbody>
                      </table>



<script src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="js/leaveapproval.js"></script>
<script>
$(document).ready(function(){
$(document).on('focusout','.exp', function()
{
var value=$(this).val();
var entered =new Date(value);
var current=new Date();
     if(entered <= current)
     {
       alert("Inavlid expiry date \n Enter a date greater than current date");
       return false;
     }

     
});

});
</script>
</body>
</html>
