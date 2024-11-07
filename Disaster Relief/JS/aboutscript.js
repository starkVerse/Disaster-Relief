var counter = 1;
setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);

// Popup 
function setupPopup(linkId, popupId) {
    var link = document.getElementById(linkId);
    var popup = document.getElementById(popupId);
    var closeBtn = popup.getElementsByClassName('close-btn')[0];

    link.onclick = function(event) {
        event.preventDefault();
        popup.style.display = 'block';
    }

    closeBtn.onclick = function() {
        popup.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }
}

setupPopup('about-us-link', 'about-us-popup');
setupPopup('services-link', 'services-popup');
setupPopup('faq-link', 'faq-popup');

// Accordion 
var acc = document.getElementsByClassName("accordion-button");
for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        var icon = this.querySelector(".accordion-icon");
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            icon.textContent = "+";
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            icon.textContent = "-";
        }
    }
}