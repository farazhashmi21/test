function hello(){
    alert("Hello World.");
}
function getTimeZone(){
    var getTimeZone = document.getElementById("timeZone").value;
    var T2 = "<?php echo getTimeZone(getTimeZone); ?>";
    var d = new Date();
    var userTimeZone = d.getTimezoneOffset();
    if(getTimeZone == userTimeZone){
        var g = document.getElementById("getField");
        g.className = "alert alert-info";
        document.getElementById("getField").innerHTML +="<br/>"+(getTimeZone);
    }
    else{
        var g = document.getElementById("getField");
        g.className = "alert alert-success";
       document.getElementById("getField").innerHTML +="<br/>"+(getTimeZone);
    }
}
