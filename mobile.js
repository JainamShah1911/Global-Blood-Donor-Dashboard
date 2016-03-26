<script>
 
                document.getElementById("myform").onsubmit =function()
                {
                 var pattern = /^([+0-9]{1,3})?([0-9]{10,11})$/i;
                 var text = document.getElementById("mobi");
                 if(!pattern.test(text.value))
                   {
                     alert("not a valid number");
                     text.focus();
                    }
                  else
                   {
                       document.getElementById("myform").action="register.php";
                   }
                };  
            </script>