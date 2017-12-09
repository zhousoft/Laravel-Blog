@extends('layouts.admin')

@section('header')
    @include('admin.header')
@endsection

@section('sidebar')
    @include('admin.sidebar')
@endsection

@section('content-header', "系统信息")
@section('content-description', "当前系统状态")
    
@section('content')
  分类管理
@endsection

@section('footer')
    @include('admin.footer')
@endsection