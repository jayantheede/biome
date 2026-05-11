document.addEventListener("DOMContentLoaded", () => {




    // 3. GSAP Animations
    gsap.registerPlugin(ScrollTrigger);

    // Hero Section Animations
    const tlHero = gsap.timeline();
    
    tlHero.to('.hero-text-line', {
        y: 0,
        duration: 1,
        stagger: 0.2,
        ease: 'power4.out',
        delay: 1.2 // Delayed to accommodate splash loader
    })
    .to('.hero-element', {
        y: 0,
        opacity: 1,
        duration: 1,
        stagger: 0.1,
        ease: 'power3.out'
    }, "-=0.5");

    // Story Section Parallax
    if (document.getElementById('story-section')) {
        gsap.to('.story-image-container', {
            y: -50,
            ease: 'none',
            scrollTrigger: {
                trigger: '#story-section',
                start: 'top bottom',
                end: 'bottom top',
                scrub: true
            }
        });
    }

    // Product Cards Stagger Reveal
    gsap.from('.product-card', {
        y: 100,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.product-card',
            start: 'top 80%',
        }
    });

    // Navbar blur on scroll
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg', 'bg-eco-dark/80');
                navbar.classList.remove('bg-eco-dark/50');
            } else {
                navbar.classList.add('bg-eco-dark/50');
                navbar.classList.remove('shadow-lg', 'bg-eco-dark/80');
            }
        });
    }
});
