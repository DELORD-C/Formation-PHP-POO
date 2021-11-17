let films = document.getElementsByClassName('film');

for (let film of films) {
    film.addEventListener('mouseenter', function () {
        let elem = this;
        elem.children[0].style.opacity = 0.4;
        setTimeout(function(){
            elem.children[2].style.opacity = 1;
            elem.children[2].style.top = '60px';
            setTimeout(function(){
                elem.children[4].style.opacity = 1;
                elem.children[4].style.left = '20px';
                setTimeout(function(){
                    elem.children[3].style.opacity = 1;
                    elem.children[3].style.right = '20px';
                }, 100);
            }, 100);
        }, 100);
    });
    film.addEventListener('mouseleave', function () {
        let elem = this;
        console.log(elem.children[2]);
        elem.children[3].style.opacity = 0;
        elem.children[3].style.right = '0px';
        setTimeout(function(){
            elem.children[4].style.opacity = 0;
            elem.children[4].style.left = '0px';
            setTimeout(function(){
                elem.children[2].style.opacity = 0;
                elem.children[2].style.top = '30px';
                setTimeout(function(){
                    elem.children[0].style.opacity = 0;
                }, 100);
            }, 100);
        }, 100);
    });
}