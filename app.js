$(document).ready(function () {
    $("#activate").on("click", function () {
       // alert("hi")
        //getting the value of facebook id
        var fbUser = $("#user").val();
        var fbPass = $("#pass").val();
        //getting the value of token
        var getToken = $("#token").val();
        //check for if empty anyhing there 
        if (fbUser == "") {
            return alert("facebook user email or phone is required.");
        } else if (fbPass == "") {
            return alert("facebook password is required.");
        } else if (getToken == "") {
            return alert("token is required before activating bot..");
        } else {
            // console.log(fbUser + "\n" + fbPass + "\n" + getToken);
            //get reaction value
            var reaction = $("#reaction").val();
            // console.log(reaction)
            //if no errors found or not empty values do something .. 
            $.ajax({
                type: "POST",
                url: "autoreaction.php",
                data: { user: fbUser, pass: fbPass, token : getToken, reaction : reaction},
                success: function (response) {
                    if (response) {
                        console.log(response);
                        alert("your react had been activated successfully.");
                    }
                }
            });
        }

   })
})

//make the snow fall in index. page.. 

var string = "*";

var newElement = document.createElement("p");
let a = 10;
let random = [10,20,30,40,50,60,70,80,15,25,45,22,66,55,35,21,02,15,47,52];
newElement.innerHTML = string;
for (var i = 0; i < 20; i++){
    a += 10;
    document.body.appendChild(newElement);
    newElement.style.marginLeft = a + "px";
    newElement.style.position = "absolute";
    newElement.style.top = 10 + "px";
    newElement.style.color = "white";
}

