const visitedLinks = document.querySelectorAll('.col a');


visitedLinks.forEach(function(link) {
    link.addEventListener('mouseover', function() {
        this.style.background = 'grey'; 
    });

    link.addEventListener('mouseout', function() {
        this.style.background = 'transparent'; 
    });

    link.addEventListener('click', function() {
        link.style.color = 'magenta'; 
        link.classList.add = 'visited'; 
        checkAllLinksVisited();
    });

});