document.addEventListener('DOMContentLoaded', function() {
    // Fetch the latest posts from the WordPress AJAX endpoint
    fetch(`${wpAjax.ajaxUrl}?action=get_latest_posts`)
        .then(response => response.json())
        .then(posts => {
            // Ensure we have at least 4 posts
            if (Array.isArray(posts) && posts.length >= 4) {
                const leftGridLink = document.querySelector('.left-grid-link');
                const leftGridContent = leftGridLink.querySelector('.card-content');
                const leftGridImage = leftGridLink.querySelector('.left-grid-image');
                const rightGrids = document.querySelectorAll('.fixed-grid .cell:not(.is-row-span-3)');

                // Left-side: First (latest) post
                const leftArticle = posts[0];
                leftGridContent.querySelector('.left-grid-date').textContent = leftArticle.date;
                leftGridContent.querySelector('.left-grid-title').textContent = leftArticle.title;
                leftGridContent.querySelector('.left-grid-excerpt').textContent = leftArticle.excerpt;
                leftGridImage.style.backgroundImage = `url('${leftArticle.thumbnail}')`;
                leftGridLink.href = leftArticle.link;

                // Right-side: Remaining 3 posts
                posts.slice(1, 4).forEach((article, index) => {
                    const rightGrid = rightGrids[index];
                    const cardContent = rightGrid.querySelector('.custom-card-content');
                    const img = rightGrid.querySelector('.image-container img');
                    const rightGridLink = rightGrid.closest('.right-grid-link');

                    cardContent.querySelector('.right-grid-date').textContent = article.date;
                    cardContent.querySelector('.right-grid-title').textContent = article.title;
                    img.src = article.thumbnail;
                    img.alt = article.title;
                    rightGridLink.href = article.link;
                    console.log(article);
                });
            }
        })
        .catch(error => console.error('Error fetching latest posts:', error));

        window.showDetails = function (sectionId) {
            // Hide all details
            document.querySelectorAll('.register-partner-column > div').forEach(div => {
                div.style.display = 'none';
            });

            document.querySelectorAll('.link-register-partner').forEach(link => {
                link.style.color = 'black';
            });
    
            // Show the selected section
            const selectedSection = document.getElementById(sectionId);
            const sideLinkSection = document.getElementById('link-' + sectionId);
            
            if (selectedSection) {
                selectedSection.style.display = 'block';
                sideLinkSection.style.color = '#1e5304';
            }

            console.log(sideLink);
        };
});
