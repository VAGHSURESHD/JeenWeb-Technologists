
"use strict";
const financioAnimateObserves = document.getElementsByClassName('financio-animate');

let financioanimateobserve = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            let item = entry.target;
            if(document.querySelector('.financio-page-preloader') !== null && window.scrollY < 150){
                setTimeout(() => {item.classList.add('financio-animate-init');}, 300);
            }else{
                item.classList.add('financio-animate-init');
            }
            //financioanimateobserve.disconnect();
        }
    });
}, {threshold: 0.5});

for (let itemobserve of financioAnimateObserves) {
    financioanimateobserve.observe(itemobserve);
}