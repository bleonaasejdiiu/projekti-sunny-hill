document.getElementById('read-more').addEventListener('click', function(event) {
    event.preventDefault(); 

    var moreText = document.getElementById('more-text');

    if (moreText.style.display === 'none') {
        moreText.style.display = 'block'; // Shfaq tekstin 
        this.textContent = 'Read Less'; // Ndryshon tekstin e butonit
    } else {
        moreText.style.display = 'none'; // Fshih tekstin 
        this.textContent = 'Read More'; // Kthehet teksti i butonit
    }
});