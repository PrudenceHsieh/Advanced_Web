var pageNum = 1;
var indexRequest = new XMLHttpRequest();

indexRequest.onreadystatechange = function() {
	if(this.readyState == 4 && this.status == 200){ 
		//get ajax response and parse JSON
		var videoData = JSON.parse(this.responseText);
		//render data to HTML
		renderHTML(videoData);
	}

}

//request to server
indexRequest.open("GET", "indexVideo_ajax_response.php"+"?page="+String(pageNum), true);
indexRequest.send();
//pageNum += 1;

function renderHTML(videoData) {
	var videoContent = document.getElementById("videopart");
	videoContent.insertAdjacentHTML("beforeEnd", videoData);
}