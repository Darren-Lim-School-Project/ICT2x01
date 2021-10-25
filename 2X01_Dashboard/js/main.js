/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
const ID_POPUP = "id_popup";

$(document).ready(function()
{
    registerEventHandlers();
    activateMenu();
});

function registerEventHandlers()
{
    var thumbnails = document.getElementsByClassName("img-thumbnail");
    if (thumbnails !== null)
    {
        for (var i = 0; i < thumbnails.length; i++)
        {
            var thumbnail = thumbnails[i];
            thumbnail.addEventListener("click", togglePopup);
        }
    }
    
    else
    {
        console.log("No thumbnail images found!");
    }
    
    var over = document.getElementsByClassName("img-mouseover");
    if (over !== null)
    {
        for (var i = 0; i < over.length; i++)
        {
            var overnew = over[i];
            overnew.addEventListener("mouseover", togglePopup);
        }
    }
    
    else
    {
        console.log("No thumbnail images found!");
    }
}

function registerEventHandlers2()
{
    $(".img-thumbnail").click(togglePopup);
}

function togglePopup(e)
{
    var popup = document.getElementById(ID_POPUP);
    
    if (popup == null)
    {
        popup = document.createElement("span");
        popup.id = ID_POPUP;
        popup.setAttribute("class", "img-popup");
        
        var thumbnail = e.target;
        var small_image = thumbnail.src;
        var big_image = small_image.replace("_small", "_large");
        
        popup.innerHTML ="<img src=" + big_image + "><button class='closepop'>&times;</button>";
        thumbnail.insertAdjacentElement("afterend", popup);
        
        $('.closepop').click(closepopup);
    }
    else
    {
        $("#" + ID_POPUP).remove();
    }
}

function closepopup()
{
            $("#" + ID_POPUP).remove();
}

/* * This function toggles the nav menu active/inactive status as 
 * * different pages are selected. It should be called from $(document).ready() 
 * * or whenever the page loads. */  
function activateMenu()
{     
    var current_page_URL = location.href;    
    $(".navbar-nav a").each(function()    
    {        
        var target_URL = $(this).prop("href");        
        if (target_URL === current_page_URL)        
        {            
            $('nav a').parents('li, ul').removeClass('active');            
            $(this).parent('li').addClass('active');            
            return false;        
        }    
    }
   ); 
}