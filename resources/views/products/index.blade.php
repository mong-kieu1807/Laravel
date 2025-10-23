@extends('layouts.app')
@section('title', $ViewData['title'])
@section('subtitle', $ViewData['subtitle'])
@section('content')
    <h2 class="mb-4">Sản phẩm nổi bật</h2>
    <div class="row">
        <!-- Kiểm tra xem danh sách có rỗng không-->
        @forelse ($ViewData["products"] as $product)
            <div class ="col-md-4 col-lg-3 mb-2"> 
                <div class ="card">
                    <img src="{{ asset('/img/' . $product["image"]) }}" class="card-img-top img-card" alt="..."/>
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id'=> $product["id"]])}}" class="btn bg-primary text-white">{{ $product["name"] }}</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">Chưa có sản phẩm nào.</p>
            </div>
        @endforelse
    </div>
@endsection {{-- Kết thúc section 'content' --}}