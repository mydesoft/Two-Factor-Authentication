    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Wewetube</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>

      </ul>
      
      <div class="">
        @guest
        <a href="/register"><button class="btn btn-sm btn-outline-info">Register</button></a>
        <a href="/login"><button class="btn btn-sm btn-outline-info">Login</button></a>
        @endguest

        @auth
         <a href="/logout"><button class="btn btn-sm btn-outline-info">Logout</button></a>
        @endauth

      </div>
    </div>
  </div>
</nav>




   
