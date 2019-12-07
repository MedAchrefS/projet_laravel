
@guest
// The user is not authenticated...
@endguest

@auth

@if(Auth::user()->hasRole('Admin'))
 @extends('Admin.layout')

@endif

@section('content')

   

   
Create User


@endSection
@endauth