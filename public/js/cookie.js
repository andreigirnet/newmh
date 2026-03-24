function acceptCookies() {
    localStorage.setItem('cookiesAccepted', 'true');
    hidePrompt();
}

function closeCookies() {
    hidePrompt();
}

function hidePrompt() {
    const prompt = document.getElementById('cookiePrompt');
    prompt.style.opacity = '0';
    prompt.style.transition = '0.5s';
    setTimeout(() => {
        prompt.style.display = 'none';
    }, 500);
}

document.addEventListener("DOMContentLoaded", function() {
    if (localStorage.getItem('cookiesAccepted') === 'true') {
        const bar = document.getElementById('cookiePrompt');
        if (bar) {
            bar.style.display = 'none';
        }
    }
});
