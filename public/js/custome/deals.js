$(document).ready(function() {

    $('[data-toggle="tooltip"]').tooltip();

    $('#clickToCopy100').on('click', function () {

        // Create a "hidden" input
        var aux = document.createElement("input");
        // Assign it the value of the specified element
        aux.setAttribute("value", document.getElementById("clickToCopy100").innerHTML);
        // Append it to the body
        document.body.appendChild(aux);
        // Highlight its content
        aux.select();
        // Copy the highlighted text
        document.execCommand("copy");
        // Remove it from the body
        document.body.removeChild(aux);
        $("#clickToCopy100").notify("Copied", "success");
    });

    $('#clickToCopy200').on('click', function () {

        // Create a "hidden" input
        var aux = document.createElement("input");
        // Assign it the value of the specified element
        aux.setAttribute("value", document.getElementById("clickToCopy200").innerHTML);
        // Append it to the body
        document.body.appendChild(aux);
        // Highlight its content
        aux.select();
        // Copy the highlighted text
        document.execCommand("copy");
        // Remove it from the body
        document.body.removeChild(aux);
        $("#clickToCopy200").notify("Copied", "success");
    });

    $('#clickToCopy300').on('click', function () {

        // Create a "hidden" input
        var aux = document.createElement("input");
        // Assign it the value of the specified element
        aux.setAttribute("value", document.getElementById("clickToCopy300").innerHTML);
        // Append it to the body
        document.body.appendChild(aux);
        // Highlight its content
        aux.select();
        // Copy the highlighted text
        document.execCommand("copy");
        // Remove it from the body
        document.body.removeChild(aux);
        $("#clickToCopy300").notify("Copied", "success");
    });

    $('#clickToCopy400').on('click', function () {

        // Create a "hidden" input
        var aux = document.createElement("input");
        // Assign it the value of the specified element
        aux.setAttribute("value", document.getElementById("clickToCopy400").innerHTML);
        // Append it to the body
        document.body.appendChild(aux);
        // Highlight its content
        aux.select();
        // Copy the highlighted text
        document.execCommand("copy");
        // Remove it from the body
        document.body.removeChild(aux);
        $("#clickToCopy400").notify("Copied", "success");
    });
});