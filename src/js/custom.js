if (!window.isMobile && ($('.slide.youtube').length > 0)) {

  var tv,
      tag = document.createElement('script'),
      firstScriptTag = document.getElementsByTagName('script')[0],
      video = {'videoId': 'ea-SqaOMipc', 'startSeconds': 0, 'endSeconds': 24.23, 'suggestedQuality': 'hd1080'};
      //another video id to try//-97LGPTZFrI//original//zsT8vLsniAo
      tag.src = 'https://www.youtube.com/player_api';
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      
  function onYouTubePlayerAPIReady(){ $('#background').removeClass('background').wrap('<div class="background"></div>'); tv = new YT.Player('background', { events: { 'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange }, playerVars: { autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3 } }); } function onPlayerReady(el){ tv.loadVideoById(video); tv.mute(); }
  function onPlayerStateChange(e) { if (e.data === 1){ $('.slide .background').addClass('playing'); } else if (e.data === 0){ tv.seekTo(video.startSeconds) } } $(window).on('load ready resize', function(){ vidRescale(); }); 
  function vidRescale(){ var w = $(window).width()+200, h = $(window).height()+300, $elBackground = $('#background'); if (w/h > 16/9){ tv.setSize(w, w/16*9); $elBackground.css({'left': '0px'}); } else { tv.setSize(h/9*16, h); $elBackground.css({'left': -($elBackground.outerWidth()-w)/2}); } }
}


// var rellax = new Rellax('.rellax');
$(document).ready( function() {

// DELETE -- this works but had issues with other pages with the same classes
//  if ( $('body').hasClass('firstSlide') && $('body').hasClass('stage-1') ){
//     $('svg.logo').addClass('noShow');
//   }
  if ( document.querySelector('section.hero') ){
    $('svg.logo').addClass('noShow');
    }
// DELETE -- jquery and click versus scroll
  // var bodyTag = document.getElementsByTagName("BODY")[0];
  // bodyTag.addEventListener("click", function(){
  $(window).scroll(function() {
    // $('svg.logo').removeClass('noShow');
    document.querySelector('svg.logo').classList.remove('noShow');
  });

});