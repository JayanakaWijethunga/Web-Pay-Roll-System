
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') Control Panel</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  
  
  <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">


    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>@yield('utypemin')</b>CP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><small><b>@yield('utype') </b>Control Panel</small></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
    
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        @section('avators')
        @show
        </div>
        <div class="pull-left info">
        
        @section('names')
        @show
        <i class="fa fa-circle text-success"></i> Online</a>
          
          
        </div>
        <br/><br/>
      </div>
      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Actions</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active">
        @section('records')
        @show

        <i class="fa fa-tasks"></i> <span>@yield('functions01')</span></a></li>
        <li class="">
        @section('myprofile')
        @show

        <i class="fa fa-user"></i> <span>My Profile</span></a></li>

        <li class=""><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        <i class="fa fa-sign-out"></i> <span>Sign-Out</span></a></li>
        
      </ul>

  
                                       
                                    

                                   

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="play content-wrapper">
  <section class="content-header">
  <center><h4 class='mains'>@yield('heading') List</h4></center>
  </section>
  <section class="content">
  <div class='whole '>
        
        
        <div class="pos-1">
        
        <div class="all container">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-body">
                    <table  class='mytable' id='myTable'>
                    <thead>
                    <tr>
                <th>Username</th>
                <th>E-mail</th>
                <th>Edit</th>
                <th>Accessability</th>
                <th>Delete</th>

                
                
            </tr>
                    </thead>
                    <tbody>
                    @section('eachraw')
					
                    @show
					</tbody>

                    </table>

                </div>
                </div>
				<br/><br/>
                @section('ngv')
                
                @show
                        
				</div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
  </div>


  <footer class="main-footer">

<div class="pull-right hidden-xs">
  Company Name Here
</div>

<strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
</footer>



  <div class="control-sidebar-bg"></div>
</div>




</body>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../dist/js/adminlte.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );



</script>



<style>
.play{
  

}
h4 {
	margin: 1em 0 0.5em 0;
	color: #343434;
	font-weight: normal;
	font-family: 'Ultra', sans-serif;   
	font-size: 36px;
	line-height: 42px;
	text-transform: uppercase;
	text-shadow: 0 2px white, 0 3px #777;
}
.all{
    margin:0;
    padding:0; 
    width:1100px;
    
}

@media screen and (max-width: 767px) {
    .all {
    border-bottom: 1px solid #ddd;
  }
}

.pos-1{
    

}
</style>
</html>