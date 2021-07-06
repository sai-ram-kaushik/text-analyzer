function validate(){
    var a = document.getElementById('line').value;
    if (a == ""){
        alert("You have to fill the box");
        return false;
    }
    else{
        console.log("You have successfull translated")
    }
}