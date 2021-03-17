<div {{ $attributes->merge(['class' => 'display-6']) }}>

    {{ $superTitle }}
    <h1>Hello from SiteBar component</h1>
    <p>{{ $title }}</p>
    <p>{{ $info }}</p>

    <ul>
        @foreach($list as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>

    {{ $slot }}

</div>
