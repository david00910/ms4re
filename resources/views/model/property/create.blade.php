@extends('layouts.app')
@section('title', 'Self - service')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Property</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-8">
                                <createproperties></createproperties>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>



@endsection