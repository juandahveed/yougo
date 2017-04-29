@extends('master')

@section('content')
<div class="col-md-8">

    <p>this is the content section</p>

    {{-- <button onclick="window.signin();">Login</button> --}}

    <script>
        window.onload = login;
        
        function login(){
            window.signin();
        };
    </script>

</div>

@endsection