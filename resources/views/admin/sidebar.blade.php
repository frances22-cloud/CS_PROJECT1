<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="#">FranDen Dietries</a>
          <a class="sidebar-brand brand-logo-mini" href="#"><h2>FranDen Dietries</h2></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div> 
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Recipes</span>
              <i class="fa fa-cutlery" aria-hidden="true"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/view_recipe')}}">Add Recipe</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_recipe')}}">Show recipe</a></li>
               
              </ul>
            </div>
            <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Favourite Recipes</span>
              <i class="fa-solid fa-heart"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               <!-- <li class="nav-item"> <a class="nav-link" href="">Add Recipe</a></li>-->
                <li class="nav-item"> <a class="nav-link" href="">Show recipe</a></li>
               
              </ul>
            </div>
            <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Comments</span>
              <i class="fa-solid fa-messages"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Show comment</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('recipe_category')}}">
              <span class="menu-icon">
              <i class="fa-light fa-pot-food"></i>
              </span>
              <span class="menu-title">Recipe Categories</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('userdata')}}">
              <span class="menu-icon">
              <i class="fa-solid fa-users"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('forum_topics')}}">
              <span class="menu-icon">
              <i class="fa-solid fa-users"></i>
              </span>
              <span class="menu-title">Forum Topics</span>
            </a>
          </li>
        </ul>
      </nav>