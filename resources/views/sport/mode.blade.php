@extends('layouts.layout')

@section('content')
               <div class="container">
                    <h1 class="text-white ">Sport Level</h1>
                    <br>
                    <div class="row">
                        <div class="col-4">                          
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">plyometric</h5>
                                    {{-- <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                    </p> --}}
                                    <a href="/mode" class="btn btn-primary" >Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">HIIT</h5>
                                    {{-- <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                    </p> --}}
                                    <a href="#!" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">T25</h5>
                                    {{-- <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                    </p> --}}
                                    <a href="#!" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
@endsection