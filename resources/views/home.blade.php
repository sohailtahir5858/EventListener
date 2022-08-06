@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 col-md-offset-2">
                                @if (Session::has('msg'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ Session::get('msg') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <h1>Create post</h1>

                                <form action="{{ url('/home') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">name <span class="require">*</span></label>
                                        <input type="text" class="form-control" name="name" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea rows="5" class="form-control" name="message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Create
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
