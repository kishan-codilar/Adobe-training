// function myFunction() {
//    var input1 = parseInt(document.getElementById("feild1").value);
//    var input2 = parseInt(document.getElementById("feild2").value); 
//    var result = input1+input2;
// //    console.log(result);
//    document.getElementById("feild3").innerHTML = result;

//   } 

//jquerry
$(document).ready(function(){  
    $("#btn").on("click", function(){
        var input1 = parseInt(document.getElementById("feild1").value);
        var input2 = parseInt(document.getElementById("feild2").value); 
        var result = input1+input2;
        console.log(result);
        document.getElementById("feild3").innerHTML = result;       
    });
});

