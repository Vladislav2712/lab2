function SaveContent() {
    localStorage.setItem("savedContent", document.getElementById("content").innerHTML);
}

function ShowContent() {
    if("savedContent" in localStorage) {
        document.getElementById("saved_content").innerHTML = decodeURI(localStorage.getItem("savedContent"));
        localStorage.setItem("savedContent", document.getElementById("content").innerHTML);
    }
    else {
        document.getElementById("saved_content").innerHTML = "No saved content";

    }
}