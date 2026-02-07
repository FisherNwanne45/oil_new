// ===========================
// HAMBURGER MENU FUNCTIONALITY
// ===========================
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger-menu');
    const navMenu = document.getElementById('nav-menu');
    const navItems = document.querySelectorAll('.nav-item');

    if (hamburger && navMenu) {
        // Toggle mobile menu
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                // Don't close if it's a dropdown toggle
                if (!link.classList.contains('dropdown-toggle')) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });
        });

        // Handle dropdown toggle in mobile
        const dropdownToggles = navMenu.querySelectorAll('.dropdown-toggle');
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                const navItem = toggle.closest('.nav-item');
                if (navItem) {
                    navItem.classList.toggle('active');
                }
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('nav') && !e.target.closest('.hamburger')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }
});

// ===========================
// HERO SLIDER FUNCTIONALITY
// ===========================
let heroCurrentSlide = 0;
let heroSlideAutoplay = null;

function initHeroSlider() {
    const heroSlider = document.querySelector('.hero-slider');
    if (!heroSlider) return;

    const slides = heroSlider.querySelectorAll('.hero-slide');
    const prevBtn = heroSlider.querySelector('.hero-slider-prev');
    const nextBtn = heroSlider.querySelector('.hero-slider-next');
    const dotsContainer = heroSlider.querySelector('.hero-slider-dots');

    if (slides.length === 0) return;

    // Create dots
    if (dotsContainer) {
        dotsContainer.innerHTML = '';
        slides.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToHeroSlide(index));
            dotsContainer.appendChild(dot);
        });
    }

    function showHeroSlide(n) {
        slides.forEach(slide => slide.classList.remove('active'));
        const dots = dotsContainer ? dotsContainer.querySelectorAll('.dot') : [];
        dots.forEach(dot => dot.classList.remove('active'));

        heroCurrentSlide = (n + slides.length) % slides.length;
        slides[heroCurrentSlide].classList.add('active');
        if (dots[heroCurrentSlide]) dots[heroCurrentSlide].classList.add('active');
    }

    function nextHeroSlide() {
        showHeroSlide(heroCurrentSlide + 1);
    }

    function prevHeroSlide() {
        showHeroSlide(heroCurrentSlide - 1);
    }

    function goToHeroSlide(n) {
        showHeroSlide(n);
        resetHeroAutoplay();
    }

    function resetHeroAutoplay() {
        clearInterval(heroSlideAutoplay);
        heroSlideAutoplay = setInterval(nextHeroSlide, 6000);
    }

    if (prevBtn) prevBtn.addEventListener('click', () => {
        prevHeroSlide();
        resetHeroAutoplay();
    });
    if (nextBtn) nextBtn.addEventListener('click', () => {
        nextHeroSlide();
        resetHeroAutoplay();
    });

    // Start autoplay
    heroSlideAutoplay = setInterval(nextHeroSlide, 6000);

    // Pause on hover
    heroSlider.addEventListener('mouseenter', () => clearInterval(heroSlideAutoplay));
    heroSlider.addEventListener('mouseleave', () => {
        heroSlideAutoplay = setInterval(nextHeroSlide, 6000);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initHeroSlider();
});

// ===========================
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-on-scroll');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all elements with animate-scroll class
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-animate]').forEach((el) => {
        observer.observe(el);
    });
});

// ===========================
// NAVIGATION ACTIVE STATE
// ===========================
function setActiveNavigation() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach((link) => {
        const href = link.getAttribute('href');
        if (href === currentPage) {
            link.classList.add('active');
            // Also mark parent dropdown as active
            const parentDropdown = link.closest('.nav-item');
            if (parentDropdown) {
                parentDropdown.classList.add('active');
            }
        }
    });
}

// ===========================
// SMOOTH SCROLL
// ===========================
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ===========================
// MOBILE MENU TOGGLE
// ===========================
function initMobileMenu() {
    const nav = document.querySelector('nav');
    if (!nav) return;

    const navToggle = document.querySelector('.nav-toggle');
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('nav') && !e.target.closest('.nav-toggle')) {
                nav.classList.remove('active');
            }
        });
    }
}

// ===========================
// LAZY LOAD IMAGES
// ===========================
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach((img) => {
        imageObserver.observe(img);
    });
}

// ===========================
// FORM HANDLING
// ===========================
const contactForm = document.querySelector('#contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // Collect form data
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);

        // Show loading state
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;

        // Send via AJAX or just show success (adjust as needed)
        console.log('Form data:', data);

        // Simulate success
        setTimeout(() => {
            submitBtn.textContent = 'Message Sent!';
            submitBtn.style.background = '#4caf50';
            contactForm.reset();

            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.background = '';
            }, 3000);
        }, 1000);
    });
}

// ===========================
// HEADER SCROLL EFFECT
// ===========================
let lastScrollTop = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (header) {
        if (scrollTop > 100) {
            header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.2)';
        } else {
            header.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.15)';
        }
    }

    lastScrollTop = scrollTop;
});

// ===========================
// UTILITY FUNCTIONS
// ===========================

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function () {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => (inThrottle = false), limit);
        }
    };
}

// Add loading class to images
function initImageLoading() {
    const images = document.querySelectorAll('img');
    images.forEach((img) => {
        img.addEventListener('load', () => {
            img.classList.add('loaded');
        });

        img.addEventListener('error', () => {
            img.classList.add('error');
        });
    });
}

// ===========================
// INITIALIZE ON DOM READY
// ===========================
document.addEventListener('DOMContentLoaded', () => {
    setActiveNavigation();
    initMobileMenu();
    initImageLoading();

    // Add animation delay to feature boxes
    const featureBoxes = document.querySelectorAll('.feature-box');
    featureBoxes.forEach((box, index) => {
        box.style.animationDelay = `${index * 0.1}s`;
    });
});

// ===========================
// SCROLL TO TOP BUTTON
// ===========================
const scrollTopBtn = document.querySelector('.scroll-to-top');
if (scrollTopBtn) {
    window.addEventListener(
        'scroll',
        throttle(() => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        }, 150)
    );

    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ===========================
// DROPDOWN MENU FUNCTIONALITY
// ===========================
document.addEventListener('DOMContentLoaded', () => {
    const dropdownItems = document.querySelectorAll('.nav-item');

    dropdownItems.forEach((item) => {
        const toggle = item.querySelector('.dropdown-toggle');
        const menu = item.querySelector('.dropdown-menu');

        if (toggle && menu) {
            // Show on hover of toggle
            toggle.addEventListener('mouseenter', function () {
                menu.style.opacity = '1';
                menu.style.visibility = 'visible';
                menu.style.pointerEvents = 'auto';
                item.classList.add('active');
            });

            // Keep visible on hover of menu itself
            menu.addEventListener('mouseenter', function () {
                this.style.opacity = '1';
                this.style.visibility = 'visible';
                this.style.pointerEvents = 'auto';
            });

            // Hide when leaving both toggle and menu
            item.addEventListener('mouseleave', function () {
                menu.style.opacity = '0';
                menu.style.visibility = 'hidden';
                menu.style.pointerEvents = 'none';
                item.classList.remove('active');
            });
        }
    });
});

// ===========================
// PAGE TRANSITION EFFECTS
// ===========================
window.addEventListener('pageshow', () => {
    document.body.classList.add('page-loaded');
});

window.addEventListener('beforeunload', () => {
    document.body.classList.remove('page-loaded');
});

// ===========================
// IMAGE SLIDER FUNCTIONALITY
// ===========================
let currentSlide = 0;
let slideAutoplay = null;

const sliderProjects = [
    { title: '5 MW Solar Farm', desc: 'Large-scale installation providing clean power to 1000+ households' },
    { title: 'EV Charging Network', desc: '20-station fast-charging network across major Ukrainian cities' },
    { title: 'Factory Power System', desc: '2 MW rooftop solar with battery storage for industrial operations' }
];

function initSlider() {
    const slider = document.querySelector('.image-slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.slide');
    const prevBtn = slider.querySelector('.slider-prev');
    const nextBtn = slider.querySelector('.slider-next');
    const dotsContainer = slider.querySelector('.slider-dots');

    if (slides.length === 0) return;

    // Create dots
    if (dotsContainer) {
        dotsContainer.innerHTML = '';
        slides.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
    }

    function updateSlideInfo(index) {
        const titleEl = document.getElementById('slide-title');
        const descEl = document.getElementById('slide-desc');
        if (titleEl && sliderProjects[index]) {
            titleEl.textContent = sliderProjects[index].title;
        }
        if (descEl && sliderProjects[index]) {
            descEl.textContent = sliderProjects[index].desc;
        }
    }

    function showSlide(n) {
        slides.forEach(slide => slide.classList.remove('active'));
        const dots = dotsContainer ? dotsContainer.querySelectorAll('.dot') : [];
        dots.forEach(dot => dot.classList.remove('active'));

        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
        updateSlideInfo(currentSlide);
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function goToSlide(n) {
        showSlide(n);
        resetAutoplay();
    }

    function resetAutoplay() {
        clearInterval(slideAutoplay);
        slideAutoplay = setInterval(nextSlide, 5000);
    }

    if (prevBtn) prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoplay();
    });
    if (nextBtn) nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoplay();
    });

    // Start autoplay
    slideAutoplay = setInterval(nextSlide, 5000);

    // Pause on hover
    slider.addEventListener('mouseenter', () => clearInterval(slideAutoplay));
    slider.addEventListener('mouseleave', () => {
        slideAutoplay = setInterval(nextSlide, 5000);
    });
}

// ========================================
// Contact Form Handler
// ========================================
function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    const responseMessage = document.getElementById('form-response-message');
    
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        
        // Disable submit button
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 8px;"></i>Sending...';
        
        try {
            // Send form data to handler
            const response = await fetch(contactForm.action, {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success) {
                // Show success message
                responseMessage.className = 'form-success';
                responseMessage.innerHTML = `
                    <h3 style="margin-bottom: 10px;">
                        <i class="fas fa-check-circle" style="margin-right: 10px;"></i>Thank You!
                    </h3>
                    <p>${result.message}</p>
                `;
                responseMessage.style.display = 'block';
                
                // Scroll to message
                responseMessage.scrollIntoView({ behavior: 'smooth', block: 'start' });
                
                // Reset form
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            } else {
                // Show error messages
                const errorMessages = result.errors && result.errors.length > 0 
                    ? result.errors.join('<br>')
                    : result.message || 'An error occurred. Please try again.';
                
                responseMessage.className = 'form-error';
                responseMessage.innerHTML = `
                    <i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i>
                    ${errorMessages}
                `;
                responseMessage.style.display = 'block';
                responseMessage.scrollIntoView({ behavior: 'smooth', block: 'start' });
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        } catch (error) {
            console.error('Form submission error:', error);
            responseMessage.className = 'form-error';
            responseMessage.innerHTML = `
                <i class="fas fa-exclamation-circle" style="margin-right: 8px;"></i>
                Network error. Please check your connection and try again.
            `;
            responseMessage.style.display = 'block';
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initSlider();
    initContactForm();
});
