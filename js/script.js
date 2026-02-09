document.addEventListener('DOMContentLoaded', function () {
    console.log('The Global Rise Foundation Website Loaded');

    // Optional: Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });


    // Counter Animation
    const statsSection = document.querySelector('#stats-section');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const counters = document.querySelectorAll('.counter');
                    counters.forEach((counter) => {
                        counter.innerText = '0'; // Ensure it starts at 0

                        const updateCounter = () => {
                            const target = +counter.getAttribute('data-target');
                            const count = +counter.innerText;

                            // Dynamic increment based on target size to ensure all finish roughly at same time
                            // smaller numbers need smaller increment, larger need larger
                            const increment = target / 100; // Divide total by ~100 frames

                            if (count < target) {
                                counter.innerText = Math.ceil(count + increment);
                                setTimeout(updateCounter, 20); // ~50fps
                            } else {
                                counter.innerText = target;
                            }
                        };
                        updateCounter();
                    });
                    observer.unobserve(statsSection);
                }
            });
        }, { threshold: 0.1 }); // Trigger sooner when 10% visible

        observer.observe(statsSection);
    }

    // Scroll Reveal Animation (Generic)
    const revealElements = document.querySelectorAll('.reveal-up');
    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

        revealElements.forEach(el => revealObserver.observe(el));
    }
});

// Google Translate Integration
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,hi',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
    }, 'google_translate_element');
}

function changeLanguage(lang) {
    var select = document.querySelector(".goog-te-combo");
    if (select) {
        select.value = lang;
        select.dispatchEvent(new Event('change'));
    }

    // Update Button Text
    var langText = (lang === 'hi') ? 'HI' : 'EN';
    var currentLangSpan = document.getElementById('currentLang');
    if (currentLangSpan) {
        currentLangSpan.textContent = langText;
    }
}

// Load Google Translate Script
(function () {
    var gtScript = document.createElement('script');
    gtScript.type = 'text/javascript';
    gtScript.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
    document.body.appendChild(gtScript);
})();
