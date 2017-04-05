/**
 * Created by Quentin on 05/04/2017.
 */
var url = document.URL;

if(url.indexOf("action=") < 1) {
    document.getElementById("blog-link").className = "active";
} else {
    var urlPart = url.split("action=");
    urlPart = urlPart[urlPart.length - 1];

    var elementId = urlPart + "-link";
    document.getElementById(elementId).className = "active";
}
