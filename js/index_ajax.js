var pageNum = 1;
var indexRequest = new XMLHttpRequest();

indexRequest.onreadystatechange = function() {
	if(indexRequest.readyState == 4 && indexRequest.status == "200"){ 
		//get ajax response
		var videoData = indexRequest.responseText;
		renderHTML(videoData);
	}

}

//request to server
indexRequest.open("GET", "index_ajax_response.php"+"?page="+String(pageNum), true);
indexRequest.send();
pageNum += 1;

function renderHTML(videoData) {
	var videoContent = document.getElementById("videopart");
	videoContent.insertAdjacentHTML("beforeEnd", videoData);
}