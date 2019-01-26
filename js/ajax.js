$(document).ready(function (e) {
    $('#form').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var success_post;
        $.ajax({
            type:'POST',
            url: '../class/post_send.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $("#form").hide(500);
                $("#message").html(data);
                $("#success_post").html('<a href="../dashboard/post.php"><button type="button" class="btn">ارسال پست جدید</button></a>');
            },
            error: function(data){
                alert(data);
            }
        });
    }));

});
