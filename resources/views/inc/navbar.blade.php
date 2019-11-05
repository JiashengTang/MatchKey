<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <img class="navbar-brand" src="/public/matchkey_blank.png"  id height="60" width="50">
  <a class="navbar-brand" href="#">Match key</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    @if(Session::get('userData')=="admin")
      <li class="nav-item active">
        <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
      </li>
    @elseif(Session::get('userData'))
    <li class="nav-item active">
        <a class="nav-link" href="/user">Home <span class="sr-only">(current)</span></a>
      </li>
    @else
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
    @endif

    @if(Session::get('jorr')=="r")
    <li class="nav-item">
        <a class="nav-link" href="/created">Created</a>
      </li>
    @else
    <li class="nav-item">
        <a class="nav-link" href="/searchresult">Result</a>
      </li>
    @endif
      <li class="nav-item">
        <a class="nav-link" href="/message">Message</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <a class="btn btn-secondary my-2 my-sm-0" href="/" role="button"  >Search &raquo;</a>
    </form>
  </div>
</nav>