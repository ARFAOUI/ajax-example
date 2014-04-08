<?PHP

?>

<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>
     
    function Callphp() {

       $("#answerDiv").html('<img src="ajax-loader.gif">'); 

        var request = $.ajax({
            url: "request.php",
            type: "GET",            
            dataType: "html"
        });
 
        request.done(function(msg) {
            $("#answerDiv").html(msg);          
        });
 
        request.fail(function(jqXHR, textStatus) {
           $("#answerDiv").html('Failed !'); ;
        });
    }
</script>

</head>
<body>

<div id="tutorialDiv"><h5>Display Content from PHP</h5></div>
<div id="answerDiv"></div>
<button type="button" onclick="Callphp()">Call PHP</button>

</body>
</html>