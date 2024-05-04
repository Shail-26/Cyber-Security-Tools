document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    var modal = document.getElementById("myModal");
    var overlay = document.getElementById("overlay");

    // Get the div that opens the modal
    var triggerDiv = document.getElementById("triggerDiv");

    // When the user clicks on the div, open the modal and blur everything
    triggerDiv.addEventListener("click", function () {
        modal.style.display = "block";
        overlay.style.display = "block";
    });

    // When the user clicks on the close button or outside of the modal, close the modal
    window.addEventListener("click", function (event) {
        if (event.target === modal || event.target === overlay) {
            modal.style.display = "none";
            overlay.style.display = "none";
        }
    });

    // Close the modal when the close button is clicked
    var closeButton = document.querySelector(".close");
    closeButton.addEventListener("click", function () {
        modal.style.display = "none";
        overlay.style.display = "none";
    });
});
