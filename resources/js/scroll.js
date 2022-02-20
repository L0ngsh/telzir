const links = document.querySelectorAll('a[href^="#"]');
const allOffsets = [];

links.forEach(link => {
    const id = link.getAttribute('href');

    let targetOffset = document.querySelector(id).offsetTop;
    const elementHeight = document.querySelector(id).offsetHeight;

    if (id == "#banner") {
        targetOffset = 0;
    }

    allOffsets.push({
        id,
        min: targetOffset,
        max: elementHeight + targetOffset - 1,
    });

    link.onclick = function(e) {
        e.preventDefault();

        window.scroll({
            top: targetOffset,
            behavior: 'smooth'
        });
    }
});

function unsetAllLinks() {
    links.forEach(link => {
        link.setAttribute('active', '0');
    });
}

setInterval(() => {
    allOffsets.map((element) => {
        if (window.scrollY >= element.min && window.scrollY < element.max) {
            unsetAllLinks();
            document.querySelector(`a[href="${element.id}"]`).setAttribute('active', '1');
        }
    });
}, 10);
