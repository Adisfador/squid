<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>


    <div id="post-data">
        @include('data')
    </div>

    <div class="ajax-load" style="=display:none;">afwe</div>
    <script src="{{ asset('/staff/jquery-3.5.1.min.js?ver=1') }}"></script>
    <script>
        function loadMoreData(page){
            $.ajax({
                url:"?page=" + page,
                type:"get",
                beforeSend:function(){
                    $(".ajax-load").show();
                }
            })
            .done(function(data){
                if(data.html == " "){
                    $(".ajax-load").html("no more content");
                    return
                }
                $(".ajax-load").hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR,ajaxOptions,thrownError){
                alert("server not responding kok")
            })
        }
        var page=1;
        $(window).scroll(function(){
            if($(window).scrollTop()+ $(window).height() >= $(document).height()){
               page++;
               loadMoreData(page) ;
            }
        })
    </script>
</body>
</html>
