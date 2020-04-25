<?php
session_start();
if (!isset($_SESSION['Role']))
 {
    header('Location:/fresh_gro1/index.php');
 }

 ?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    
  </head>
  <body>
    <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        
        <div class="info">
          <h3><a href="#">Fresh Grow</a></h3>
          <p>Administrator Panel</p>
        </div>

      <ul class="categories">
        
      <li ><i class="fa fa-user-circle-o"></i><a href="#s">Registration</a>
          <ul class="side-nav-dropdown">
            <li class="staffreg"><a href="#" >Staff</a></li>
            <li class="suppreg"><a href="#" >Supplier</a></li>
          </ul>
        <!--<li class="staffreg"><i class="fa fa-user-circle-o" aria-hidden="true"></i><a href="#"> Staff Registration</a></li>
        <li class="suppreg"><i class="fa fa-user-circle-o" aria-hidden="true"></i><a href="#"> Supplier Registration</a></li>-->
        <li ><i class="fa fa-users fa-fw"></i><a href="#s">View Users</a>
          <ul class="side-nav-dropdown">
            <li class="vcustomer"><a href="#" >Staff</a></li> 
            <li class="vsupp"><a href="#" >Supplier</a></li> 
            <li class="vfarmer"><a href="#" >Farmer</a></li>
          </ul>
          <li ><i class="fa fa-shopping-basket"></i><a href="#s">Add</a>
          <ul class="side-nav-dropdown">
            <li class="acat"><a href="#" >Category</a></li>
            <li class="asubcat"><a href="#" >Subcategory</a></li>
            <li class="abrand"><a href="#" >Brand</a></li>
            <li class="apro"><a href="#" >Product</a></li> 
          </ul>
        <!--<li class="acat"><i class="fa fa-list-alt" aria-hidden="true"></i><a href="#">Add Category</a></li>
        <li class="asubcat"><i class="fa fa-shopping-basket" aria-hidden="true"></i><a href="#"> Add Subcategory</a></li>
        <li class="abrand"><i class="fa fa-shopping-basket" aria-hidden="true"></i><a href="#"> Add Brand</a></li>
        <li class="apro"><i class="fa fa-shopping-basket" aria-hidden="true"></i><a href="#">Add Product</a></li>-->
        <!--<li class="sreq"><i class="fa fa-list-alt" aria-hidden="true"></i><a href="#">Staff Request</a></li>-->
        <li ><i class="fa fa-users fa-fw"></i><a href="#s">Staff Request</a>
          <ul class="side-nav-dropdown">
            <li class="sreq"><a href="#" >Product Request</a></li>
            <li class="lapproval"><a href="#" >Leave Request</a></li> 
          </ul>
        <!--<li class="freq"><i class="fa fa-list-alt" aria-hidden="true"></i><a href="#">Farmer Request</a></li>-->
        <li class="vstock"><i class="fa fa-tasks" aria-hidden="true"></i><a href="#">View Stock</a>
        <!--<li class="oreq"><i class="fa fa-shopping-basket" aria-hidden="true"></i><a href="#"> Order Products</a></li>
        <li class="ostatus"><i class="fa fa-shopping-basket" aria-hidden="true"></i><a href="#"> Order Status</a></li>-->
        <li class="applist"><i class="fa fa-tasks" aria-hidden="true"></i><a href="#"> Approved Leaves</a></li>
        <!--<li class="lapproval"><i class="fa fa-tasks" aria-hidden="true"></i><a href="#"> Leave Approval</a></li>-->
        <li class="rjctlist"><i class="fa fa-tasks" aria-hidden="true"></i><a href="#"> Rejected Leaves</a></li>
     
       
      </ul>
    </aside>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
            <a class="navbar-brand" href="#">Admin<span class="main-color">Dashboard</span></a>
          </div>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/fresh_gro1/admin/reset/reset.php"><i class="fa fa-user-o fw"></i> Reset Password</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/fresh_gro1/Logout.php"><i class="fa fa-sign-out"></i> Log out</a></li>
                </ul>
              </li>
              <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2>Admin</h2>
                <iframe id="iloadspace" STYLE="width:100%;height:620px;" FRAMEBORDER="no" BORDER="0"  seamless="seamless" ></iframe></div>
              </div>
            </div>
          </div>
        </div
      </div>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              
            </div>
            <div class="col-md-4">
             
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
      </section>
      </section>
      </body>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
      <script src='js/admin.js'></script>
      <script>
          $(document).ready(function(){
            stockcheck();
           // expcheck(stockcheck());
            function stockcheck()
            {
            $.ajax({
        url: "/fresh_gro1/admin/stockcheck.php",
        type: "POST",
        success: function(response)
        {
        if(response)
          {
            swal({
        title: "The Following Products has Insufficient Stock",
        text: response,
        type: "warning",
        confirmButtonColor: "#303030",
        confirmButtonText: "Ok",
        closeOnConfirm: false, 
    },
    function(isConfirm) {
        if (isConfirm) {
       swal.close();
        } 
    }
     );
                
                }
               
                }
               
               });
         
              
            }
    
 


      

          $('.staffreg').click(function () { 
          $('.content h2').contents().replaceWith('STAFF REGISTRATION');
          $('#iloadspace').attr('src','/fresh_gro1/admin/staff/staf.php');
           });



           $('.suppreg').click(function () { 
          $('.content h2').contents().replaceWith('SUPPLIER REGISTRATION');
          $('#iloadspace').attr('src',' /fresh_gro1/admin/supplier/sup.php');
           });



           $('.vfarmer').click(function () { 
          $('.content h2').contents().replaceWith('FARMER');
          $('#iloadspace').attr('src','/fresh_gro1/admin/Farmer/farmer.php');
           });



           $('.vcustomer').click(function () { 
          $('.content h2').contents().replaceWith('STAFF');
          $('#iloadspace').attr('src','/fresh_gro1/admin/staff/table/staff.php');
           });



           $('.vsupp').click(function () { 
          $('.content h2').contents().replaceWith('SUPPLIER');
          $('#iloadspace').attr('src','/fresh_gro1/admin/supplier/table/supplier.php');
           });



           $('.acat').click(function () { 
          $('.content h2').contents().replaceWith('ADD CATEGORY');
          $('#iloadspace').attr('src','/fresh_gro1/admin/addc/addc.php');
           });



           $('.asubcat').click(function () { 
           $('.content h2').contents().replaceWith('Add Subcategory');
           $('#iloadspace').attr('src','/fresh_gro1/admin/addsub/addsub.php');
            });


            $('.abrand').click(function () { 
           $('.content h2').contents().replaceWith('Add Brand');
           $('#iloadspace').attr('src','/fresh_gro1/admin/addbrand/addbrand.php');
            });


           $('.apro').click(function () { 
          $('.content h2').contents().replaceWith('ADD PRODUCT');
          $('#iloadspace').attr('src','/fresh_gro1/admin/addpro/addpro.php');
           });


           $('.sreq').click(function () { 
          $('.content h2').contents().replaceWith('STAFF REQUEST');
          $('#iloadspace').attr('src','/fresh_gro1/admin/request/request.php');
           });


           


           $('.freq').click(function () { 
          $('.content h2').contents().replaceWith('FARMER REQUEST');
          $('#iloadspace').attr('src','/fresh_gro1/admin/farmer_req/farmerreq.php');
           });


           $('.vstock').click(function () { 
          $('.content h2').contents().replaceWith('VIEW STOCK');
          $('#iloadspace').attr('src','/fresh_gro1/admin/view_stock/stocklist.php');
           });


           $('.oreq').click(function () { 
          $('.content h2').contents().replaceWith('ORDER REQUEST');
          $('#iloadspace').attr('src','/fresh_gro1/admin/order/order.php');
           });


           $('.ostatus').click(function () { 
          $('.content h2').contents().replaceWith('ORDER STATUS');
          $('#iloadspace').attr('src','/fresh_gro1/admin/order_status/table/orderstatus.php');
           });


           $('.applist').click(function () { 
          $('.content h2').contents().replaceWith('APPROVED LEAVES');
          $('#iloadspace').attr('src','/fresh_gro1/admin/approved list/approvedlist.php');
           });


           $('.rjctlist').click(function () { 
          $('.content h2').contents().replaceWith('REJECTED LEAVES');
          $('#iloadspace').attr('src','/fresh_gro1/admin/rejected list/rejectedlist.php');
           });



           $('.lapproval').click(function () { 
          $('.content h2').contents().replaceWith('leave approval');
          $('#iloadspace').attr('src','/fresh_gro1/admin/leave approval/table/leaveapproval.php');
           });

         
          



          




           
            
        });
      </script>
      
    </html>
