@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image"> <img src="https://i.imgur.com/TAzli1U.jpg" id="main_product_image" width="350"> </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side"><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Car Name</h3>
                            <button class="btn btn-white btn-default"><i class="fa fa-heart" style="color
                                :red;"></i></button>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p>Description</p>
                        </div>
                        <h3>Rs. 25000/-</h3>

                        <div class="buttons d-flex flex-row mt-5 gap-3"> <a class="btn btn-outline-dark" href="/calemi">Calculate EMI</a>  <a href="/testdrive">Test Drive</a> </div> <br>
                        <strong>highlights</strong>
                        <p>
                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue
                            sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
