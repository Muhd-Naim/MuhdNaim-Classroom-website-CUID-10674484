<html>

<head></head>
<style>
.questions
{
    width: 1000px;
    margin: auto;    
}
body {
	font-family: Arial;
}

.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 2px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 2px;
    cursor:pointer;
}

ul {
	list-style-type: none;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
}

span.commet-row-label {
	font-style: italic;
}

span.posted-by {
	color: #09F;
}

.comment-info {
	font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}
       *
{
    margin: 0;
    font-family: sans-serif;
}
.banner
{
    width: auto;
    height: auto;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(Study.jpg);
    background-size: cover;
    background-position: center;
    padding: 0px 0px 600px 0px;
}
.navbar
{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo
{
    width: 400px;
    cursor: pointer;
}
.navbar ul li
{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbar ul li a
{
    text-decoration: none;
    color: antiquewhite;
    text-transform: uppercase;
    font-size: 19px;
}
.navbar ul li::after
{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after
{
    width: 100%;
}
.content
{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: bisque;
}
.content h1
{
    font-size: 50px;
    margin-top: 80px;
}
.content p
{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
    font-size: 20px;
}

</style>
<title>Reviews</title>
<script src="jquery-3.2.1.min.js"></script>


<body>
    <div class="banner">
     <div class="navbar">
        <a href="index2.php">
            <img src="classroom%20logo.png" class="logo">
         </a>
        <ul>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="questions.php">Questions</a></li>
            <li><a href="review.php">Reviews</a></li>
            <li><a href="Learning.php">Learning Video</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </div>
    <div class="questions">
    <h1 style="padding: 20; text-align: center; color: white;">Leave a review.</h1>
    <div class="comment-form-container">
        <form id="frm-comment">
            <div class="input-row">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" /> <input class="input-field"
                    type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="input-row">
                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Add a Comment">  </textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Publish" /><div id="comment-message">Comments Added Successfully!</div>
            </div>

        </form>
    </div>
    <div id="output"></div>
    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add2.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
                $.post("comment-list2.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
        </div>
    </div>
</body>

</html>