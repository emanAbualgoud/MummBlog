
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            {{ $error }}
        </div>
    @endforeach
@endif


@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        {{ Session::get('warning') }}
    </div>
@endif

@if(Session::has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        {{ Session::get('danger') }}
    </div>
@endif



