<?php

$contentFile = "content.json";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  try
  {
  $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_URL);

    # Load content from JSON file
    if(is_readable($contentFile))  
      $videoData = file_get_contents($contentFile);
    else                           
      throw new Exception("Cannot load content!");

  }
  catch(Exception $e)
  {
    header('HTTP/1.1 400 Bad request'); 
    echo $e->getMessage();
  }

  # decode JSON file 
  $JSONcontents = json_decode($videoData);

}


  
  for($i=0; $i<8; $i++) { 
    $videoContent = $JSONcontents[$i];

echo <<<STRING
       <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="thumbnail">
              <div class="image">
                <a href="$videoContent->a_href"><img src="$videoContent->img_src" alt="$videoContent->img_alt"></a>
                <div class="up">
                  <div class="btn btn-default btn-xs" id="likeit5" role="button"
                          title="我喜歡" onclick="setColor('likeit5', '#101010')";>
                            <div class="text">我喜歡</div>
                  </div>
                </div>
            </div>
                <div class="caption">
                    <a href="$videoContent->a_href" title="$videoContent->title"><h5>$videoContent->h5</h5></a>
                    <p>
                      $videoContent->views
                    </p>
                    <p>
                        <a href="#" class="btn btn-success btn-xs" role="button"
                          title="中級">
                            $videoContent->level
                        </a> 
                        <a href="#" class="btn btn-info btn-xs" role="button"
                        title="有中文字幕">
                            $videoContent->chinese_captions
                        </a>
                        <a href="#" class="btn btn-warning btn-xs" role="button"
                        title="美國腔">
                            $videoContent->pronounciation
                        </a>
                    </p>
                </div>
            </div>
      </div>
    </div>


STRING;

}
?>