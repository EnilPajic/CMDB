<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Dodao CMDB logo-->
            <img style="max-width:50px; margin-top: 0px;"
                 src="{{ asset('css/background/logo.jpg') }}">
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" ng-controller="loginCTRL">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="about" translate="ABOUT">About</a></li>
                <li><a href="#" ng-click="Admin();" onclick="return false;">Admin</a></li>
                <li><a href="#" ng-click="Filmovi();" onclick="return false;">Filmovi</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">

                <form class="navbar-form navbar-right">
                    <span class="label label-info">Welcome </span>
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-warning" onclick="localStorage.setItem('token', ''); location.href='/'">Logout</button>

                </form>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div style="margin: 20px">
<table class="table table-inverse">
    <thead>
    <tr>
        <th>#</th>
        <th>Nick</th>
        <th>email</th>
        <th>Dodan</th>
        <th>Banovan?</th>
    </tr>
    </thead>

    <tbody>
    <?php $u = App\User::all(); ?>
        @foreach($u as $p)
            <tr>
                <td> {{ $p->id }}</td>
                <td> {{ $p->name }}</td>
                <td> {{ $p->email }}</td>
                <td> {{ $p->created_at }}</td>
                <td>
                    @if($p->banovan)
                        <td><b>DA</b> (<a onclick="Banuj({{$p->id}}, '{{$p->name}}', false); return false;" href="#" >unbanuj</a>)</td>
                    @else
                        <td><b>NE</b> (<a onclick="Banuj({{$p->id}},'{{$p->name}}', true); return false;" href="#" >banuj</a>)</td>
                    @endif
            </tr>
        @endforeach
    </tbody>
</table>
</div>
