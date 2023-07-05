
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
 .center{
  margin:auto;
  width:50%;
  border:1px solid white;
  text-align:center;
  margin-top:40px;
}
 .font_size{
    font-size:20px;
    text-align:center;
    padding-top:20px;
 }
 .img_size{
    width:100px;
    height:100px;
 }
 .th_color{
    background:skyblue;
 }
 .th_design{
    padding:30px;
 }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
       <!-- @include('admin.body')-->

       <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
           <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}

           </div>
           @endif
            <h2 class="font_size">All recipes</h2>
        <table class="center">
      <tr class="th_color">
	    <th class="th_design" >S/N</th>
        <th class="th_design">Title</th>
        <th class="th_design" >Image</th>
        <th class="th_design">Description</th>
       <!-- <th class="th_design" >Category</th>-->
        <th class="th_design" >Ingredients</th>      
        <th class="th_design">Intructions</th>
       <th  class="th_design">Prep time</th>
       <!-- <th class="th_design">Nutrients</th>-->
		<th class="th_design" colspan='2'>Actions</th>
    </tr>

    @foreach($tbl_recipes as $tbl_recipes)
    <tr>
    <td>{{$tbl_recipes->id}}</td>
    <td>{{$tbl_recipes->title}}</td>
    <td>
        <img class="img_size" src="/tbl_recipes/{{$tbl_recipes->image}}" alt="">
    </td>
    <td >{{$tbl_recipes->description}}</td>
   <!--- <td >{{$tbl_recipes->category}}</td>-->
    <td >{{$tbl_recipes->ingredients}}</td>
    <td >{{$tbl_recipes->prep_instructions}}</td>
    <td >{{$tbl_recipes->prep_time}}</td>
    <!---<td >{{$tbl_recipes->Nutritional_info}}</td>-->
    <td>
        <a onclick="return confirm('Are you sure you want to delete this?')" class="bt btn-danger" href="{{url('delete_recipe',$tbl_recipes->id)}}">Delete</a>
    </td>
    <td>
        <a class="btn btn-success" href="{{url('update_recipe',$tbl_recipes->id)}}">Edit</a>
    </td>
    </tr>
    @endforeach
    
    </table>
</div>
</div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>