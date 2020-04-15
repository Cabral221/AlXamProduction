@extends('layouts.app')

@section('style')
    <style>
        #mobile-box {
            width: 360px; 
        }

        .card {
            -webkit-border-radius: 10px;
            border-radius: 10px; 
            padding-bottom: 2rem;
        }

        .card .view {
            -webkit-border-top-left-radius: 10px;
            border-top-left-radius: 10px;
            -webkit-border-top-right-radius: 10px;
            border-top-right-radius: 10px; 
        }

        .card h5 a {
            color: inherit;
            text-decoration: none;
        }
        .card h5 a:hover {
            color: #ed2f30;
        }

        #pButton {
            float: left; 
        }

        #timeline {
            width: 90%;
            height: 2px;
            margin-top: 20px;
            margin-left: 10px;
            float: left;
            -webkit-border-radius: 15px;
            border-radius: 15px;
            background: rgba(0, 0, 0, 0.3); 
        }

        #pButton {
            margin-top: 12px;
            cursor: pointer; 
        }

        #playhead {
            width: 8px;
            height: 8px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            margin-top: -3px;
            background: black;
            cursor: pointer; 
        }
    </style>
@endsection
@section('header')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <h2>Toutes les Réalisations qui vous inspirent !</h2>
            </div>
        </div>
    </div>
@endsection

@section('container')
    <section class="section needed newsLetter">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6">
                    <h4>Contactez nous pour vos idées tel quelles soient</h4>
                    <p>Restez informer de toutes les nouveautés</p>
                </div>
                <div class="col-sm-6">                        
                        <a  href="#" class="btn btn-outline-danger btn-lg mb-2 mr-auto ml-auto">Contactez-nous</a>
                </div>
            </div>
        </div>
    </section>

    <div class="section marketing">
        <div class="container">
            <div class="card-columns">
                <div class="card">
                    <!-- Card image -->
                    <div class="view">
                        <img class="card-img-top" src="https://picsum.photos/500"
                        alt="Card image cap">
                        <a href="https://bachataurban.com/" target="_blank">
                            <div class="mask gradient-card"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-bold"><a href="https://bachataurban.com/" target="_blank">Dj Flam</a></h5>
                        <p class="mb-0">Urban Bachata remix</p>
                        
                        <audio id="music" preload="true">
                            <source src="https://bachataurban.com/download/2/Stefflon%20Don%20-%2016%20Shots%20(%20DJ%20Flam%20-%20Urban%20Bachata%20remix%20).mp3">
                        </audio>
                        <div id="audioplayer">
                            <i id="pButton" class="fas fa-play"></i>
                            <div id="timeline">
                                <div id="playhead"></div>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="card">
                    <!-- Card image -->
                    <div class="view">
                        <img class="card-img-top" src="https://picsum.photos/400"
                        alt="Card image cap">
                        <a href="https://bachataurban.com/" target="_blank">
                            <div class="mask gradient-card"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-bold"><a href="https://bachataurban.com/" target="_blank">Dj Flam</a></h5>
                        <p class="mb-0">Urban Bachata remix</p>
                        
                        <audio id="music" preload="true">
                            <source src="https://bachataurban.com/download/2/Stefflon%20Don%20-%2016%20Shots%20(%20DJ%20Flam%20-%20Urban%20Bachata%20remix%20).mp3">
                        </audio>
                        <div id="audioplayer">
                            <i id="pButton" class="fas fa-play"></i>
                            <div id="timeline">
                                <div id="playhead"></div>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="card">
                    <!-- Card image -->
                    <div class="view">
                        <img class="card-img-top" src="https://picsum.photos/500/500"
                        alt="Card image cap">
                        <a href="https://bachataurban.com/" target="_blank">
                            <div class="mask gradient-card"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-bold"><a href="https://bachataurban.com/" target="_blank">Dj Flam</a></h5>
                        <p class="mb-0">Urban Bachata remix</p>
                        
                        <audio id="music" preload="true">
                            <source src="https://bachataurban.com/download/2/Stefflon%20Don%20-%2016%20Shots%20(%20DJ%20Flam%20-%20Urban%20Bachata%20remix%20).mp3">
                        </audio>
                        <div id="audioplayer">
                            <i id="pButton" class="fas fa-play"></i>
                            <div id="timeline">
                                <div id="playhead"></div>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="card">
                    <!-- Card image -->
                    <div class="view">
                        <img class="card-img-top" src="https://picsum.photos/600"
                        alt="Card image cap">
                        <a href="https://bachataurban.com/" target="_blank">
                            <div class="mask gradient-card"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-bold"><a href="https://bachataurban.com/" target="_blank">Dj Flam</a></h5>
                        <p class="mb-0">Urban Bachata remix</p>
                        
                        <audio id="music" preload="true">
                            <source src="https://bachataurban.com/download/2/Stefflon%20Don%20-%2016%20Shots%20(%20DJ%20Flam%20-%20Urban%20Bachata%20remix%20).mp3">
                        </audio>
                        <div id="audioplayer">
                            <i id="pButton" class="fas fa-play"></i>
                            <div id="timeline">
                                <div id="playhead"></div>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="card">
                    <!-- Card image -->
                    <div class="view">
                        <img class="card-img-top" src="https://picsum.photos/200"
                        alt="Card image cap">
                        <a href="https://bachataurban.com/" target="_blank">
                            <div class="mask gradient-card"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-bold"><a href="https://bachataurban.com/" target="_blank">Dj Flam</a></h5>
                        <p class="mb-0">Urban Bachata remix</p>
                        
                        <audio id="music" preload="true">
                            <source src="https://bachataurban.com/download/2/Stefflon%20Don%20-%2016%20Shots%20(%20DJ%20Flam%20-%20Urban%20Bachata%20remix%20).mp3">
                        </audio>
                        <div id="audioplayer">
                            <i id="pButton" class="fas fa-play"></i>
                            <div id="timeline">
                                <div id="playhead"></div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    var music = document.getElementById('music'); // id for audio element
    var duration = music.duration; // Duration of audio clip, calculated here for embedding purposes
    var pButton = document.getElementById('pButton'); // play button
    var playhead = document.getElementById('playhead'); // playhead
    var timeline = document.getElementById('timeline'); // timeline

    // timeline width adjusted for playhead
    var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;

    // play button event listenter
    pButton.addEventListener("click", play);

    // timeupdate event listener
    music.addEventListener("timeupdate", timeUpdate, false);

    // makes timeline clickable
    timeline.addEventListener("click", function (event) {
        moveplayhead(event);
        music.currentTime = duration * clickPercent(event);
    }, false);

    // returns click as decimal (.77) of the total timelineWidth
    function clickPercent(event) {
        return (event.clientX - getPosition(timeline)) / timelineWidth;
    }

    // makes playhead draggable
    playhead.addEventListener('mousedown', mouseDown, false);
    window.addEventListener('mouseup', mouseUp, false);

    // Boolean value so that audio position is updated only when the playhead is released
    var onplayhead = false;

    // mouseDown EventListener
    function mouseDown() {
        onplayhead = true;
        window.addEventListener('mousemove', moveplayhead, true);
        music.removeEventListener('timeupdate', timeUpdate, false);
    }

    // mouseUp EventListener
    // getting input from all mouse clicks
    function mouseUp(event) {
        if (onplayhead == true) {
            moveplayhead(event);
            window.removeEventListener('mousemove', moveplayhead, true);
            // change current time
            music.currentTime = duration * clickPercent(event);
            music.addEventListener('timeupdate', timeUpdate, false);
        }
        onplayhead = false;
    }
    // mousemove EventListener
    // Moves playhead as user drags
    function moveplayhead(event) {
        var newMargLeft = event.clientX - getPosition(timeline);

        if (newMargLeft >= 0 && newMargLeft <= timelineWidth) {
            playhead.style.marginLeft = newMargLeft + "px";
        }
        if (newMargLeft < 0) {
            playhead.style.marginLeft = "0px";
        }
        if (newMargLeft > timelineWidth) {
            playhead.style.marginLeft = timelineWidth + "px";
        }
    }

    // timeUpdate
    // Synchronizes playhead position with current point in audio
    function timeUpdate() {
        var playPercent = timelineWidth * (music.currentTime / duration);
        playhead.style.marginLeft = playPercent + "px";
        if (music.currentTime == duration) {
            pButton.className = "";
            pButton.className = "fas fa-play";
        }
    }

    //Play and Pause
    function play() {
        // start music
        if (music.paused) {
            music.play();
            // remove play, add pause
            pButton.className = "";
            pButton.className = "fas fa-pause";
        } else { // pause music
            music.pause();
            // remove pause, add play
            pButton.className = "";
            pButton.className = "fas fa-play";
        }
    }

    // Gets audio file duration
    music.addEventListener("canplaythrough", function () {
        duration = music.duration;
    }, false);

    // getPosition
    // Returns elements left position relative to top-left of viewport
    function getPosition(el) {
        return el.getBoundingClientRect().left;
    }
</script>
@endsection