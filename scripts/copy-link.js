document.addEventListener("DOMContentLoaded", function() {
    let copyLinkButtons = document.querySelectorAll('.js-copy-link');

    copyLinkButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            let link = this.getAttribute('data-link');
            copyToClipboard(link);
            alert("Link copied to clipboard: " + link);
        });
    });

    function copyToClipboard(text) {
        let textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
    }
});
