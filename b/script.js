
$(document).ready(function(){
    $("#gomb").click(function(){
        var x=$("#om").val();
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
            {var szemely=JSON.parse(this.responseText);            
            console.log(szemely);
            $('#nev').html(szemely.nev);
            var regBarat=szemely.baratai;
            if (regBarat.length>0){
                // mannageFriends.php
            }

            if (regBarat.length<3){
                $.get("getClassMates.php?om=" + szemely.om, (data, status)=>{
                    $("#add").html(data);
                    
                    $("#add").ready(function(){
                        $("select").change(function(){
                            k = $(this).val()
                            $.post("addFriend.php",{ om: szemely.om,baratOm:k },
                            (data,stat)=>{
                                //$("#test").html(data)
                              alert( data );
                            });
                        })
                    })
                });

            }

           else {
            $("#add").html()
           }
        }
       };
        xhttp.open("GET", "login.php?om="+x, true);
        xhttp.send();
    });
});

log=(s)=>console.log(s);
