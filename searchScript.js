document.getElementById("search-icon").addEventListener("click", function() {
    var searchForm = document.getElementById("search-form");
    if (searchForm.style.display === "none") {
        searchForm.style.display = "block";
    } else {
        searchForm.style.display = "none";
    }
});