function init(s) {

   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "init.php?s=" + s, true);
        xmlhttp.send();
        
     alert("пользователь не видел ни одного сообщения",'<? echo $num; ?>');
     /*location.reload(true);
       */
       /*alert(window.vfrominitphp);
         */
    }