function showContent(inputid,inputcheck) {
    element = document.getElementById(inputid);
    check = document.getElementById(inputcheck);
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
};
