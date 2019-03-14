@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/events/create" class="btn_pink btn btn-primary">Organize Speed Dating</a>
                    <h3>You are logged in!</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
