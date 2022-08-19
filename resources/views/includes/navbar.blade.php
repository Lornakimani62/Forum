<nav class="navbar navbar-expand-lg navbar-dark bg-success" >
    <div class="container-fluid"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button" data-toggle="collapse" data-target="#navbar20">

      </button>
      <div class="collapse navbar-collapse" id="navbar20">
        <ul class="navbar-nav mr-auto">
        </ul>
        <p class="d-none d-md-block lead mb-0 text-white"> <i class="fa d-inline fa-lg fa-stop-circle"></i> <b> ELECTIONS DISCUSSION FORUM</b> </p>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-1"> <a class="nav-link" href="#">
              <p><i class="fa fa-user fa-fw fa-lg"></i>{{$user->name}}</p>
            </a> </li>
            <li class="nav-item mx-1"> <a class="nav-link" href="{{ route('signout') }}">
              <p><i class="fa fa-sign-out fa-fw fa-lg"></i>Sign out</p>
            </a> </li>
        </ul>
      </div>
    </div>
  </nav>