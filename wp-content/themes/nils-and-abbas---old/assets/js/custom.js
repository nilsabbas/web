// Geta Quote- get page URL ----
document.addEventListener('DOMContentLoaded', function () {
    var urlField = document.querySelector('input[id="item-url"]'); // Replace "page_url" with the name attribute of your hidden field
    if (urlField) {
        urlField.value = window.location.href;
    }
});

// Geta Quote- get page URL ----


/*
$('#btngetquote').on('click', function () {

    var gaqFName = $('#gaqFName').val();
    var gaqLName = $('#gaqLName').val();
    var gaqEmail = $('#gaqEmail').val();
    var gaqMob = $('#gaqMob').val();
    var validCheck = false;
    if (gaqFName.length() < 1) {
        $('#gaqFName').css("border", "solid 1px red");
        validCheck = true;

    } elseif(gaqLName.length() < 1)
    {
        $('#gaqLName').css("border", "solid 1px red");
        validCheck = true;
    } elseif(gaqEmail.length() < 1)
    {
        $('#gaqEmail').css("border", "solid 1px red");
        validCheck = true;
    } elseif(gaqMob.length() < 1)
    {
        $('#gaqMob').css("border", "solid 1px red");
        validCheck = true;
    }

    if (validCheck == true) {
        alert("Form submiting Error");
        return false;
    }

}); */





