let images = document.getElementsByClassName('images');
let image_container = document.getElementById('image-container')
let slideindex = 0;
let dot = document.getElementsByClassName('dot')

for (let i=0; i<images.length; i++) {
    let f = 100*i
    let e = f += '%' 
    images[i].style.left = `${e}`;
}


function nextslide (c) {
    setTimeout(() => {
        if (slideindex<images.length-1) {
            slideindex += c
        } 
        if (slideindex<images.length) {
            slide(slideindex)
        }
    }, 50);
}

function backslide (c) {
    setTimeout(() => {
        if (slideindex>0) {
            slideindex += c
        } 
        slide(slideindex)
    }, 50);
}

function dot_click (d) {
    slideindex = d-1
    slide(slideindex)

    image_container.style.transition = 'unset'
}

function slide (c) {
    let e = -100*c + "%"
    image_container.style.transform = `translate(${e},0)`;
    for (let i=0; i<dot.length; i++) {
        dot[i].classList.remove('dot-active')
    }
    dot[slideindex].classList.add('dot-active')
    

    let next = document.getElementById('next')
    let back = document.getElementById('back')

    if (slideindex == images.length-1) {
        next.classList.add('button-dis')
    }else {
        next.classList.remove('button-dis')
    }

    if (slideindex == 0) {
        back.classList.add('button-dis')
    }else {
        back.classList.remove('button-dis')
    }

    image_container.style.transition = '0.7s'

}

if (slideindex == 0) {
    back.classList.add('button-dis')
}else {
    back.classList.remove('button-dis')
}