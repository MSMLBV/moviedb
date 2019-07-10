@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/movies" method="post">
                    <div class="card">
                        <div class="card-header">Movie</div>

                        <div class="card-body">
                            @csrf
                            <div class="row form-group">
                                <label class="col-sm-2 col-form-label-sm" for="title">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control col-sm-10" id="title" type="text"
                                           placeholder="Title name here......" name="title">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-2 col-form-label-sm" for="genre">Genre</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="genre" id="genre">
                                        @foreach($genres as $genre)
                                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-2 col-form-label-sm" for="plot">Plot</label>
                                <div class="col-sm-10">
                                    <textarea rows="8" class="form-control" name="plot" id="plot"
                                              placeholder="Description of the movie......"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-sm-2 col-form-label" for="img">Image</label>
                                <div class="col-sm-10">
                                    <input class="custom-file" type="file" name="img" id="img"/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4">
                                    <input type="button" class="btn btn-link" value="Cancel"/>
                                    <input type="submit" class="btn btn-success" value="Save"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection