@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Movie</div>

                    <div class="card-body">
                        <form class="form-group" action="/movies" method="post">
                            <label for="title">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control col-sm-10" id="title" type="text" placeholder="Title name here......" name="title">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection