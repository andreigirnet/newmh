// Function to accept all cookies (or specific categories)
function acceptCookies(categories = { functional: true, analytics: true, marketing: true }) {
    const preferences = {
        necessary: true,
        functional: Boolean(categories.functional),
        analytics: Boolean(categories.analytics),
        marketing: Boolean(categories.marketing),
        timestamp: new Date().toISOString()
    };

    // Store granular preferences instead of a simple 'true'
    localStorage.setItem('cookiePreferences', JSON.stringify(preferences));
    localStorage.setItem('cookiesAccepted', 'true'); // Backward compatibility with your check
    
    applyConsent(preferences);
    hidePrompt();
}

// Function to handle rejecting or closing without full consent (Necessary only)
function closeCookies() {
    const preferences = {
        necessary: true,
        functional: false,
        analytics: false,
        marketing: false,
        timestamp: new Date().toISOString()
    };

    localStorage.setItem('cookiePreferences', JSON.stringify(preferences));
    localStorage.setItem('cookiesAccepted', 'false');
    
    applyConsent(preferences);
    hidePrompt();
}

function hidePrompt() {
    const prompt = document.getElementById('cookiePrompt');
    if (prompt) {
        prompt.style.opacity = '0';
        prompt.style.transition = '0.5s';
        setTimeout(() => {
            prompt.style.display = 'none';
        }, 500);
    }
}

// Dynamically activate or leave scripts blocked based on preferences
function applyConsent(preferences) {
    const blockedScripts = document.querySelectorAll('script[type="text/plain"][data-cookie-category]');

    blockedScripts.forEach(script => {
        const category = script.getAttribute('data-cookie-category');

        if (preferences[category] === true) {
            const newScript = document.createElement('script');
            newScript.type = 'text/javascript';

            if (script.src) {
                newScript.src = script.src;
            } else {
                newScript.textContent = script.textContent;
            }

            document.head.appendChild(newScript);
            script.remove(); // Remove the unexecuted placeholder tag
        }
    });
}

// On page load, check if preferences already exist
document.addEventListener("DOMContentLoaded", function() {
    const savedPreferences = localStorage.getItem('cookiePreferences');
    const bar = document.getElementById('cookiePrompt');

    if (savedPreferences) {
        // If choices were made before, apply them silently and hide prompt
        const preferences = JSON.parse(savedPreferences);
        applyConsent(preferences);
        if (bar) {
            bar.style.display = 'none';
        }
    } else {
        // First visit: Ensure the prompt shows and optional scripts stay blocked
        if (bar) {
            bar.style.display = 'block';
        }
    }
});