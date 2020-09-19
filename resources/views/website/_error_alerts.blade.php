@if(Session::has('success'))
    <div class="alert alert-success alert-box">
        <strong>Success!</strong> {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-warning alert-box">
        <strong>Ups!</strong> {{ Session::get('error') }}
    </div>
@endif
