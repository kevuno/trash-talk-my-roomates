@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col col-lg-6">
            <a href="/complains/create">
                <div class="chip">          
                    <i class="fa fa-plus prefix"></i>
                    Add Complain
                </div>
            </a>
        </div>  
    </div>
    @if (!empty($data['success']))
        <div class="alert alert-success">
            {{$success}}
        </div>
    @endif
    @foreach($complains as $complain)

    <!--Card-->
    <div class="row justify-content-md-center">
        <div class="col col-lg-6">
            <div class="card ovf-hidden">
                @if (!empty($complain->image_path))
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="img/complain_img/{{$complain->image_path}}" class="img-fluid" alt="">
                        <a>
                            <div class="mask waves-effect waves-light journal_activator"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                @endif

                <!--Card content-->
                <div class="card-block">
                    <!--Social shares button-->
                    <a class="activator"><i class="fa fa-share-alt"></i></a>
                    <!--Title-->
                    <h3 class="card-title">{{$complain->roomate}}</h3>
                    <h4 class="card-title">{{$complain->title}}</h4>

                    <hr>
                    <!--Text-->
                    <p class="card-text">Click on the read more, to learn what a shitty roomate you are</p>
                    <a class="link-text"><h5 class="journal_activator">Read more <i class="fa fa-chevron-right journal_activator"></i></h5></a>
                </div>
                <!--/.Card content-->
                <!--Card reveal-->
                <div class="card-reveal">
                    <!--Content-->
                    <div class="content text-center">
                        <h4 class="card-title">Complain description <i class="fa fa-close"></i></h4>
                        <hr>
                        <p class="comment-text">
                            {{$complain->description}}
                        </p>
                    </div>
                    <!--/.Content-->
                </div>
                <!--/.Card reveal-->
            </div>
            <hr>
        </div>
    </div>
    <!--/.Card-->
    @endforeach
@stop
