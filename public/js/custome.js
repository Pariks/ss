
$(document).ready(function(){

    var selector = '.nav li';
    $(selector).on('click', function(){

        $(this).css('color', 'red');
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('#clickToCopy').on('click', function () {
        // Create a "hidden" input
        var aux = document.createElement("input");
        // Assign it the value of the specified element
        aux.setAttribute("value", document.getElementById("clickToCopy").innerHTML);
        // Append it to the body
        document.body.appendChild(aux);
        // Highlight its content
        aux.select();
        // Copy the highlighted text
        document.execCommand("copy");
        // Remove it from the body 
        document.body.removeChild(aux);
        $("#clickToCopy").notify("Copied", "success");
    });


});