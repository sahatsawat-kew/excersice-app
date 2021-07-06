@extends('layouts.layout')

@section('content')
               <div class="container">
                    <h1 class="text-white ">Plyometric</h1>
                    <br>
                    <div class="text-white ">Timer <span id="time">00:00</span> minutes!</div>
                    <div class="row">
                        <div class="col">                          
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" col-8">
                                            <img id="example" src="/img/rest.jpg"  width="700px"/>
                                        </div>
                                        <div class = "col-3 vertical-center" >
                                            <div clss="row">
                                                <label class="form-label">Time (minutes)</label>
                                                <input type="text" class="form-control" id="insertTime" placeholder="minutes" value="0">
                                                <br>
                                                <button class="btn btn-success" style="float: center;" onclick="startTimer()">Start</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script>
    var round = 1; 
    
    var display = document.querySelector('#time');
    function startTimer() {
        var duration = 60 * document.getElementById("insertTime").value ;
        var timer = duration, minutes, seconds;

        setInterval(function () {
            
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;
            
            

            if (--timer < 0) {
                if(round == 18){
                    timer = 0;
                    console.log('Stop');
                    return;
                }else if(round%2 == 0){
                    timer = 5;
                    document.getElementById("example").src = "/img/rest.jpg"
                    console.log('beake = >',round);
                }else{
                    timer = duration;
                    console.log('continue = >',round);
                    if(round == 1){
                            document.getElementById("example").src = "https://i.pinimg.com/originals/37/05/ce/3705ce2f8a6e83760831e870a5015f5a.gif"
                    }else if(round == 3){
                            document.getElementById("example").src = "https://i.pinimg.com/originals/66/b7/0d/66b70dd9c15d80da8646b73529bed865.gif"
                    }else if(round == 5){
                             document.getElementById("example").src = "https://i.pinimg.com/originals/95/c2/17/95c217f4ac1278f514c449cb4f321f87.gif"
                    }else if(round == 7){
                             document.getElementById("example").src = "https://i.pinimg.com/originals/cf/e4/07/cfe40769ef2846ed070875ad27c6428c.gif"
                    }else if(round == 9){
                             document.getElementById("example").src = "https://i.pinimg.com/originals/45/15/9a/45159a4b3dd36bae013866d74edf208e.gif"
                    }else if(round == 11){
                             document.getElementById("example").src = "https://i.pinimg.com/originals/bd/e4/c1/bde4c1bd54a8e000fd1261e02d064684.gif"
                    }else if(round == 13){
                             document.getElementById("example").src = "https://i.pinimg.com/originals/38/3d/24/383d24b3efeee95186336a12697a97be.gif"
                    }else if(round == 15){
                             document.getElementById("example").src = "https://i.pinimg.com/originals/52/d5/29/52d529bd9d5a7c11eb31010850ce085b.gif"
                    }else if(round == 17){
                             document.getElementById("example").src = "https://i.pinimg.com/originals/e0/ff/b8/e0ffb87d7f21b531f843cf90c9976db9.gif"
                    }
                }
                round ++;
              
            }

            
            
        }, 1000);
        

    }

    
        
    

    // startTimer(fiveMinutes, display);
         
        
</script>

@endsection