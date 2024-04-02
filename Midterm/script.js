document.querySelectorAll('.col a').forEach(function(link) {
    link.addEventListener('mouseover', function() {
        this.style.color = 'red'; 
        this.style.background = 'grey'; 
    });

    link.addEventListener('mouseout', function() {
        this.style.color = 'red'; 
        this.style.background = 'transparent'; 
    });

});