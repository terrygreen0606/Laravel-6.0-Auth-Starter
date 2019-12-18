@extends('layouts.app')

@section('content')
<h1>About</h1>
@can('isUser')
<h2>User can see this.</h2>
@endcan
@can('isAuthor')
<h2>Author can see this.</h2>
@endcan
@can('isAdmin')
<h2>Admin can see this.</h2>
@endcan
@endsection
