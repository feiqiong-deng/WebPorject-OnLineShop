// Products
var products = [
    {
        id: "p1",
        img: 'BEATS.png',
        name: 'Beats Solo3 Wireless Headphones',
        price: 149.99,
        rating: 4.8
    },
    {
        id: "p2",
        img: 'sony.jpg',
        name: 'Sony Noise Cancelling Headphones',
        price: 27.99,
        rating: 2.3
    },
    {
        id: "p3",
        img: 'sennheiser.jpg',
        name: 'Sennheiser HD Bluetooth Headphones',
        price: 59.99,
        rating: 3.8
    },
    {
        id: "p4",
        img: 'bose.jpg',
        name: 'Bose QuietComfort Wireless Headphones',
        price: 199.99,
        rating: 4.6
    },
    {
        id: "p5",
        img: 'jvc.jpg',
        name: 'JVC Noise Cancelling Wireless Headpones',
        price: 24.99,
        rating: 1.9
    },
];

// template for table
var table_template = `
<table class='table mt-3' style='background-color: rgb(240, 210, 159);' id='product-list'>
    <thead>
        <th></th>
        <th>Name</th>
        <th>Price</th>
        <th>Rating</th>
    </thead>`;

// Product template for search results
var product_template = `
<tr class="product">
    <td><a href="./product.html?id=<ID>"><img class="td-img" src="<IMAGE>"></a></td>
    <td><a href="./product.html?id=<ID>"><NAME></a></td>
    <td>$<PRICE></td>
    <td><RATING></td>
</tr>`;

window.onload = function () {
    // Get url parameters
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    // Get price filter
    var price_range = urlParams.getAll('price');
    // Get rating filter
    var min_rating = urlParams.get('rating');
    // Get sort filter
    var sort_by = urlParams.get('sort');
    // Get search query
    var search_term = urlParams.get('search');

    // Default values
    if (price_range.length == 0) {
        price_range = ['0to25', '25to50', '50to75', '75plus'];
    }
    if (min_rating == null) {
        min_rating = '1';
    }
    if (sort_by == null) {
        sort_by = 'rating-desc';
    }

    // set filter values
    document.getElementById('search').value = search_term;
    // price range
    if (!price_range.includes('0to25')) document.getElementById('0to25').checked = false;
    if (!price_range.includes('25to50')) document.getElementById('25to50').checked = false;
    if (!price_range.includes('50to75')) document.getElementById('50to75').checked = false;
    if (!price_range.includes('75plus')) document.getElementById('75plus').checked = false;
    // rating
    document.getElementById(min_rating).checked = true;
    // sort
    document.getElementById('sort').value = sort_by;

    // Filter the products

    var filteredProducts = [];

    products.forEach(function (product) {
        // add price and rating
        if (price_range.includes('0to25') && product.price < 25 && product.rating > min_rating) {
            filteredProducts.push(product);
        }
        else if (price_range.includes('25to50') && product.price >= 25 && product.price < 50 && product.rating > min_rating) {
            filteredProducts.push(product);
        }
        else if (price_range.includes('50to75') && product.price >= 50 && product.price < 75 && product.rating > min_rating) {
            filteredProducts.push(product);
        }
        else if (price_range.includes('75plus') && product.price >= 75 && product.rating > min_rating) {
            filteredProducts.push(product);
        }
        else {
        }

        // add sorting algorithm
        if (sort_by == 'rating-desc') {
            filteredProducts.sort((a, b) => {
                return b.rating - a.rating;
            });
        }
        else if (sort_by == 'rating-asc') {
            filteredProducts.sort((a, b) => {
                return a.rating - b.rating;
            });
        }
        else if (sort_by == 'price-desc') {
            filteredProducts.sort((a, b) => {
                return b.price - a.price;
            });
        }
        else if (sort_by == 'price-asc') {
            filteredProducts.sort((a, b) => {
                return a.price - b.price;
            });
        }

    });

    // Create table
    document.querySelector('#product-table').innerHTML += table_template;

    // Add search query into search textbox
    if (search_term !== '') {
        // Loop through every product
        filteredProducts.forEach(function (product) {
            // Check if current product title has match with search query
            if (product.name.toLowerCase().includes(search_term.toLowerCase())) {
                // Use product template and append product to search results
                var p = product_template.replaceAll('<ID>', product.id);
                p = p.replace('<IMAGE>', product.img);
                p = p.replace('<NAME>', product.name);
                p = p.replace('<PRICE>', product.price);
                p = p.replace('<RATING>', product.rating);
                document.querySelector('#product-list').innerHTML += p;
            }
        });
    }
    // Show all products if search query is empty
    else {
        // Loop through every product
        filteredProducts.forEach(function (product) {
            // Use product template and append product to search results
            var p = product_template.replace('<IMAGE>', product.img);
            p = p.replace('<NAME>', product.name);
            p = p.replace('<PRICE>', product.price);
            p = p.replace('<RATING>', product.rating);
            document.querySelector('#product-list').innerHTML += p;
        });
    }

    // Close table
    document.querySelector('#product-table').innerHTML += '</table>';

}

function search() {
    return true;
}