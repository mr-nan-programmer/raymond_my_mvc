@extends("layout.master")

@section('content')
    <h2>User Panel</h2>
    {{\MrNan\Main\Auth::user()->name}}
    <a href="auth/logout">logout</a>
@endsection