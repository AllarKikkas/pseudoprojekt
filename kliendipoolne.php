<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <script src="http://code.jquery.com/jquery-latest.js"</script>
    <script src="jquery-1.11.3.min.js"></script>
    <meta charset="UTF-8">
    <title> pseudoprojekt </title>
</head>

<body>

<!--Tere maailm nupp-->

<button onclick="myFunction()">Tere Maailm</button>

<script>
    function myFunction() {
        alert("Teated tere maailm");
    }
</script>

<!--ylesanne3-->
<br><br>
<a href="http://www.khk.ee" onclick="alert('Tere Maailm!')">Tere Maailm!</a>

<!--ylesanne4-->
<br><br>

<a href="" onclick="alert('Jääme siia!')">Jääme siia!</a>
<br><br><br>
<!---ylesanne5-->

<!--<img id="kasskoer" onclick="changeImage()" src="meedia/kass.jpg" width="300" height="300">
<script type="text/javascript">
    function changeImage() {
        var image = document.getElementById('kasskoer');
        if (image.src.match("koer")) {
            image.src = "meedia/kass.jpg";
        } else {
            image.src = "meedia/koer.jpg";
        }
    }
</script>
<br><br>
-->
<!--ylesanne6-->


<img id="cat" src="meedia/kass.jpg" width="300" HEIGHT="300" />
<script>
    $(document).ready(function(){
        $('#cat').click(function(){
            $(this).replaceWith('<img src="meedia/koer.JPG">');

        });


    });
</script>

<!--ylesanne7-->
<br><br><br>

<button type="submit" onclick="redButton()">red</button>

<script>
    function redButton() {
        document.body.style.backgroundColor = "red";
    }
</script>

<button type="submit" onclick="greenButton()">green</button>

<script>
    function greenButton() {
        document.body.style.backgroundColor = "green";
    }
</script>

<button type="submit" onclick="blueButton()">blue</button>

<script>
    function blueButton() {
        document.body.style.backgroundColor = "blue";
    }
</script>



</body>
</html>
