

function myFunction(){
    // window.location = "pricing.html"
    let inputVal = document.getElementById("inputVal").value;
    
    if(inputVal==="classic 350")
    {
        window.location = "pricing.html";
    }
    else if(inputVal==="activa")
    {
        window.location = "pricing1.html";
    }
    else
    {
        alert("result not found");
    }
}
