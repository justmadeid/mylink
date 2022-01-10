<nav class="navbar navbar-expand-lg navbar-dark bg-c-green" style="padding: 20px; margin-top: 50px; border-radius: 20px;">
    <div class="container">
      <a class="navbar-brand" href="#">JstMade</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->username }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard">my dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </ul>
              </li>
            @else
              <li class="nav-item">
                <a href="/login" class="btn btn-light">Login</a>
              </li>
            @endauth
          </ul>
      </div>
    </div>
  </nav>