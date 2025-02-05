@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Top buttons -->
                    <div class="d-flex justify-content-between mb-4">
                        <a href="{{ route('posts.index') }}" class="btn btn-primary">View Posts</a>
                        <a href="{{ route('posts.create') }}" class="btn btn-success">Create New Post</a>
                    </div>

                    <!-- Logout button at the bottom right -->
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('logout') }}" class="btn btn-danger"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>

                    <!-- Logout form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
