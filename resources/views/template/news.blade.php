@extends('template.tpl_default', ['pageId' => 'news'])
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('content')
<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Trang Tin Tức </title>
</head>
<body>
@include("includes.header")


<main class="container">
<section class="hero">
<h1>Tin Nóng Hôm Nay</h1>
</section>


<section class="grid" id="articles">
<article class="card">
<img src="https://via.placeholder.com/400x200?text=Ảnh+Tin" alt="ảnh tin">
<h2>Tiêu đề bài viết mẫu</h2>
<p class="meta">23 Tháng 9, 2025 • Khoa CNTT</p>
<p class="excerpt">Đoạn tóm tắt ngắn gọn về nội dung bài viết. Đây là phần mô tả ngắn để người đọc quyết định click vào xem chi tiết.</p>
<a class="read-more" href="#">Đọc tiếp →</a>
</article>
</section>


<aside class="sidebar">
<div class="widget">
<h3>Bảng Tin</h3>
<ul>
<li>Tiêu đề ngắn 1</li>
<li>Tiêu đề ngắn 2</li>
<li>Tiêu đề ngắn 3</li>
</ul>
</div>
</aside>
</main>


@include('includes.footer')
</body>
</html>
@endsection
@section('js')
    <script src="{{ asset('js/news.js') }}"></script>
@endsection