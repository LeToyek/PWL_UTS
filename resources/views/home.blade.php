@extends('layouts.template',["title" => "home"])

@section('content')
<div class="content-wrapper pt-4">
    <div class="" style="height: 100%;align">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
