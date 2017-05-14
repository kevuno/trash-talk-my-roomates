@extends('layouts.app')

@section('content')
    <!--Form without header-->
    <div class="card">
        <div class="card-block">

            <!--Header-->
            <div class="text-center">   
                <h3><i class="fa fa-hand-stop-o"></i> Tell that motherfucker what's wrong</h3>
                <hr class="mt-2 mb-2">
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{route('complains.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <!--Body-->
                <div class="md-form">
                    <i class="fa fa-trash-o prefix"></i>
                    <input type="text" name="title" id="title" class="form-control">
                    <label for="title">Title</label>
                </div>
                <div class="md-form">
                    <select name="roommate_id" id="roomate_id" class="mdb-select">
                        <option value="" disabled selected>Choose a roomate</option>
                        <option value="all" >Everyone</option>
                        @foreach($roomates as $roomate)
                            <option value="{{$roomate->id}}">{{$roomate->name}}</option>
                        @endforeach
                    </select>
                    <label>Roomate</label>

                </div>
                <br>
                <div class="md-form">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm btn-file">
                            <span>Dank image for proof</span>
                            <input type="file" name="image_path" id="image_path">
                        </div>
                        <div class="file-path-wrapper">
                           <input class="file-path validate" type="text" placeholder="Select an image for evidence">
                        </div>
                        <img id='img-upload'/>
                    </div>
                </div>                
                <br>
                <br>
                <div class="md-form">
                    <i class="fa fa-wheelchair-alt prefix"></i>
                    <textarea type="text" name="description" id="description" class="md-textarea description-textarea"></textarea>
                    <label for="description">Description of what is going on</label>
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-deep-orange" value="Send"> Send </button>
                </div>
            </form>
        </div>
    </div>
    <!--/Form without header-->
@stop