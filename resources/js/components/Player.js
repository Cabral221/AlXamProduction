import React, { Component } from 'react';
import '../Player.css';

class Player extends Component {
    constructor(){
        super();

        this.state = {
            song_src : 'http://localhost:8000/user/sons/music.mp3',
            is_playing: false,
            progress: 0,
            in_set_progres_mode: false,
        }
        this.is_progress_dirty = false;
        this.registered_events = false;
    }
    togglePlay () {
        this.setState({ is_playing: !this.state.is_playing });
    }
    startSetProgress(evt){
        this.setState({ in_set_progres_mode: true });
        this.setProgress(evt);
        // console.log('call set progress :', this.is_progress_dirty);
    }
    stopSetProgress (evt) {
        this.setState({ in_set_progres_mode: false });
        this.setProgress(evt);
    }
    setProgress(evt) {
        if (this.state.in_set_progres_mode) {
            var progress = (evt.clientX - offsetLeft(this.refs.progress_bar)) / this.refs.progress_bar.clientWidth;
            // console.log('Fonction offsetLeft : ',  offsetLeft(this.refs.progress_bar), this.state.progress);   
            console.log('Player SetProgress : ',  progress);   
            this.setState({ progress: progress });
            this.is_progress_dirty = true;
        }
    }

    render () {
        if(this.refs.player) {
            var player = this.refs.player;
            if(player.currentSrc !== this.state.song_src){
                player.src = this.state.song_src;
            }
            if(player.paused){
                if(this.state.is_playing) {
                    player.play();
                }
            }else if (!this.state.is_playing){
                player.pause();   
            }
            if(this.is_progress_dirty){
                this.is_progress_dirty = false;
                console.log('Player currentTime 1 : ',  (player.duration * this.state.progress));   
                // player.currentTime = (player.duration * this.state.progress);
                var new_time =  (player.duration * this.state.progress)
                console.log('new time : ', new_time);
                // player.oncanplay = function () {
                    player.currentTime = new_time;
                // }
                console.log('Player currentTime 2 : ',  player.currentTime);
                // debugger
            }
            if(!this.registered_events){
                this.registered_events = true;

                player.addEventListener("progress", (evt) => {
                    if(this.is_progress_dirty){
                        this.setState({ progress: player.currentTime / player.duration})
                    }
                });
            }
        }
        
        var playerClassName = {
            "fa": true,
            "fa-play" : !this.state.is_playing,
            "fa-pause" : this.state.is_playing
        };


        return (
            <div className="player">
                <div className="controls">
                    <a><i className="fa fa-chevron-left" aria-hidden="true"></i></a>
                    <a onClick={this.togglePlay.bind(this)}>
                        <i className={classnames(playerClassName)} aria-hidden="true"></i>
                    </a>
                    <a><i className="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
                <div 
                    onMouseDown={this.startSetProgress.bind(this)}
                    onMouseMove={this.setProgress.bind(this)}
                    onMouseLeave={this.stopSetProgress.bind(this)}
                    onMouseUp={this.stopSetProgress.bind(this)}
                    className="progress"
                >
                <div ref="progress_bar" className="bar">
                    <div style={{ width : (this.state.progress * 100) + '%' }}></div>
                </div>
                </div>
                <audio ref="player" autoPlay={this.state.is_playing}>
                    <source src={this.state.song_src} />
                </audio>
            </div>
        );
    }
}

function offsetLeft(el){
    let left = 0;
    while (el && el !== document) {
        left += el.offsetLeft;
        el = el.offsetParent;
    }
    return left;
}

function classnames(obj) {
    var css = [];
    Object.keys(obj).forEach((key) => {
        if(obj[key]){
            css.push(key)
        }
    });
    return css.join(' ');
}

export default Player;
