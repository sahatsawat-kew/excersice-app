@extends('layouts.layout')

@section('content')
               <div class="container">
                   <h1 class="text-white ">Excersice Web</h1>
                    <div class="row">
                        <div class="col-4">                          
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">คนที่ไม่เคยออกกำลังกาย</h5>
                                    {{-- <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                    </p> --}}
                                    <a href="/beginer" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">คนปกติทั่วไป</h5>
                                    {{-- <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                    </p> --}}
                                    <a href="/nomal" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                           <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">นักกีฬา</h5>
                                    {{-- <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                    </p> --}}
                                    
                                    <a href="/sport" class="btn btn-primary" >Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
    



@endsection
