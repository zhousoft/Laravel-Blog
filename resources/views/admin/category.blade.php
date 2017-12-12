@extends('layouts.admin')

@section('header')
    @include('admin.header')
@endsection

@section('sidebar')
    @include('admin.sidebar')
@endsection

@section('content-header', "分类管理")
@section('content-description', "文章分类管理")
    
@section('content')
  @foreach($data as $v)
    {{ $v->name }}      
  @endforeach
@endsection

@section('footer')
    @include('admin.footer')
@endsection