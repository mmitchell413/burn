String.prototype.toHHMMSS = function () {
    var sec_num = parseInt(this, 10); // don't forget the second param
    var hours   = Math.floor(sec_num / 3600);
    var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
    var seconds = sec_num - (hours * 3600) - (minutes * 60);

    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    return hours+':'+minutes+':'+seconds;
}

String.prototype.songLength = function(){
  console.log("test");
  var seconds = len;
  var minutes = math.floor(seconds / 60);
  var seconds = seconds - (minutes * 60);

  console.log(minutes + " : " + seconds);
  if (minutes < 10) {minutes = "0"+minutes;}
  if (seconds < 10) {seconds = "0"+seconds;}
  return minutes+':'+seconds;
}

//sets player to audio element on page
var player = $('audio#player').get(0);
//gets playlist from DOM of the page
var playlist = $('#playlist');
//sets current track to the first
var current = 0;
//gets all tracks on the selected playlist
var tracks = playlist.find('li a');
//finds length of the playlist
var len = tracks.length-1;

// Sets title of player to current track
$('.player-title').html($(tracks[current]).attr('title'));
tooltipDuration();

setInterval(function(){
  //update time bar width based on time passed in audio file
  //get current percentage passed of song
  var percentagePassed = (player.currentTime / player.duration) * 100;
  //update left portion of bar based on percent complete
  $('.player-bar-complete').css('width', percentagePassed + "%");
  //update right portion of bar based on percent complete
  $('.player-bar-left').css('width', 100-percentagePassed + "%");
  $('.time-pointer').text(songLength(Math.round(player.currentTime)));
  $('.time-total').text(songLength(Math.round(player.duration)));
}, 100);

// functionality for play pause button
$('.player-play-pause').click(function(e){
  e.preventDefault();
  if(player.paused){
    //change icon to pause icon
    $(".player-play-pause").html('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><g id="Layer_2"><rect x="11.5" y="7.2" width="8.3" height="35.7"/><rect x="30.2" y="7.2" width="8.3" height="35.7"/></g>');
    player.play();
  }else{
    //change icon to play icon
    $('.player-play-pause').html('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><polygon id="XMLID_2_" points="11.3,7.2 47,25 11.3,42.8 "/></svg>');
    player.pause();
  }
});

//fastforward button functionality
$('.player-ff').click(function(e){
  e.preventDefault();
  current += 1;
  if(current > len){
    current = 0;
  }

  var link = $(tracks[current]);
  run(link, player);
});


//rewind button functionality
$('.player-rw').click(function(e){
  e.preventDefault();
  current -= 1;
  if(current < 0){
    current = len;
  }

  var link = $(tracks[current]);
  run(link, player);
});

// run new song
function run(link, player){
    var pause = player.paused;
    player.src = link.attr('href');
    par = link.parent();
    par.addClass('active').siblings().removeClass('active');
    player.load();
    if(!pause){
      player.play();
    }
    tooltipDuration();
    // Sets title of player to current track
    $('.player-title').html(link.attr('title'));
}

// update tooltip duration
function tooltipDuration(){
  $('.time-total').text(Math.round(player.duration));
}

// set song to percentage played when clicked
$('.player-bar').click(function(event){
  var offset = $('.player-bar').offset();
  var percentClick = Math.floor((event.clientX-offset.left) / this.offsetWidth * 100);
  player.currentTime = player.duration * (percentClick/100);
});

// TODO update tooltip with hover time
$('.player-bar').on('mousemove', function(event){
    var offset = $('.player-bar').offset();
    var percentHover = ((event.pageX-offset.left) / this.offsetWidth * 100) - 2;
    if(percentHover > 100){
      percentHover = 100;
    }
    $('.handle').css('left', percentHover + "%");
});

// show/hide slider handle on hover
$('.player-bar').hover(
  function(event){
    $('.handle').show();
    $('.tooltip').show();
  },
  function(event){
    $('.handle').hide();
    $('.tooltip').hide();
  }
);

//get volume percentage based on user click location
var mouseDown = false;
$('.player-volume-slider-highlight').mousedown(function(){
  mouseDown = true;
  var offset = $('.player-volume-slider').offset();
  var percentClick = (1 - ((event.pageY-offset.top) / this.offsetHeight)) + .0542;
  changeVolume(percentClick);
})

$('.player-volume-slider-highlight').mousemove(function(){
  if(mouseDown){
    var offset = $('.player-volume-slider').offset();
    var percentClick = (1 - ((event.pageY-offset.top) / this.offsetHeight)) + .0542;
    changeVolume(percentClick);
  }
})

$('.player-volume-slider-highlight').mouseup(function(){
  mouseDown = false;
});

//volume slider change volume
function changeVolume(vol){
  player.volume = vol;
  $('.player-volume-slider-highlight').css('background', 'linear-gradient(0deg, #62a7bd ' + (vol*100) + '%, white '+(vol*100)+'%, white)');
}

//TODO volume slider percentage highlight change

//TODO volume slider mobile show/hide

//convert seconds to mm:ss format
function songLength(len){
  var seconds = len;
  var minutes = Math.floor(seconds / 60);
  var seconds = seconds - (minutes * 60);

  if (minutes < 10) {minutes = "0"+minutes;}
  if (seconds < 10) {seconds = "0"+seconds;}
  return minutes+':'+seconds;
}


 
