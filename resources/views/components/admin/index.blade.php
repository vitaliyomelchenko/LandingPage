<x-admin.layout />

@if(session('status'))
    <div class="alert alert-success">
        <h2>{{ session('status') }}</h2>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container portfolio_title" style="margin-top: 100px;">

    <!-- Title -->
    <div class="section-title">
        <h2>{{ $title }}</h2>
    </div>
    <!--/Title -->

</div>
<!-- Container -->

<div class="text-center" style="margin-top: 25px;">
    <a href="{{route('pages')}}" ><button type="button" class="btn btn-light">Pages</button></a>
    <a href="{{route('portfolios')}}" ><button type="button" class="btn btn-light">Portfolios</button></a>
    <a href="{{route('services')}}" ><button type="button" class="btn btn-light">Services</button></a>
</div>






