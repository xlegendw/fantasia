<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">


<div class="sidebar">
  <ul>
    <li>
      <a href="<?= base_url('main/clients');?>"><i class="fas fa-users-cog"></i></a>
    </li>

    <li>
      <a href="<?= base_url('main/products');?>"><i class="fas fa-boxes"></i></a>
    </li>

    <li>
      <a href="<?= base_url('main/sell');?>"><i class="fas fa-cash-register"></i></a>
    </li>

     <li>
      <a href="<?= base_url('main/bills');?>"><i class="fas fa-file-invoice-dollar"></i></a>
    </li>

    <hr>
    <li >
      <a href="<?= base_url('main/userArea');?>" class="py-5">
        <img src="third_party/img/user.jpg" alt="">
      </a>

      <li>
      <a href="<?= base_url('main/usuario');?>"><i class="fas fa-user-plus"></i></a>
    </li>

    </li>

      <li>
       <a href="<?= base_url('main/userArea');?>"><i class="fas fa-sign-out-alt text-danger"></i></a>
  
    </li>
    <hr>

  </ul>
</div>




<style>
  body, html{
    margin:0;
    padding: 0;
    height:100%;
    width:100%;
  }

  .sidebar{
    position: fixed;
    width: 100px;
    height: 100%;
    overflow: hidden;
    transition: 0.6s;
    background: #2b5876;
    background: -webkit-linear-gradient(to right, #4e4376, #2b5876); 
    background: linear-gradient(to right, #4e4376, #2b5876); 

  }

  .body{
    margin-left:105px;
    margin-right: 5px;
  }

  .sidebar ul{
    margin:0; 
    padding:0;
  }

  .sidebar ul li{
    list-style:none;
  }

  .sidebar .fas{
    text-decoration: none;
    color:#fffaff;
    height: 80px;
    width: 100%;
    font-size: 30px;
    line-height: 80px;
    text-align: center;
    display: block;
    transition: 0.7s;
  }


  .sidebar .fas:hover{
    background: #2b5876;
  }

  
 
</style>



    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>



