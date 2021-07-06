@extends('layouts.layout')

@section('content')
               <div class="container">
                    <h1 class="text-white ">Plyometric</h1>
                    <br>
                    <div class="text-white ">Timer <span id="time">00:40</span> seconds!</div>
                    <div class="row">
                        <div class="col">                          
                            <div class="card">
                                <div class="card-body">
                                    
                                    <a class="btn btn-primary" onclick=" startTimer" >Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script>
    var round = 0; 
    function startTimer(duration, display) {
     
        var timer = duration, minutes, seconds;
        setInterval(function () {
            
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;
            
            if (--timer < 0) {
                if(round == 4){
                    timer = 0;
                    console.log('Stop');
                    return;
                }else if(round%2 == 0){
                    timer = 10;
                    console.log('beake = >',round);
                }else{
                    timer = duration;
                    console.log('continue = >',round);
                }
                round ++;
              
            }
             
            
        }, 1000);
        

    }

    window.onclick = function () {
        
        var fiveMinutes = 40 ,
            display = document.querySelector('#time');
            
        startTimer(fiveMinutes, display);
        
    };


</script>

@endsection