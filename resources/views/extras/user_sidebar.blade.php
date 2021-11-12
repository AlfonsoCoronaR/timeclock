<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-watch icon'></i>
        <div class="titulo-informe logo_name">GESDES</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">

        <li>
          <a href="#">
            <img src="{{url('img/reloj.png')}}" alt="reloj.png" class="letra">
            <span class="links_name">Timeclock</span>
          </a>
          <span class="tooltip">Timeclock</span>
        </li>
        <li>
          <a href="#">
            <img src="{{url('img/g.png')}}" alt="G.png" class="letra">
            <span class="links_name"></span>
          </a>
          <span class="tooltip">G</span>
        </li>
        <li>
          <a href="#">
            <img src="{{url('img/e.png')}}" alt="E.png" class="letra">
            <span class="links_name"></span>
          </a>
          <span class="tooltip">E</span>
        </li>
        <li>
          <a href="#">
            <img src="{{url('img/s.png')}}" alt="S.png" class="letra">
            <span class="links_name"></span>
          </a>
          <span class="tooltip">S</span>
        </li>
        <li>
        <a href="#">
          <img src="{{url('img/d.png')}}" alt="D.png" class="letra">
          <span class="links_name"></span>
        </a>
        <span class="tooltip">D</span>
      </li>
      <li>
          <a href="#">
            <img src="{{url('img/e.png')}}" alt="E.png" class="letra">
            <span class="links_name"></span>
          </a>
          <span class="tooltip">E</span>
        </li>
        <li>
          <a href="#">
            <img src="{{url('img/s.png')}}" alt="S.png" class="letra">
            <span class="links_name"></span>
          </a>
          <span class="tooltip">S</span>
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
      @yield('registro')
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