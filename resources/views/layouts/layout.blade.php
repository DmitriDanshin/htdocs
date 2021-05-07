<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>

@include('layouts.header')
@include('layouts.content')
@include('layouts.footer')

<script src="/js/app.js"></script>

</body>
</html>
