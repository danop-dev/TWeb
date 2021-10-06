window.onload = function () {

    //menu burger
    const menuBurger = document.querySelector('.burger');
    const menuList = document.querySelector('.nav__list');

    menuBurger.addEventListener("click", function(e) {
        menuBurger.classList.toggle('active-burger');
        menuList.classList.toggle('list--block');
    })


    //carousel
    const prevBtn = document.getElementById('prev-btn'),
        nextBtn = document.getElementById('next-btn'),
        slides = document.querySelectorAll('.carousel__item'),
        dots = document.querySelectorAll('.dot');

    let index = 0;

    const activeSlide = n =>{
        for(carousel__item of slides){
            carousel__item.classList.remove('carousel__item--active');
        }
        slides[n].classList.add('carousel__item--active');
    }

    const activeDote = n => {
        for(dot of dots){
            dot.classList.remove('dot--active');
        }
        dots[n].classList.add('dot--active');
    }

    const callCurentSlide = index => {
        activeSlide(index);
        activeDote(index);
    }

    const nextSlide = () => {
        if(index == slides.length - 1){
            index = 0;
            callCurentSlide(index);
        } else {
            index++;
            callCurentSlide(index);
        }
    }

    const prevSlide = () => {
        if(index == 0){
            index = slides.length - 1;
            callCurentSlide(index);
        } else {
            index--;
            callCurentSlide(index);
        }
    }

    dots.forEach((item, indexDot) => {
        item.addEventListener('click', () => {
            index = indexDot;
            callCurentSlide(index);
        })
    })

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    setInterval(nextSlide, 3500);


    //scroll to top
    const offset = 200,
          scrollUp = document.querySelector('.scroll-top'),
          scrollUpSvgPath = document.querySelector('.scroll-top__svg-path'),
          pathLenght = scrollUpSvgPath.getTotalLength();

    scrollUpSvgPath.style.strokeDasharray = `${pathLenght} ${pathLenght}`
    scrollUpSvgPath.style.transition = 'stroke-dashoffset 20ms'

    const getTop = () => window.pageYOffset || document.documentElement.scrollTop;

    const uppdateDashoffset = () => {
        const height = document.documentElement.scrollHeight - window.innerHeight;
        const dashoffset = pathLenght - (getTop() * pathLenght / height)

        scrollUpSvgPath.style.strokeDashoffset = dashoffset;
    };

    //on scroll
    window.addEventListener('scroll', () => {
        uppdateDashoffset();
        if (getTop() > offset) {
            scrollUp.classList.add('scroll-top--active');
        } else {
            scrollUp.classList.remove('scroll-top--active');
        }
    });

    //on click scroll to top
    scrollUp.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    
    //Accordion
    const elements = document.querySelectorAll('.accordion-item__trigger');
    elements.forEach((item) => 
        item.addEventListener('click', () => {
            const parent = item.parentNode;

            if (parent.classList.contains('accordion-item--active')) {
                parent.classList.remove('accordion-item--active');
            } else {
                document
                    .querySelectorAll('.accordion-item')
                    .forEach((child) => child.classList.remove('accordion-item--active'))
                parent.classList.add('accordion-item--active');
            }
        })
    )

    
    //smooth scroll link page
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
    
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
}

