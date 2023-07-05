
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project1</title>
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
        .div_center{
            text-align:center;
            padding-top:30px;
        }
        .font_size{
            font-size:30px;
            padding-bottom:30x;
            font-color:black;
        }
        .text_color{
            color:black;
            padding-bottom:20px;
        }
        label{
            display:inline-block;
            width:100px;
        }
    .div_design{
        padding-bottom:15px;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
           <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}

           </div>
           @endif
            <div class="div_center">
                <h2 class="font_size">Update recipe</h2>
                <form action="{{url('update_recipe_confirm',$tbl_recipes->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_design">
                    <label for="">Add Title:</label>
                    <input class="text_color" type="text" name="title" placeholder="Enter recipe title"  value="{{$tbl_recipes->title}}" required>
                    </div>
                    <div class="div_design">
                    <label for="">Description:</label>
                    <input class="text_color" type="text" name="description" placeholder="Enter recipe description"  value="{{$tbl_recipes->description}}" required>
                    </div>
                    <div class="div_design">
                    <label for="">Category:</label>
                     <select class="text_color" name="category" id="" required>
                    <option value="{{$tbl_recipes->category}}" selected="">{{$tbl_recipes->category}}</option>

                    @foreach($recipe_category as $recipe_category)
                     <option value="{{ $recipe_category->category_name}}">{{ $recipe_category->category_name}}</option>
                     @endforeach
                  
                     </select>
                    </div>
                    <div class="div_design">
                    <label for="">Ingredients:</label>
                    <input class="text_color" type="text" name="ingredients" placeholder="Enter recipe ingedients" value="{{$tbl_recipes->ingredients}}" required>
                    </div>
                    <div class="div_design">
                    <label for="">Instructions:</label>
                    <input class="text_color" type="text" name="prep_instructions" placeholder="Enter recipe title" value="{{$tbl_recipes->prep_instructions}}" required>
                    </div>
                    <div class="div_design">
                    <label for="">Prep Time:</label>
                    <input class="text_color" type="text" name="prep_time" placeholder="Enter recipe prep time"  value="{{$tbl_recipes->prep_time}}" required>
                    </div>
                    <div class="div_design">
                    <label for="">Nutritional Info:</label>
                    <input class="text_color" type="text" name="Nutritional_info" placeholder="Nutritional Info" value="{{$tbl_recipes->Nutritional_info}}" required>
                    </div>

                    <div class="div_design">
                    <label for="">Current Image:</label>
                    <img src="/tbl_recipes/{{$tbl_recipes->image}}" alt="" height="100" width="100">
                    </div>

                    <div class="div_design">
                    <label for="">Change Image:</label>
                    <input class="text_color" type="file" name="image">
                    </div>
                    <div class="div_design">
                    <input type="submit" value="Update recipe" class="btn btn-primary" >
                    </div>
                </form>
            </div>
   </div>
  </div>
        <!-- partial -->
        <!--@include('admin.body')-->
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