<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-watch icon'></i>
        <div class="logo_name">GESDES</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-line-chart'></i>
          <span class="links_name">Registros</span>
        </a>
         <span class="tooltip">Registros</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-git-compare'></i>
         <span class="links_name">Áreas</span>
       </a>
       <span class="tooltip">Áreas</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-group'></i>
         <span class="links_name">Grupos</span>
       </a>
       <span class="tooltip">Grupos</span>
     </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Usuarios</span>
       </a>
       <span class="tooltip">Usuarios</span>
     </li>
    <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Mesnsajes</span>
       </a>
       <span class="tooltip">Mensajes</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Herramientas</span>
       </a>
       <span class="tooltip">Herramientas</span>
     </li>
     <li class="profile">
       <form action="{{url('/salir')}}" method="POST">
        @csrf
        <a href="#" onclick="this.closest('form').submit()">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Cerrar Sesión</span>
         </a>
         <span class="tooltip">Cerrar Sesión</span>  
      </form> 
      </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">@yield('registro')</div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
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