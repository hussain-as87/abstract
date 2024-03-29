@extends('layouts.control')
@section('title','Edit Advertise')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Advertise') }}</div>

                    <div class="card-body">
                        <form action="{{ route('control.update', ['advertise' => $advertise]) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PATCH')
                            @include('control.form')
                            <button type="submit" class="btn btn-outline-success">
                                <svg width="60px" height="30px" viewBox="0 0 16 16" class="bi bi-check-circle-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
