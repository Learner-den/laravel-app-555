<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
</head>

<body>
<div class="container mt-5">
<!-- Success message -->
@if(Session::has('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

<!-- Form design -->

<form action="" method="post" action="{{ route('app.create') }}">
@csrf


<div class="form-group">
<label>App Name</label>
<input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
<!-- Error -->
@if ($errors->has('name'))
<div class="error">
{{ $errors->first('name') }}
</div>
@endif
</div>


<div class="form-group">
<label>Redirect URI</label>
<input type="redirect_uri" class="form-control {{ $errors->has('redirect_uri') ? 'error' : '' }}" name="redirect_uri" id="redirect_uri">
@if ($errors->has('redirect_uri'))
<div class="error">
{{ $errors->first('redirect_uri') }}
</div>
@endif
</div>

<div class="form-group">

<label for="scopes">Scopes:</label>
          @foreach($scopes as $scope)
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="scope_{{ $scope->id }}" name="scopes[]" value="{{ $scope->id }}">
              <label class="form-check-label" for="scope_{{ $scope->id }}">{{ $scope->name }}</label>
            </div>
          @endforeach
          </div>


<input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">

</form> 
<!-- Form design ended-->

</div>
</body>
</html>