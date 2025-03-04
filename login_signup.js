
document.addEventListener("DOMContentLoaded", function() {
    // Select all toggle-password icons
    const toggleIcons = document.querySelectorAll(".toggle-password");

    // Loop through each icon and add event listener
    toggleIcons.forEach(icon => {
        icon.addEventListener("click", function() {
            const targetId = this.getAttribute("data-target");
            const passwordInput = document.getElementById(targetId);

            // Toggle the input type
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                this.classList.remove("bx-hide");
                this.classList.add("bx-show");
            } else {
                passwordInput.type = "password";
                this.classList.remove("bx-show");
                this.classList.add("bx-hide");
            }
        });
    });
});
