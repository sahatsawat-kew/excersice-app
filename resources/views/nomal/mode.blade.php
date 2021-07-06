@extends('layouts.layout')

@section('content')
               <div class="container">
                    <h1 class="text-white "><div class="text-white ">Timer <span id="time">00:00</span> minutes!</div></h1>
                    <br>
                    
                    <div class="row">
                        <div class="col">                          
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" col-8 text-center">
                                            <img id="example" src="/img/ready.png"  height="500px"/>
                                        </div>
                                        <div class=" col-1"></div>
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
    const array = [1,2,3,4,5,6,7,8];
    var rest = 30 ;
    var workout = 30;
    var random = getRandomItem(array);
    var count = 0;
    var c = 1 ;

    function startTimer() {
        var duration = 60 *  document.getElementById("insertTime").value ;
        var timer = duration, minutes, seconds;
        
        
       
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
            
            if(count == workout){
                count = 0;
                console.log("Go to resttttttttttttt")
                document.getElementById("example").src = "/img/pause.png";
            }else if(count == rest){
                if(c % 2 == 0){
                    count = 0;
                    console.log("Come on boy!!!!!!")
                    random = getRandomItem(array);
                        if(random == 1){
                            document.getElementById("example").src = "/img/15 High Knee.gif";
                        }else if(random == 2){
                            document.getElementById("example").src = "/img/14 jumping jack.gif";
                        }else if(random == 3){
                            document.getElementById("example").src = "/img/13 Jump Squat.gif";
                        }else if(random == 4){
                            document.getElementById("example").src = "/img/10 mountain climber.gif";
                        }else if(random == 5){
                            document.getElementById("example").src = "/img/07 push up burpee.gif";
                        }else if(random == 6){
                            document.getElementById("example").src = "/img/04 Crunch.gif";
                        }else if(random == 7){
                            document.getElementById("example").src = "/img/01 lunge jump.gif";
                        }else if(random == 8){
                            document.getElementById("example").src = "/img/02 star plank.gif";
                        }
                    
                }
                c++;
            }
            // console.log(count);
            count ++;
            
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            
            document.getElementById("time").innerHTML = minutes + ":" + seconds;
            if(--timer < 0){
                location.reload();
                return false;
            }

            
            
        }, 1000);

        

        if(random == 1){
            document.getElementById("example").src = "/img/15 High Knee.gif";
        }else if(random == 2){
             document.getElementById("example").src = "/img/14 jumping jack.gif";
        }else if(random == 3){
            document.getElementById("example").src = "/img/13 Jump Squat.gif";
        }else if(random == 4){
            document.getElementById("example").src = "/img/10 mountain climber.gif";
        }else if(random == 5){
            document.getElementById("example").src = "/img/07 push up burpee.gif";
        }else if(random == 6){
            document.getElementById("example").src = "/img/04 Crunch.gif";
        }else if(random == 7){
            document.getElementById("example").src = "/img/01 lunge jump.gif";
        }else if(random == 8){
            document.getElementById("example").src = "/img/02 star plank.gif";
        }

    }

    
    function getRandomItem(arr) {
        
        // get random index value
        const randomIndex = Math.floor(Math.random() * arr.length);
        // get random item
        const item = arr[randomIndex];
        return item;
    }    

    
    
    

    // startTimer(fiveMinutes, display);
         
        
</script>

@endsection