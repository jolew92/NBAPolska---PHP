function processLinks()
{
    var linksList = document.links; // get the document's links
    var contents ="";

    // concatenate each link to contents
    for ( var i = 1; i < linksList.length/2-1; ++i )
    {
        var currentLink = linksList.item(i);
        if(i==1)
            contents += "<a href='" + currentLink.href + "'>" + currentLink.innerHTML+"</a>";
        else
            contents += " | <a href='" + currentLink.href + "'>" + currentLink.innerHTML+"</a>";
    } // end for

    //contents += "</ul>";
    document.getElementById( "footer" ).innerHTML = contents;
} // end function processLinks

window.addEventListener( "load", processLinks, false );