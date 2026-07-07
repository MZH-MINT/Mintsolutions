/**
 * JavaScript for Careers and About Us (Contact Us) pages.
 * Handles career job accordion toggles, highlight animations, and contact form submission.
 */
jQuery(document).ready(function($) {
    /* =======================================
       Career Accordion Functionality
       ======================================= */
    
    // Check if we are on a page with career section
    if ($('.career-section').length > 0) {
        
        // Handle "View Details" click
        $('.career-list .view-btn').on('click', function(e) {
            e.preventDefault();
            
            var jobItem = $(this).closest('.job-item');
            var jobId = jobItem.data('job');
            
            // Remove active classes from all items
            $('.job-item').removeClass('active');
            $('.detail-box').removeClass('active');
            
            // Hide default image
            $('.default-image').removeClass('active');
            
            // Add active class to clicked item and corresponding detail box
            jobItem.addClass('active');
            $('#' + jobId).addClass('active');
        });
        
        // Handle "Close" click
        $('.career-list .close-btn').on('click', function(e) {
            e.preventDefault();
            
            var jobItem = $(this).closest('.job-item');
            var jobId = jobItem.data('job');
            
            // Remove active classes
            jobItem.removeClass('active');
            $('#' + jobId).removeClass('active');
            
            // Show default image if no job is active
            if ($('.job-item.active').length === 0) {
                $('.default-image').addClass('active');
            }
        });
    }

    /* =======================================
       Highlight Animation via IntersectionObserver
       ======================================= */
    
    // Animate the highlight effect when the element comes into view
    var highlightElements = document.querySelectorAll('.highlight');
    
    if (highlightElements.length > 0 && 'IntersectionObserver' in window) {
        var highlightObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    // Optional: stop observing once shown
                    // observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% visible
        });
        
        highlightElements.forEach(function(el) {
            highlightObserver.observe(el);
        });
    } else {
        // Fallback for older browsers
        $('.highlight').addClass('show');
    }

    /* =======================================
       Contact Form Submission Handling (Basic)
       ======================================= */
       
    if ($('#contactForm').length > 0) {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            var form = $(this);
            var submitBtn = form.find('button[type="submit"]');
            var msgDiv = $('#formMsg');
            
            // Basic validation
            var isValid = true;
            form.find('.validation-error').remove();
            form.find('input, textarea').removeClass('input-invalid');
            
            form.find('input[required], textarea[required]').each(function() {
                if (!$(this).val()) {
                    isValid = false;
                    $(this).addClass('input-invalid');
                    $(this).parent().after('<div class="validation-error">This field is required</div>');
                }
            });
            
            if (isValid) {
                // Simulate submission
                submitBtn.prop('disabled', true).html('<span>Processing...</span>');
                
                // Usually this would be an AJAX call to WordPress admin-ajax.php
                // e.g., $.post(ajaxurl, data, function(response) { ... })
                
                setTimeout(function() {
                    msgDiv.css('color', 'green').text('Thank you! Your message has been sent successfully.');
                    form[0].reset();
                    submitBtn.prop('disabled', false).html('<span>Submit</span>');
                }, 1500);
            }
        });
    }

    /* =======================================
       About page paragraph activation
       ======================================= */

    var aboutParagraphs = document.querySelectorAll('#text p');

    if (aboutParagraphs.length > 0 && 'IntersectionObserver' in window) {
        var aboutObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                entry.target.classList.toggle('active', entry.isIntersecting);
            });
        }, {
            threshold: 1
        });

        aboutParagraphs.forEach(function(paragraph) {
            aboutObserver.observe(paragraph);
        });
    }

    /* =======================================
       About page card hover behavior
       ======================================= */

    var aboutCards = $('.card-round');

    if (aboutCards.length > 0) {
        var cardTimer;

        aboutCards.on('mouseenter', function() {
            var hoveredCard = $(this);

            cardTimer = setTimeout(function() {
                aboutCards.each(function() {
                    var card = $(this);

                    if (!card.is(hoveredCard)) {
                        card.addClass('hidden').removeClass('active');
                    }
                });

                hoveredCard.addClass('active');
            }, 200);
        });

        aboutCards.on('mouseleave', function() {
            clearTimeout(cardTimer);
            aboutCards.removeClass('hidden active');
        });
    }
});
