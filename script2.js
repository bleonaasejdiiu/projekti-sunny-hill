function addComment() {
    const commentInput = document.getElementById('commentInput');
    const commentText = commentInput.value.trim();

    if (commentText === "") {
        alert("Ju lutemi, shkruani nje koment!");
        return;
    }

    const commentsSection = document.getElementById('commentsSection');

   
    const newComment = document.createElement('div');
    newComment.classList.add('comment');

    
    newComment.innerHTML = `
        <p class="author">Përdoruesi</p>
        <p>${commentText}</p>
    `;

    
    commentsSection.appendChild(newComment);

    
    commentInput.value = "";
}