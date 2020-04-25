<?php 
$db = mysqli_connect('localhost', 'root', '', 'fresh_gro') or die ("Error connecting to Database".$db->connect_error);
  $id = $_POST["proid"];
  $stock = $_POST["stock"];
  $price = $_POST["price"];
  $status=$_POST["status"];
  $exp=$_POST["expiry"];
 if(isset($_POST["submit"]))
  {

if($status == "0")
{
  echo '<script type="text/javascript">';
  echo 'alert("This Product is being blocked \n Please unblock the product first")';
  echo '</script>';
  echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
}
else if($status == "1")
{
 // Check record exists
 $query = "UPDATE `add_product` SET stock='$stock', price='$price',status='1' WHERE pid='$id'";
 $result = mysqli_query($db,$query);

if ($result)
{
 
      
      echo '<script type="text/javascript">';
      echo 'alert("Updated Successfully")';
      echo '</script>';
      echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
  
         
 
}
else
{
  echo '<script type="text/javascript">';
  echo 'alert("Updated Error")';
  echo '</script>';
  echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
}
}
else if($status =="2")
{

$date_now = date("Y-m-d");
if ($date_now > $exp)
{
  echo '<script type="text/javascript">';
  echo 'alert("Invalid Expirey Date \n Please enter a date greater than current date")';
  echo '</script>';
  echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
}
else
{
$query = "UPDATE `add_product` SET stock='$stock', price='$price',status='1',expiry_date='$exp' WHERE pid='$id'";
$result = mysqli_query($db,$query);
 if ($result)
 {
  
       
       echo '<script type="text/javascript">';
       echo 'alert("Updated Successfully")';
       echo '</script>';
       echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
   
 }
 else
 {
   echo '<script type="text/javascript">';
   echo 'alert("Update Error")';
   echo '</script>';
   echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
 }

}

}
else
{

   // Check record exists
 $query = "UPDATE `add_product` SET stock='$stock', price='$price',status='1' WHERE pid='$id'";
 $result = mysqli_query($db,$query);

if ($result)
{
 
      
      echo '<script type="text/javascript">';
      echo 'alert("Updated Successfully")';
      echo '</script>';
     // echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
  
         
 
}
else
{
  echo '<script type="text/javascript">';
  echo 'alert("Updated Error")';
  echo '</script>';
  echo "<script>setTimeout(\"location.href = '/fresh_gro1/admin/view_stock/stocklist.php';\",0);</script>";
}
}
}
else
{
  echo "set error";
}

?>