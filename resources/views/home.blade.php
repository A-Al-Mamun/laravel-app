<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('pages.header')
    <h1>Home Page</h1>
    <a href="{{ route('about')}}">About</a>
    <a href="{{ route('contact')}}">Contact</a>


    {{-- Just using the array value and show in page in home --}}
    @php
        $group = [0,1,2,3,4,5,6,7,8,9];    
    @endphp

    <ul>
    @foreach ($group as $item)
        @if($loop->even)
            <li style="background-color:black; color:#fff ">Iteration: {{$loop->iteration}} --  {{ $item }}</li>
        @elseif($loop->odd)
            <li style="background-color:yellow; color:red ">Iteration: {{$loop->iteration}} --   {{ $item }}</li>
        @endif
    @endforeach
    </ul>

    @include('pages.footer')

    {{-- We completed basic templated practice --}}
</body>
</html>