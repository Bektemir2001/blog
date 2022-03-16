@extends('user.layouts.main')
@section('content')
<div class="row col-12">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
        <div class="inner">
            <h3>10</h3>

            <p>Comment</p>
        </div>
        <div class="icon">
            <i class="fas fa-comments"></i>         
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
        <div class="inner">
            <h3>10</h3>

            <p>Likes</p>
        </div>
        <div class="icon">
            <i class="fas fa-heart"></i>         
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection