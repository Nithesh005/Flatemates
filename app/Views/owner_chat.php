<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=" <?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/chat.css?version=<?php echo rand(); ?>">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php require_once "after_login_header.php"; ?>
    <!-- <button class="goback-button" onclick="goBack()">Go Back</button> -->
    <div class="jumbotron">
        <div id="framechat">
            <div class="content">
                <div class="header">
                    <i class="fa fa-comments"></i>
                    <p>CHATBOX</p>
                </div>
                <div class="messages">
                    <ul>
                        <li class="sent">
                            <img src="<?php echo base_url("assets/user-img.jpg"); ?>" alt="username" />
                            <p>hi</p>
                        </li>
                        <li class="replies">
                            <img src="<?php echo base_url("assets/user-img.jpg"); ?>" alt="username" />
                            <p>Hello</p>
                        </li>
                    </ul>
                </div>

                <div class="row">

                    <div class="col-lg-0 col-md-0 col-sm-0"> </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 input-group ">
                        <textarea class="Text-Box" id="message" type="text" placeholder="Write your message..." data-emojiable="true"></textarea>


                        <button id="send" class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>

                    </div>
                    <div class="col-lg-0 col-md-0 col-sm-0"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function goBack() {
        history.back();
    }
</script>
<script>
    // $('.messages').animate({ scrollTop: $('.messages ul').height() }, "fast");

    // function newMessage() {

    //     var message = $('.input-group textarea').val();
    //     if ($.trim(message) == '') {
    //         message = $('.input-group .emoji-wysiwyg-editor').html();
    //         if ($.trim(message) == '') {
    //             return false;
    //         }
    //     }
    //     $('<li class="sent"><img src="<?php echo base_url("assets/user-img.jpg"); ?>" alt="username" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
    //     $('.input-group textarea').val('');
    //     $('.input-group .emoji-wysiwyg-editor').html('');

    //     $('.messages').animate({ scrollTop: $('.messages ul').height() }, "fast");
    // };

    // $('.submit').click(function () {
    //     newMessage();
    // });

    // // $('#framechat .content .message-input ').on(function (e) {
    // $('#framechat .content .input-group ').on('keydown', function (e) {
    //     if (e.which == send) {
    //         newMessage();
    //         return false;
    //     }
    // });




    // retrive message
    $.ajax({
        url: "<?php echo base_url('public/index.php/Dbcontrollers/owner_msg_retrive'); ?>",
        method: "POST",
        dataType: "json",
        success: function(res) {
            console.log(res);
            if (res) {
                $.each(res, function(index, message) {
                    var paragraph = $('<li class="sent"><img src="<?php echo base_url("assets/user-img.jpg"); ?>" alt="username" /><p>' + message.msg + '</p></li>');
                    paragraph.addClass('sent');
                    $('.messages ul').append(paragraph);
                    $('.reply_msg').append(paragraph);
                });
                $('#message').val('');
            } else {
                alert("Data didn't reach the recipient.");
            }
        },
        error: function(er) {
            alert(er);
        }
    });













    $('#send').click(function() {
        var message = $('#message').val()
        // var house_no = "<?= session('house_no') ?>";
        alert(message);
        $.ajax({
            url: "<?php echo base_url('public/index.php/Dbcontrollers/owner_msg'); ?>",
            method: "POST",
            dataType: "json",
            data: {
                message: message,
                // house_no:house_no,
            },
            success: function(res) {
                console.log(res);
                if (res) {
                    // var css = document.createElement('style');
                    // css.innerHTML = '.messageStyle { color: blue; font-size: 16px; }';
                    // document.head.appendChild(css);
                    var paragraph = $('<li class="sent"><img src="<?php echo base_url("assets/user-img.jpg"); ?>" alt="username" /><p>' + res + '</p></li>').appendTo($('.messages ul'));
                    paragraph.addClass('sent');
                    $('.reply_msg').append(paragraph);
                    $('#message').val('');
                    // alert(res)
                } else {
                    alert("data didn't reach the recipent")
                }
            },
            error: function(er) {
                alert(res)
            }
        })

    })
</script>

</html>