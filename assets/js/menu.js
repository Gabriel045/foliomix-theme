
/////////////////
// simple function to use for callback in the intersection observer
const changeNav = (entries,observer) => {
    console.log(entries);
    entries.forEach((entry) => {
        // verify the element is intersecting
        if(entry.isIntersecting) {
            // remove old active class
            jQuery('.active').removeClass('active');
            // get id of the intersecting section
            var id = entry.target.getAttribute('id');
            // find matching link & add appropriate class
            var newLink = jQuery(`[href="#${id}"]`).addClass('active');


            let ul = document.querySelector("#menu-container.mobile");
            let aboutUs = document.querySelector(`.mobile [href="#about-us"]`)
            let features = document.querySelector(`.mobile [href="#features"]`)
            let pricing = document.querySelector(`.mobile [href="#pricing"]`)
            let traslate = ['aboutTraslate','featuresTraslate','pricingTaslate']

            function toggle(active) {
                traslate.forEach((element) => {
                    if(active != element) {
                        ul.classList.remove(element)
                    } else {
                        ul.classList.add(element)
                    }
                });
            }


            if(window.innerWidth <= '768'){
                if(id == "about-us") {
                    toggle("aboutTraslate")

                    aboutUs.classList.remove("hidden")
        
                    pricing.classList.add("hidden")
                    features.classList.add("backgroundLetter")

                } else if(id == "features") {
                    toggle("featuresTraslate")

                    pricing.classList.remove("hidden")
                    features.classList.remove("backgroundLetter")

                    pricing.classList.add("backgroundLetter")
                    aboutUs.classList.add("hidden")

                } else if(id == "pricing") {
                    toggle('pricingTaslate')

                    pricing.classList.remove("backgroundLetter")

                    features.classList.remove("hidden")
                    features.classList.add("backgroundLetter")

                    aboutUs.classList.add("hidden")

                }

            }
        }
    });
}

// init the observer
const options = {
    threshold: 0.2
}

const observer = new IntersectionObserver(changeNav,options);

// target the elements to be observed
const sections = document.querySelectorAll('section.menu');
sections.forEach((section) => {
    observer.observe(section);
});