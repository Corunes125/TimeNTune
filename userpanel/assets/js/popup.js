// Get the elements by their ID
var popupLink = document.getElementById("popup-link");
var popupWindow = document.getElementById("popup-window");
var closeButton = document.getElementById("close-button");

// Show the pop-up window when the link is clicked
popupLink.addEventListener("click", function(event) {
    event.preventDefault();
    popupWindow.style.display = "block";
});

// Hide the pop-up window when the close button is clicked
closeButton.addEventListener("click", function() {
    popupWindow.style.display = "none";
});

// Hide the pop-up window when the user clicks outside of it
window.addEventListener("click", function(event) {
    if (event.target == popupWindow) {
        popupWindow.style.display = "none";
    }
});
