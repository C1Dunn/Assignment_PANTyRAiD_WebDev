$(document).ready(function()
{
    //Starting Values
    $("#update").hide();
    $("#delete").hide();
    $("#albums").show();
    $("#eps").hide();

    //User settings buttons
    $("#updateBTN").click(function()
    {
      $("#update").show();
      $("#delete").hide();
    });

    $("#deleteBTN").click(function()
    {
      $("#update").hide();
      $("#delete").show();
    });

    //Songs settings button 
    $("#albumBTN").click(function()
    {
      $("#eps").hide();
      $("#albums").show();
    });

    $("#epsBTN").click(function()
    {
      $("#albums").hide();
      $("#eps").show();
    });

    //If not logged in, don't show settings and signout buttons! and vice versa. 
    
    $.ajax
    (
      {
        url: "sessionVerify.php/",
        cache:false,
        type: "POST",
        success:function(data)
        {
          if(data == 1)
          {
            $('#registerBTN').hide();
            $('#loginBTN').hide();
            $('#adminBTN').show();
          }
          else if (data == 2)
          {
            $('#registerBTN').hide();
            $('#loginBTN').hide();
            $('#adminBTN').hide();
          }
          else
          {
            $('#settingsBTN').hide();
            $('#signoutBTN').hide();
            $('#adminBTN').hide();
          }
        }
      }
    );
  });