function visitSearchPage() {
    var mysearch = document.getElementById("mySearch").value.toLowerCase();
    for (var j = 0; j < products.length; j++) {
        if (mysearch === "" || !products[j].name.toLowerCase().includes(mysearch)) {
            alert("We weren't able to find any results.\nPlease check the spelling or try another search.");
            return false;
        } else {
            return true;
        }
    }
}

