@vite('resources/css/app.css')

{{-- Fontawesome --}}
<script src="https://kit.fontawesome.com/67db78fea9.js" crossorigin="anonymous"></script>

{{-- Google Font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

{{-- Custom CSS Here --}}
<link rel="stylesheet" href="{{ URL::asset('/src/css/layouts/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/src/css/partials/navbars.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
{{-- <link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
    <script src="https://unpkg.com/flexmasonry/dist/flexmasonry.js"></script> --}}
@yield('css')