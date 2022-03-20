
<?php
$title= "MyCsCode Login";
$slogan ="Learn Coding and Web Development";
define('ROOT_DIR', realpath(__DIR__.'/..'));
include ROOT_DIR."/beta/header_home.php";   // Include the header
?>

<div style="padding-top:40px;;font-size:25px">

<article style="background-color:#f1f1f1;padding-left:16px;font-size:20px;">
    <h1 style="text-align:center;">Online HTML Editor</h1>
    <center><b>Input Your Code here:</b></center>
    <form name="myForm" onsubmit="return output()" style="display:block;">
    <center><textarea rows="20" cols="30" name="editor" id="editor" style="margin:0px;font-size:15px;font-family:verdana; color:red;">
<!DOCTYPE html>
<html>
    <head>
    <title>
        My First Page
    </title>
    <style>
        //write internal css here
    </style>
    </head>
    <body>
        //write your tag from here
        
        
    </body>
</html>
</textarea></center><br>

<center><input type="submit" value="Run"></center>
</form>
<hr>
<p><u><b>Instructions:</b></u></p>
<ul>
<li>This is an <b>Online HTML Web Development Editor</b> designed by <span style="color:red;font-family:courier;">MYCSCODE</span>.</li>
<li>This Online HTML web development tool is made for learning purpose only. Do not use this online editor for web development or making website.</li>
<li>You can add your own <b>title</b> in <b>head</b> tag of the html document(i.e My First Page).</li>
<li>You can add your <b>css</b> styling in between the <b>style</b> tag, which is inside the head tag of the above html document.(i.e color:red;) </li>
<li>You can add your <b>element tags</b> inside the body tag. Here you can practice what happen when you use different tags and how your written html document looks in the web browser.</li>
<li><b>This HTML Tool Editor can support every web development language.</b> You have to define everything before using it i.e if you are using php in this editor you have to define it in their standard tag i.e<code style="color:dodgerblue;">(&lt;?php&gt;)</code></li>
<li>Your Browser must support javascript for smooth functiong of this Tool editor.</li>
<li>Please note that this html editor works best in google chrome,internet expolrer. Incase you are using different web browser and this online editor doesn't work for you then, Inconvenience is deeply regretted.</li>

</ul>



</article>
<script>
    function output(){
       var x= document.myForm.editor.value;
    document.write(x);
    }
</script>


   
</div>
<?php
include "footer.php";                 // Include the footer
?>