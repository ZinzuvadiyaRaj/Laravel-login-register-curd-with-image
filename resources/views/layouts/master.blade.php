<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard.index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('category') }}">Category <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('image') }}">Image <span class="sr-only">(current)</span></a>
        </li>
      </ul>
        
    </div>
    <div class="">
        <form action="{{ route('logout') }}" method="post" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"> LOGOUT</button>
        </form>
    </div>
</nav>

<section>
    @yield('content')
</section>


<footer style="background: lightgray">
    <div class="container">
        <div class=" d-flex justify-content-center">
            <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
                <a href="#">Zinzuvadiya Raj</a>.
            </p>
        </div>
      </div>
</footer>