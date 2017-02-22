$(document).ready(function() {

    $('#url').keydown(function (e){
        if(e.keyCode == 13){
            var url;
            url=$("#url").val();
            thumbSize=$("#thumbSize").val();
            getThumb(url, thumbSize);
        }
    });

    $("#get").click(function(){
        var ad;
        url=$("#url").val();
        thumbSize=$("#thumbSize").val();
        getThumb(url, thumbSize);
    });

    function getThumb(url, thumbSize)
    {
        $(".result").html("<img src='loader.gif'>");
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: {url:url, thumbSize:thumbSize},
            success: function(result){
                $(".result").html(result);
            }
        });
    }
});