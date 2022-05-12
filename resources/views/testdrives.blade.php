@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="d-flex justify-content-between align-items-center">Car Name <a class="btn btn-white btn-default" href="/favs"><i class="fa fa-heart-o" style="color:red;"></i></a></h5>
                    </div>
                    <div class="card-body">
                        <img src="https://via.placeholder.com/350x200" alt="" class="img-fluid" />
                    </div>
                    <div class="card-footer">
                        <p>Rs. 25000/-</p>
                        <p>Brief Description</p>
                        <p>Date : </p>
                        <p>Time : </p>
                        <p>Calculated EMIs:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
