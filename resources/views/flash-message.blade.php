@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('info'))

<div class="alert alert-info alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ $message }}</strong>

</div>

@endif


@if ($errors->any())

<div class="alert alert-danger">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	{{-- Please check the form below for errorsss --}}
	<ul>
		@if($errors->any())
		@foreach ($errors->all() as $error)
			<li class="alert alert-danger">{{ $error }}</li>
		@endforeach
		@endif
	</ul>

</div>

@endif

{{-- @if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger" role="alert">{{ $error }}</li>
        @endforeach
	</div>
    @endif --}}