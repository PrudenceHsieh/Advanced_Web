  
var my = new Object();
// loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // creates an <iframe> (and YouTube player)
  // after the API code downloads.
  var player;
  var active_sub = 0;


/*get subtitle from voicetube*/
/*
$(document).ready(function () {
    $.ajax({
        dataType: 'jsonp',
        url: 'https://cdn.voicetube.com/assets/captions/63259_zh_tw.js'}).always(
            function(){my.captions=captions;
            console.log(my.captions);
    });
});*/

$(document).ready(function () {
	$.ajax({
        dataType: 'jsonp',
        url: 'https://rawgit.com/LivenPan/Web_HW/master/video_1.js'}).always(
            function(){
            	my.captions=captions;
            	//console.log(my.captions.en[1]["text"]);
            	var cols = ["id", "caption_id", "seq", "text", "translate_comment", "start", "dur", "is_scores", "created_at", "updated_at"];
    			for (var i = 0; i < my.captions.en.length; i++) {
    				$('#subtitle').append('<a href="#" class="list-group-item" id="subtitleListBtn'+i+'" data-seek="'+ my.captions.en[i][cols[5]]+ '">' + my.captions.en[i][cols[3]]+'</a>');

  				}
    });
  	
});


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
    videoId: 'paVXPXoyDdo',
    height: '390',
    width: '640',
    playerVars: {
        autoplay: 0,        // 讀取時自動播放影片
        controls: 1,        // 在播放器顯示暫停／播放按鈕
        showinfo: 0,        // 影片標題顯示
        modestbranding: 0,  // YouTube Logo顯示
        loop: 0,            // 影片循環播放
        fs: 0,              // 全螢幕按鈕顯示
        cc_load_policty: 0, // 字幕顯示
        iv_load_policy: 3,  // 影片註解顯示
        autohide: 0         // 當播放影片時隱藏影片控制列
    },
    events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
    }
  });
  }


  //check字幕的button id元素添加一个事件addEventListener
/*
  function subtitleListBtnEvent1() {
  	var cols = ["id", "caption_id", "seq", "text", "translate_comment", "start", "dur", "is_scores", "created_at", "updated_at"];
    var subtitleStartTime1 = my.captions.en[0][cols[5]];
    var subtitleDurationTime1 = my.captions.en[0][cols[6]];

    layer.seekTo(subtitleStartTime1, true);
    setTimeout(function(){ 
      player.stopVideo();
      },subtitleDurationTime1
    );
  }

  function subtitleListBtnEvent2() {
  	var cols = ["id", "caption_id", "seq", "text", "translate_comment", "start", "dur", "is_scores", "created_at", "updated_at"];
    var subtitleStartTime2 = my.captions.en[1][cols[5]];
    var subtitleDurationTime2 = my.captions.en[1][cols[6]];

    player.seekTo(subtitleStartTime2, true);
    setTimeout(function(){ 
      player.stopVideo();
      },subtitleDurationTime2
    );
  }

  function subtitleListBtnEvent3() {
  	var cols = ["id", "caption_id", "seq", "text", "translate_comment", "start", "dur", "is_scores", "created_at", "updated_at"];
    var subtitleStartTime3 = my.captions.en[2][cols[5]];
    var subtitleDurationTime3 = my.captions.en[2][cols[6]];

    player.seekTo(subtitleStartTime3, true);
    setTimeout(function(){ 
      player.stopVideo();
      },subtitleDurationTime3
    );
  }
*/
  // The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    

  }

  function onPlayerStateChange(event) {
      if (event.data ==1) {

      }

    }
  

  $(function() {
    
    $(document).on('click', '#subtitleListBtn0', function() {

    	document.getElementById('subtitleListBtn1').style.backgroundColor="#FFFFFF";
    	document.getElementById('subtitleListBtn2').style.backgroundColor="#FFFFFF";
        var property = document.getElementById('subtitleListBtn0');
        property.style.backgroundColor = "#FFF0BA";

        player.seekTo($(this).data('seek'), true);
        var cols = ["id", "caption_id", "seq", "text", "translate_comment", "start", "dur", "is_scores", "created_at", "updated_at"];
        var endTime = my.captions.en[0][cols[6]]*1000+1100;
        if(player.getPlayerState() != 1){
        	player.playVideo();
        	setTimeout(function(){
    			player.pauseVideo();
    			property.style.backgroundColor = "#FFFFFF";
			},endTime);

    	}

    });
});


  $(function() {
    
    $(document).on('click', '#subtitleListBtn1', function() {


    	document.getElementById('subtitleListBtn0').style.backgroundColor="#FFFFFF";
    	document.getElementById('subtitleListBtn2').style.backgroundColor="#FFFFFF";

    	var property = document.getElementById('subtitleListBtn1');
        property.style.backgroundColor = "#FFF0BA";

        player.seekTo($(this).data('seek'), true);
        var cols = ["id", "caption_id", "seq", "text", "translate_comment", "start", "dur", "is_scores", "created_at", "updated_at"];
        var endTime = my.captions.en[1][cols[6]]*1000+1000;
        if(player.getPlayerState() != 1){
        	player.playVideo();
        	setTimeout(function(){ 
    			player.pauseVideo();
    			property.style.backgroundColor = "#FFFFFF";
			},endTime);
    	}
    });
});

  $(function() {
    
    $(document).on('click', '#subtitleListBtn2', function() {

    	document.getElementById('subtitleListBtn0').style.backgroundColor="#FFFFFF";
    	document.getElementById('subtitleListBtn1').style.backgroundColor="#FFFFFF";

    	var property = document.getElementById('subtitleListBtn2');
        property.style.backgroundColor = "#FFF0BA";

        player.seekTo($(this).data('seek'), true);
        var cols = ["id", "caption_id", "seq", "text", "translate_comment", "start", "dur", "is_scores", "created_at", "updated_at"];
        var endTime = my.captions.en[2][cols[6]]*1000+1400;
        if(player.getPlayerState() != 1){
        	player.playVideo();
        	setTimeout(function(){ 
    			player.pauseVideo();
    			property.style.backgroundColor = "#FFFFFF";
			},endTime);
    	}
    });
});




