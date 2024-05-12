function updatePageLoadCount() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'app/Controller/Contact/', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                // Update count display on the page
                document.getElementById('content').innerText = 'Page load count: ' + response.count;
            } else {
                console.error('Error updating page load count:', xhr.statusText);
            }
        }
    };
    xhr.send();
}

// Call updatePageLoadCount function when the page is fully loaded
document.addEventListener('DOMContentLoaded', updatePageLoadCount);