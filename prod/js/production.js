var player = $('audio#player').get(0);
var playlist = $('#playlist');
var current = 0;
var tracks = playlist.find('li a');
var len = tracks.length-1;

// Sets title of player to current track
$('.player-title').html($(tracks[current]).attr('title'));




setInterval(function(){
  //update time bar width based on time passed in audio file
  //get current percentage passed of song
  var percentagePassed = (player.currentTime / player.duration) * 100;
  //update left portion of bar based on percent complete
  $('.player-bar-complete').css('width', percentagePassed + "%");
  //update right portion of bar based on percent complete
  $('.player-bar-left').css('width', 100-percentagePassed + "%");
    console.log(percentagePassed);
}, 500);

$('.player-play-pause').click(function(e){
  e.preventDefault();

  console.log("Test");


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


 
