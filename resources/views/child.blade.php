<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'practice')


<!-- 老師說這段可以不用理他，如果想繼承母版這裡的內容，就在母版把  @section('sidebar') 的內容移到外面去 -->
<!-- @section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')
<p>This is child</p>
@endsection