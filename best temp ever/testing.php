<div class="" id="main">


<div class="" id="firstdiv" style="">

    <textarea id="special" name="post" rows="10" cols="80" placeholder="What's on your mind, hammoud?"></textarea>

    <button name="submitMe" id="btn">POSt </button>

</div>

<div class="" id="second">
  shyyyy
</div>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
<script type="text/javascript">
$("#btn").on("click", function(){
$("#firstdiv").fadeOut(500, function() {
  $("#second").fadeIn(500, function() {
  });
});
});

</script>
