<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true // Makes the slider loop infinitely
    });
</script>

<script>
    // Get all the buttons that should open the popup
    const openPopupBtns = document.querySelectorAll(".open-popup");
    const popup = new bootstrap.Modal(document.querySelector(".popup-container"));
    const closePopupBtn = document.querySelector(".btn-close");

    // Add event listener to each button
    openPopupBtns.forEach(button => {
        button.addEventListener("click", () => {
            popup.show(); // Show the Bootstrap modal
        });
    });

    // Close the popup when the close button is clicked
    closePopupBtn.addEventListener("click", () => {
        popup.hide(); // Hide the Bootstrap modal
    });

</script>

<script>
    // Function to toggle the visibility of the options
    document.querySelectorAll('.top-one .selected').forEach(selectedElement => {
        selectedElement.addEventListener('click', function () {
            const optionsList = this.nextElementSibling; // Get the associated options list
            optionsList.style.display = optionsList.style.display === 'block' ? 'none' : 'block'; // Toggle the dropdown
        });
    });

    // Function to update the selected value when an option is clicked
    document.querySelectorAll('.top-one .options li').forEach(optionItem => {
        optionItem.addEventListener('click', function () {
            const selectedBox = this.closest('.select-box').querySelector('.selected'); // Get the selected element
            const selectedIcon = this.querySelector('img').src; // Get the image icon from the selected option
            const selectedText = this.textContent.trim(); // Get the text of the selected option

            // Update the selected box with the new selection
            selectedBox.innerHTML = `<img src="${selectedIcon}" alt="${selectedText}" class="icon"><span>${selectedText}</span><i class="arrow"></i>`;

            // Hide the options dropdown after selection
            this.closest('.options').style.display = 'none';
        });
    });

    // Function to close dropdowns if clicked outside
    document.addEventListener('click', function (e) {
        document.querySelectorAll('.top-one .options').forEach(optionsList => {
            if (!optionsList.closest('.select-box').contains(e.target)) {
                optionsList.style.display = 'none'; // Close any dropdowns that are open when clicking outside
            }
        });
    });

</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,de,es,it,zh-CN,id',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript">
    function toggleGoogleTranslate() {
        var translateElement = document.getElementById("google_translate_element");
        if (translateElement.style.display === "none") {
            translateElement.style.display = "block";
        } else {
            translateElement.style.display = "none";
        }
    }
</script>