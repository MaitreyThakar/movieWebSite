let username = document.getElementById("name");
let email =  document.getElementById("email");

function validateform(){
    let isValid = true
            if(username.value == ""){
                    document.getElementById("usererror").innerHTML = "*PLEASE ENTER THE NAME*";
                    isValid = false
            }
            else if(username.value.length < 3   ){
                document.getElementById("usererror").innerHTML  = "*USER NAME REQUIRE MIN 3 CHAR*";
                isValid = false
            }
            else{
                document.getElementById("usererror").innerHTML  = "";
                isValid = true
            }

            if(email.value == ""){
                document.getElementById("emailerror").innerHTML = "*PLEASE ENTER THE EMAIL*";
                isValid = false
            }
            else{
                document.getElementById("emailerror").innerHTML  = "";
                isValid = true
            }


            if(phone.value == ""){
                document.getElementById("phoneerror").innerHTML = "*PLEASE ENTER THE PHONE*";
                isValid = false
            }
            else{
                document.getElementById("phoneerror").innerHTML  = "";
                isValid = true
            }

            if(message.value == ""){
                document.getElementById("messageerror").innerHTML = "*PLEASE ENTER THE MESSAGE*";
                isValid = false
            }
            else{
                document.getElementById("messageerror").innerHTML  = "";
                isValid = true
            }
            
            if(isValid){
                alert('Name: '+username.value+'\nEmail: '+email.value +'\nPhone: '+phone.value +'\nmessage: '+message.value)
            }

            return false;
}