document.getElementById('read-more').addEventListener('click', function(event) {
    event.preventDefault(); // Parandalon veprimin e parazgjedhur të linkut

    var moreText = document.getElementById('more-text');

    if (moreText.style.display === 'none') {
        moreText.style.display = 'block'; // Shfaq tekstin e mëtejshëm
        this.textContent = 'Read Less'; // Ndryshon tekstin e butonit
    } else {
        moreText.style.display = 'none'; // Fshih tekstin e mëtejshëm
        this.textContent = 'Read More'; // Kthehet teksti i mëparshëm i butonit
    }
});