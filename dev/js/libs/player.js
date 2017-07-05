var player = $('audio#player').get(0);
var playlist = $('#playlist');
var current = 0;
var tracks = playlist.find('li a');
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
    console.log("playing");
    //TODO change icon to pause icon
    player.play();
  }else{
    console.log("paused");
    //TODO change icon to play icon
    player.pause();
  }
});

//TODO fastforward button functionality
$('.player-ff').click(function(e){
  e.preventDefault();
  current += 1;
  if(current > len){
    current = 0;
  }

  var link = $(tracks[current]);
  run(link, player);
});


//TODO rewind button functionality
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
    player.src = link.attr('href');
    par = link.parent();
    par.addClass('active').siblings().removeClass('active');
    player.load();
    player.play();
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
  console.log(percentClick);
  player.currentTime = player.duration * (percentClick/100);
});

//convert seconds to mm:ss format
function songLength(len){
  var seconds = len;
  var minutes = Math.floor(seconds / 60);
  var seconds = seconds - (minutes * 60);

  if (minutes < 10) {minutes = "0"+minutes;}
  if (seconds < 10) {seconds = "0"+seconds;}
  return minutes+':'+seconds;
}
