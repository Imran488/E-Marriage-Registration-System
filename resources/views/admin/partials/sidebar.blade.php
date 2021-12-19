<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <div class="header-logo">
        <a href="/">
            <img alt="E-Marriage Registration System" width="120" height="60" data-sticky-width="82"data-sticky-height="40" src="https://cdn3.iconfinder.com/data/icons/geek-3/24/Jedi_Order_sigil_logo_star_wars-256.png">
        </a>
    </div>


    
    
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm4.596 5.404c-.204-.205-.526-.233-.763-.067-2.89 2.028-4.52 3.23-4.894 3.602-.585.586-.585 1.536 0 2.122.586.585 1.536.585 2.122 0 .219-.22 1.418-1.851 3.598-4.897.168-.234.141-.556-.063-.76zM17.5 11c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1zm-11 0c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1zm2.318-3.596c-.39-.39-1.024-.39-1.414 0-.39.39-.39 1.023 0 1.414.39.39 1.023.39 1.414 0 .39-.39.39-1.024 0-1.414zM12 5.5c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1-.448-1-1-1z" fill="rgba(222,27,27,1)"/></svg>
            <span>Dashboard</span>
        </a>
    </li>



    <li class="nav-item active">
        <a class="nav-link collapsed" href="{{route('kazilist')}}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zM8 7v2h8V7H8zm0 4v2h8v-2H8zm0 4v2h8v-2H8z" fill="rgba(210,38,38,1)"/></svg>
            <span>Kazi </span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link collapsed" href="{{route('userlist')}}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zM8 7v2h8V7H8zm0 4v2h8v-2H8zm0 4v2h8v-2H8z" fill="rgba(210,38,38,1)"/></svg>
            <span>Users </span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link collapsed" href="{{route('marrigeregistration')}}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(242,19,19,1)"/></svg>
            <span>Marriage </span>
        </a>
    </li>


    <li class="nav-item active">
        <a class="nav-link collapsed" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(242,19,19,1)"/></svg>
            <span>Devorce </span>
        </a>
    </li>


    <li class="nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M15 5h2a2 2 0 0 1 2 2v8.17a3.001 3.001 0 1 1-2 0V7h-2v3l-4.5-4L15 2v3zM5 8.83a3.001 3.001 0 1 1 2 0v6.34a3.001 3.001 0 1 1-2 0V8.83z" fill="rgba(210,45,45,1)"/></svg> 
            User Requests
        </a>
        <div class="dropdown-menu" aria-labelledby="Dropdown">
          <a class="dropdown-item" href="{{route('marriage.requestlist')}}">Marriage</a>
          <a class="dropdown-item" href="{{route('devorce.requestlist')}}">Devorce</a>
          <a class="dropdown-item" href="{{route('certificate.requestlist')}}">Certificate</a>
        </div>
    </li>


    
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm1 2v14h16V5H4zm4.5 9H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V6h2v2h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v2h-2v-2H8.5v-2z" fill="rgba(212,38,38,1)"/></svg>
            <span>Payment</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link collapsed" href="{{route('kazioffice')}}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17.084 15.812a7 7 0 1 0-10.168 0A5.996 5.996 0 0 1 12 13a5.996 5.996 0 0 1 5.084 2.812zM12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" fill="rgba(203,43,43,1)"/></svg>
            <span>Our Offices</span>
        </a>
    </li>


    <li class="nav-item active">
        <a class="nav-link dropdown-toggle" href="#" id="Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(242,19,19,1)"></svg>
            Certificate List
        </a>
        <div class="dropdown-menu" aria-labelledby="Dropdown">
          <a class="dropdown-item" href="#">Marriage</a>
          <a class="dropdown-item" href="#">Devorce</a>
        </div>
    </li>



    <li class="nav-item active">
        <a class="nav-link collapsed" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M22 13.341A6 6 0 0 0 14.341 21H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v9.341zm-9.94-1.658L5.648 6.238 4.353 7.762l7.72 6.555 7.581-6.56-1.308-1.513-6.285 5.439zm4.99 7.865a3.017 3.017 0 0 1 0-1.096l-1.014-.586 1-1.732 1.014.586c.278-.238.599-.425.95-.55V15h2v1.17c.351.125.672.312.95.55l1.014-.586 1 1.732-1.014.586a3.017 3.017 0 0 1 0 1.096l1.014.586-1 1.732-1.014-.586a2.997 2.997 0 0 1-.95.55V23h-2v-1.17a2.997 2.997 0 0 1-.95-.55l-1.014.586-1-1.732 1.014-.586zM20 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="rgba(212,40,40,1)"/></svg>
            <span>Setting</span>
        </a>
    </li>
</ul>