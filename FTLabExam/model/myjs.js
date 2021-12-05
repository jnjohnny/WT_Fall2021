function MyFunc() {
    
   var id=document.getElementById("id").value;
    var nam=document.getElementById("pname").value;
    var maximum=document.getElementById("maximum").value;
    var minimum=document.getElementById("minimum").value;

    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
      }
      else
      {
           document.getElementById("demo").innerHTML = this.status;
      }
    };


    xhttp.open("POST", "/AllTask/FTLabExam/details.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id+" AND pname="+nam+"AND maximum="+maximum+" AND minimum="+minimum);

  }  