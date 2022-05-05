function readFile() 
{
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        document.getElementById("text").innerText = this.responseText;
    }
    xhttp.open("GET", "admin.txt", true);
    xhttp.send();
}