@extends('layouts.app')
@section('title',$viewData['title'])
@section('content')  
<div class = row>
    <div class="col-md-6 col-lg-4 mb-4">
        <img src="{{ asset('/img/ganyu.jpg') }}" class="img-fluid" alt="..." />
    </div>
    <div class="col-md-6 col-lg-4 mb-4">
        <img src="{{ asset('/img/vit.jpg') }}" class="img-fluid" alt="..." />
    </div> 
    <div class="col-md-6 col-lg-4 mb-4">
        <img src="{{ asset('/img/ca.jpg') }}" class="img-fluid" alt="..." />
    </div>         
</div>
@endsection