@extends('layouts.app')
<style type="text/css">
    .imz{
        border-radius: 100%;
        max-width: 100px;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                 @if (session('response'))
                <div class="alert alert-success">
                    {{ session('response') }}
                </div>
                @endif

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                
                <div class="panel-body">
                    <div class="col-md-4">
                        @if (!empty($profile))
                            <img src="{{ $profile->profile_pic }}" alt=" can't load" class="imz">
                        @else
                            <img src="{{ url('images/dammy.jpg') }}" alt=" can't load" class="imz">
                        @endif

                        @if (!empty($profile))
                            <p class="lead">{{ $profile->name }}</p>
                        @else
                            <p class="lead"></p>
                        @endif
                        
                        @if (!empty($profile))
                            <p class="lead">{{ $profile->designation }}</p>
                        @else
                            <p class="lead"></p>
                        @endif
                        
              
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
