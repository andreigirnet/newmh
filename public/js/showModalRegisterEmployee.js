const registered = document.getElementById('modalRegisterEmployer');
const understood = document.getElementById('understoodButton');

// Only add the event listener if BOTH elements actually exist on the page
if (understood && registered) {
    understood.addEventListener('click', function(){
        registered.style.display = 'none';
    });
}