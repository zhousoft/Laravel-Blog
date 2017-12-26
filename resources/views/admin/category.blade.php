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
  
<table class="table datatable-show-all categoryTable">
<thead>
    <tr>
        <th>分类id</th>
        <th>分类名称</th>
        <th>操作</th>
    </tr>
</thead>
<tbody>  
                    
</tbody>
@foreach ($categories as $category)
    <tr>
        <td>{{ $category->id}}</td>
        <td>{{ $category->name}}</td>
        <td>
            <i class="fa fa-pencil btn  btn-xs categoryEdit"></i>
            <i class="fa fa-trash-o btn btn-xs categoryDelete"></i>
        </td>
       
    </tr>
@endforeach
</table>     
  
@endsection

@section('footer')
    @include('admin.footer')
    <script type="text/javascript" src="{{asset('/js/category.js')}}"></script>
@endsection