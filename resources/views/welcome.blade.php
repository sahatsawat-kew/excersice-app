@extends('layouts.layout')

@section('content')
               <div class="container">
                   <h1 class="text-white ">Excersice Web</h1>
                    <div class="row">
                        <div class="col-4">                          
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">คนที่ไม่เคยออกกำลังกาย(Beginner)</h5>
                                    <p class="card-text">
                                    ออกกำลังกาย 15 วินาที พัก 45 วินาที
                                    </p>
                                    <a href="/beginer" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">คนปกติทั่วไป(Normal)</h5>
                                    <p class="card-text">
                                    ออกกำลังกาย 30 วินาที พัก 30 วินาที
                                    </p>
                                    <a href="/nomal" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                           <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">นักกีฬา(Sport)</h5>
                                    <p class="card-text">
                                    ออกกำลังกาย 45 วินาที พัก 20 วินาที
                                    </p>
                                    
                                    <a href="/sport" class="btn btn-primary" >Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
    



@endsection
