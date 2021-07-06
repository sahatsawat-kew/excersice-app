@extends('layouts.layout')

@section('content')
               <div class="container">
                    <h1 class="text-white "><div class="text-white ">Sport Timer <span id="time">00:00</span> minutes!</div></h1>
                    <br>
                    
                    <div class="row">
                        <div class="col">                          
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class=" col-8 text-center">
                                            <img id="example" src="/img/ready.png"  height="400px"/>
                                        </div>
                                        <div class=" col-1"></div>
                                        <div class = "col-3 vertical-center" >
                                            <div clss="row">
                                                <label class="form-label">Time (minutes)</label>
                                                <input type="text" class="form-control" id="insertTime" placeholder="minutes" value="0">
                                                <br>
                                                <button class="btn btn-success" style="float: center;" onclick="startTimer()">Start</button>
                                            </div>
                                            <br>
                                            <div class="text-black row">
                                                <p id="countdown">CountDown Time</p> <span id="time2" class="mx-1">00:00</span> seconds!
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script>
    const array = [1,2,3,4,5,6,7];
    var rest = 20 ;
    var workout = 45;
    var random = getRandomItem(array);
    var count = 0;
    var c = 1 ;
    
    

    function startTimer() {
        
        const button = document.querySelector('button');
        button.disabled = true;
        var disabled = document.getElementById("insertTime").disabled;
        if (disabled) {
            document.getElementById("insertTime").disabled = false;
        }
        else {
            document.getElementById("insertTime").disabled = true;
        }
        
        displayGIF(random);
        

    }

    
    function getRandomItem(arr) {
        
        // get random index value
        const randomIndex = Math.floor(Math.random() * arr.length);
        // get random item
        const item = arr[randomIndex];
        return item;
    }    

    function displayGIF(random){
        setTimeout(function () {
            if(random == 1){
                document.getElementById("example").src = "/img/15 High Knee.gif";
            }else if(random == 2){
                document.getElementById("example").src = "/img/14 jumping jack.gif";
            }else if(random == 3){
                document.getElementById("example").src = "/img/01 lunge jump.gif";
            }else if(random == 4){
                document.getElementById("example").src = "/img/10 mountain climber.gif";
            }else if(random == 5){
                document.getElementById("example").src = "/img/07 push up burpee.gif";
            }else if(random == 6){
                document.getElementById("example").src = "/img/11 jump squat for touch.gif";
            }else if(random == 7){
                document.getElementById("example").src = "/img/02 star plank.gif";
            }
            console.log("Finish Await!!");
            timeInsert();
         });
    }
    
    function readyTime(){
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        
        return display.textContent = minutes + ':' + seconds;
    
    }

    // startTimer(fiveMinutes, display);
    function timeInsert(){
        var duration = 60 *  document.getElementById("insertTime").value ;
        var timer = duration, minutes, seconds;
        setInterval(  function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
            s = count  < 10 ? "0" + count : count ;
            document.getElementById("time2").innerHTML = '00:' + s;

            if(count == workout && c % 2 != 0){
                count = 0;
                console.log("Go to resttttttttttttt")
                document.getElementById("example").src = "/img/pause.png";
                 document.getElementById("countdown").innerHTML = "<p>CountDown Rest </p>";
                c++;
            }else if(count == rest && c % 2 == 0){
                
                    count = 0;
                    console.log("Come on boy!!!!!!")
                    random = getRandomItem(array);
                        if(random == 1){
                            document.getElementById("example").src = "/img/15 High Knee.gif";
                        }else if(random == 2){
                            document.getElementById("example").src = "/img/14 jumping jack.gif";
                        }else if(random == 3){
                            document.getElementById("example").src = "/img/01 lunge jump.gif";
                        }else if(random == 4){
                            document.getElementById("example").src = "/img/10 mountain climber.gif";
                        }else if(random == 5){
                            document.getElementById("example").src = "/img/07 push up burpee.gif";
                        }else if(random == 6){
                            document.getElementById("example").src = "/img/11 jump squat for touch.gif";
                        }else if(random == 7){
                            document.getElementById("example").src = "/img/02 star plank.gif";
                        }
                        document.getElementById("countdown").innerHTML = "<p>CountDown Workout </p>";
                    
                
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


    }    
        
</script>

@endsection