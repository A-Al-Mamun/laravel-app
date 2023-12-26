<h1>Home Page</h1>
<a href="{{ route('about')}}">About</a>
<a href="{{ route('contact')}}">Contact</a>


{{-- Just using the array value and show in page in home --}}
@php
    $group = [0,1,2,3,4,5,6,7,8,9];    
@endphp

<ul>
@foreach ($group as $item)
    @if($loop->odd)
        <li style="background-color:black; color:#fff "> {{ $item }}</li>
    @else
        <li style="background-color:yellow; color:red "> {{ $item }}</li>
    @endif
@endforeach
</ul>