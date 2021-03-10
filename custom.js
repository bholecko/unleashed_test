function processUrlFormSubmit() {
    if (document.getElementById('url').value == '') {
        alert('Invalid entry');

        return false;
    }

    return true;
}

function processUrlViewerFormSubmit() {
    if (document.getElementById('tinyUrl').value == '') {
        alert('Invalid entry');

        return false;
    }

    return true;
}

function processRedirectFormSubmit() {
    if (document.getElementById('tinyUrl').value == '') {
        alert('Invalid entry');

        return false;
    }

    return true;
}