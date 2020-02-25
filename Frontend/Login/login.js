function onClickReg()
{
    var txtName = document.getElementById("inputEmail").value;
    var txtPass = document.getElementById("inputPassword").value;
    if(txtName == "")
        alert("Inserire user");
    if(txtPass == "")
        alert("Inserire user");
    JSON.stringify({user: txtName, pass:txtPass})
    ajaxCall(JSON.stringify({user: txtName, pass:txtPass}));
}

function ajaxCall(jsonString)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
      }
    };
    xhttp.open("GET", "Backend\searchUser.php?jsonS="+ jsonString, true);
    xhttp.send();
    console.log(this.responseText);
}