<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="/css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>

   .dropdown-menu {
      position: relative;
      display: inline-block;
   }

   .menu-content {
      display: none;
      position: absolute;
      background-color:DodgerBlue;
      min-width: 120px;
      z-index: 1;
      left: -100px;
      border-radius:12px;
   }

   .links {
      color: rgb(255, 255, 255);
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      font-size: 18px;
      font-weight: bold;
      border-bottom: 1px solid black;
   }

   .links:hover {
      background-color: LightGray;
      border-radius:12px;
   }

   .dropdown-menu:hover .menu-btn {
      background-color: #3e8e41;
   }
   </style>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">Maid4House</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="/dash" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/admin/create">
            <i class='bx bx-box' ></i>
            <span class="links_name">Edit Profile</span>
          </a>
        </li>
        <li>
          <a href="/service">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Services</span>
          </a>
        </li>
        <li>
          <a href="/serviceConsumer">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Manage Service Consumer</span>
          </a>
        </li>
        <li>
          <a href="/serviceProvider">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Manage Service Provider</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">FeedBack</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Complaint</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="/logout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search...">
          <i class='bx bx-search' ></i>
        </div>
        <div class="profile-details">
            <span class="admin_name">Dhrumit Parmar</span>
            <i class='bx bx-chevron-down'></i>
            <div class="dropdown-menu">
              <img src="/image/profile.png" alt="" class="img">
              <div class="menu-content">
                 <a class="links" href="/admin/create">Profile</a>
                 <a class="links" href="#">Setting</a>
                 <a class="links" href="/logout">Logout</a>
              </div>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

<script>
   let dropdownBtn = document.querySelector('.img');
   let menuContent = document.querySelector('.menu-content');
   dropdownBtn.addEventListener('click', () => {
      if (menuContent.style.display === "") {
         menuContent.style.display = "block";
      } else {
         menuContent.style.display = "";
      }
   })
   </script>

</body>
</html>


<!-- <div class="dropdown">
              <div class="dropdown-options">
                <a href="#">Dashboard</a>
                <a href="#">Setting</a>
                <a href="#">Logout</a>
              </div>
          </div> -->
