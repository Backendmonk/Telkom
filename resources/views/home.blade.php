<?php
                 $a = e(Auth::user()->level); 
        ?>
@extends('layouts.conten')

@section('nama')
<h6>{{Auth::user()->name}}<h6>
@endsection


@section('content')


@endsection
