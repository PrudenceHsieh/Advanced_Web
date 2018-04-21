var count = 1;
    function setColor(btn, color) {
        var property = document.getElementById(btn);
        if (count == 0) {
            property.style.backgroundColor = "#FFFFFF"
            count = 1;        
        }
        else {
            property.style.backgroundColor = "#FFBABA"
            count = 0;
        }
    }