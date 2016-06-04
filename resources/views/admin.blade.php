<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="{{asset ('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset ('/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <title>Admin panel</title>


</head>

<body>
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
<script src="{{asset ("/js/jquery-2.2.3.min.js")}}"></script>
<script src="{{asset ("/js/bootstrap.min.js")}}"></script>
<script src="{{asset ("/js/general.js")}}"></script>

</body>
</html>