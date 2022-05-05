//Variable setup for news page
const newsDiv = document.getElementById("news");
const newsBTN = document.getElementById("newsBTN");
//Variable setup for discography page
const songsDiv = document.getElementById("songs");
const songsBTN = document.getElementById("songsBTN");  
//Variable setup for settings page
const settingsDiv = document.getElementById("settings");
const settingsBTN = document.getElementById("settingsBTN");
//Variable setup for login page
const loginDiv = document.getElementById("login");
const loginBTN = document.getElementById("loginBTN");
//Variable setup for register page
const registerDiv = document.getElementById("register");
const registerBTN = document.getElementById("registerBTN");
//Variable setup for signout page
const signoutBTN = document.getElementById("signoutBTN");
//Variable setup
const privacyDiv = document.getElementById("privacy");
const privacyBTN = document.getElementById("privacyBTN");

onload = function setup()
{
    newsDiv.style.display = "block";
    songsDiv.style.display = "none";
    settingsDiv.style.display = "none";
    loginDiv.style.display = "none";
    registerDiv.style.display = "none";
    privacyDiv.style.display = "none";
}

newsBTN.onclick = function newsChangeFunction()
{
    if(newsDiv.style.display == "none")
    { 
        newsDiv.style.display = "block";
        songsDiv.style.display = "none";
        settingsDiv.style.display = "none";
        loginDiv.style.display = "none";
        registerDiv.style.display = "none";
        privacyDiv.style.display = "none";
    }
}

songsBTN.onclick = function songsChangeFunction()
{
    if(songsDiv.style.display == "none")
    {
        newsDiv.style.display = "none";
        songsDiv.style.display = "block";
        settingsDiv.style.display = "none";
        loginDiv.style.display = "none";
        registerDiv.style.display = "none";
        privacyDiv.style.display = "none";
    }
}

loginBTN.onclick = function loginChangeFunction()
{
    if(loginDiv.style.display == "none")
    {
        newsDiv.style.display = "none";
        songsDiv.style.display = "none";
        settingsDiv.style.display = "none";
        loginDiv.style.display = "block";
        registerDiv.style.display = "none";
        privacyDiv.style.display = "none";
    }
}

registerBTN.onclick = function registerChangeFunction()
{
    if(registerDiv.style.display == "none")
    {
        newsDiv.style.display = "none";
        songsDiv.style.display = "none";
        settingsDiv.style.display = "none";
        loginDiv.style.display = "none";
        registerDiv.style.display = "block";
        privacyDiv.style.display = "none";
    }
}

settingsBTN.onclick = function settingsChangeFunction()
{
    if(settingsDiv.style.display == "none")
    {
        newsDiv.style.display = "none";
        songsDiv.style.display = "none";
        settingsDiv.style.display = "block";
        loginDiv.style.display = "none";
        registerDiv.style.display = "none";
        privacyDiv.style.display = "none";
    }
}

privacyBTN.onclick = function settingsChangeFunction()
{
    if(privacyDiv.style.display == "none")
    {
        newsDiv.style.display = "none";
        songsDiv.style.display = "none";
        settingsDiv.style.display = "none";
        loginDiv.style.display = "none";
        registerDiv.style.display = "none";
        privacyDiv.style.display = "block";
    }
}