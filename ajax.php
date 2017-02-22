<?php
if (isset($_POST["url"]))
{
    $videoURL=strip_tags($_POST["url"]);
    $thumbnailSize=strip_tags($_POST["thumbSize"]);

    if (preg_match('%(?:youtube(?:-nocookie)?.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu.be/)([^"&?/ ]{11})%i', $videoURL, $id))
    {
        $videoId = $id[1];
        echo '<br><div class="panel panel-success">
        <div class="panel-heading text-center">
            <b><i class="fa fa-check" aria-hidden="true"></i>  Thumbnail has been generated</b>
        </div>
        <div class="panel-body">
            <center>
                <a href="download.php?file=http://img.youtube.com/vi/'.$videoId.'/'.$thumbnailSize.'.jpg"><img src="http://img.youtube.com/vi/'.$videoId.'/'.$thumbnailSize.'.jpg" class="img-responsive" /></a>  
            </center>
        </div>
        <div class="panel-footer"> 
            <a href="download.php?file=http://img.youtube.com/vi/'.$videoId.'/'.$thumbnailSize.'.jpg" class="text-center btn btn-success btn-block btn-lg"><i class="fa fa-download" aria-hidden="true"></i> Download this thumbnail</a> 
        </div>
    </div><br><br>';
    } 
    else 
    {
    	return false;
    }
}
?>
    