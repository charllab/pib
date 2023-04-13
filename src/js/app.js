jQuery(function () {

    // remove default dropdown data-toggle for mobile
    // Get all the dropdown menu links with the data-toggle attribute
    const dropdownLinks = document.querySelectorAll('[data-toggle="dropdown"]');

    // Loop through each dropdown menu link
    dropdownLinks.forEach(dropdownLink => {
        // Check if the device is a mobile device based on screen width
        if (window.innerWidth < 1440) {
            // Remove the data-toggle attribute from the link
            dropdownLink.removeAttribute('data-toggle');
        }
    });

    // add icons span to main nav to add icons
    // Get the mainnav container
    const mainNavContainer = document.getElementById('mainnav');

    // Get all the nav items with the class nav-item
    const navItems = mainNavContainer.querySelectorAll('.nav-item:not(.dropdown-menu .nav-item)');

    // Define a variable to keep track of the number of `link-icon` elements
    let linkIconCount = 0;

    // Loop through each nav item
    navItems.forEach(navItem => {
        // Get the nav link inside each nav item with the class nav-link
        const navLink = navItem.querySelector('.nav-link');

        // Only add the span element if the nav item is not a child of a dropdown-menu ul
        if (navLink && !navItem.closest('.dropdown-menu')) {
            // Create a new span element with the class link-icon and a secondary class that includes the counted number of each instance
            const linkIcon = document.createElement('span');
            linkIcon.classList.add('link-icon', 'link-icon-' + (++linkIconCount));

            // Get the current inner text of the nav link
            const linkText = navLink.textContent.trim();

            // Clear the inner text of the nav link
            navLink.textContent = '';

            // Insert the span element before the inner text of the nav link
            navLink.appendChild(linkIcon);
            navLink.appendChild(document.createTextNode(linkText));
        }
    });

    // end of my friend

    //remove href on .no-pointer > .dropdown-toggle
    jQuery('.no-pointer > .dropdown-toggle').removeAttr('href');

    // get height of margin and add it as margin-top to the main-element
    function setMainMarginTop() {
        var headerHeight = jQuery('#header').outerHeight();
        jQuery('main').css('margin-top', headerHeight + 'px');
    }

    setMainMarginTop();
    // reset main-element margin-top on window resize
    jQuery(window).resize(function () {
        var headerHeight = jQuery('#header').outerHeight();
        jQuery('main').css('margin-top', headerHeight + 'px');
    });

    //init animation
    AOS.init();

    // Auto target _blank external links
    // targetBlankExternalLinks();

    // Remove WP Block element iframe classes
    if (jQuery('.wp-block-embed-youtube').length) {
        jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
    }

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};

var targetBlankExternalLinks = function () {
    var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
        + window.location.hostname
        + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

    jQuery('a').filter(function () {
        var href = jQuery(this).attr('href');
        return !internalLinkRegex.test(href);
    })
        .each(function () {
            jQuery(this).attr('target', '_blank');
        });
};