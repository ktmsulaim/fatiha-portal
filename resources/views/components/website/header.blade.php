<section id="page-title" class="page-title-center">

    <div class="container clearfix">
        <h1>{{ $title }}</h1>
        <span>{{ $subtitle ?: null }}</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            @if ($urls && is_array($urls) && count($urls))
                @foreach ($urls as $url)
                    <li class="breadcrumb-item active" aria-current="page">{{ $url['label'] }}</li>
                @endforeach
            @endif
        </ol>
    </div>

</section>