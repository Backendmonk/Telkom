<?php
                 $a = e(Auth::user()->level); 
        ?>
@extends('layouts.conten')
@section('ket')
    @if($a == "admin")
    Dashboard Admin
                                      
    @elseif($a == "user")
    Dashboard User
                                @endif
@endsection
@section('nama')
<h6>{{Auth::user()->name}}<h6>
@endsection


@section('content')


@endsection
