<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">TALUD</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
      <a href="{{ route('proveedores.index') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Proveedores</span>
        </a>
         <span class="tooltip">Proveedores</span>
      </li>
      <li>
      <a href="{{ route('usuarios.index') }}">
         <i class='bx bx-user' ></i>
         <span class="links_name">Usuarios</span>
       </a>
       <span class="tooltip">Usuarios</span>
     </li>
     <li>
     <a href="{{ route('materiales.index') }}">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Materiales</span>
       </a>
       <span class="tooltip">Materiales</span>
     </li>
     <li>
     <a href="{{ route('obras.index') }}">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Obras</span>
       </a>
       <span class="tooltip">Obras</span>
     </li>
     <li>
     <a href="{{ route('clientes.index') }}">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Clientes</span>
       </a>
       <span class="tooltip">Clientes</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">SALIR</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>