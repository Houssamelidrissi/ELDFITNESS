
@include('include.Header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('image/ELD.png') }}" type="image/png">
    <title>Fitness Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .product-list {
            float: left;
            width: 60%;
            padding: 20px;
        }

        .cart {
            float: right;
            width: 40%;
            background-color: #f8f9fa;
        }

        .product-item {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 10px;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-item img {
            width: 100%;
            height: auto;
            max-height: 150px;
            /* Set max height for the image */
            object-fit: cover;
        }

        .cart-item {
            border: 1px solid #ddd;
            background-color: #fff;
            padding: 10px;
            margin: 10px;
            /* Set a fixed height for cart items */
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center the content horizontally */
        }

        .cart-item img {
            width: 50%;
            /* Set the image width as needed */
            height: auto;
            object-fit: cover;
            margin-bottom: 10px;
        }

        #img {
            width: 150px;
            padding-left: 50px;
            padding-top: 15px;
        }

        .price {
            text-align: center;
            background-color: red;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 60px;
            margin-left: 60px;
            font-weight: bold;
        }

        .price:hover {
            background-color: white;
            color: red;
        }

        .tt {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container"><br />
        <h1 class="tt">Products:</h1>
        <div class="row">
            <div class="product-list">
                <div class="row row-cols-1 row-cols-md-3 g-4" id="productContainer">

                </div>
            </div>

            <div class="cart">
                <h2 style="padding: 20px;"><u>Shopping Cart</u></h2>
                <p>Appelez le <a href="https://wa.me/212694213304" target="_blank" style="color: white; text-decoration: none;">
                        <span style="color: red; text-decoration:underline">+212 694213304</span></a>
                    pour passer commande<br/> ou via WhatsApp</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const products = [{
                    name: 'WHEY PROTEIN CHOCOLAT 500G',
                    price: 30,
                    image: '/image/protein/p1.avif'
                },
                {
                    name: 'GOLD STANDARD 100% WHEY CHOCOLAT 2,270KG',
                    price: 100,
                    image: '/image/protein/p2.avif'
                },
                {
                    name: 'MASSTECH 2000 VANILLE 2,72 KG',
                    price: 50,
                    image: '/image/protein/p3.avif'
                },
                {
                    name: 'WHEY PROTEIN CHOCOLAT',
                    price: 75,
                    image: '/image/protein/p4.avif'
                },
                {
                    name: 'NITROTECH 100%WHEY GOLD VANILLE 2,27KG',
                    price: 75,
                    image: '/image/protein/p5.avif'
                },
                {
                    name: 'PLATINUM HYDRO WHEY VANILLE1,59 KG',
                    price: 100,
                    image: '/image/protein/p6.avif'
                },
                {
                    name: 'XTEND ORIGINAL MANGUE 30 SERVINGS 420G',
                    price: 40,
                    image: '/image/protein/p10.avif'
                },
                {
                    name: 'XTEND ORIGINAL GRAPE',
                    price: 40,
                    image: '/image/protein/p8.avif'
                },
                {
                    name: 'XTEND ORIGINAL MANGUE 30 SERVINGS 420G',
                    price: 40,
                    image: '/image/protein/p9.avif'
                },
                {
                    name: 'THE CURSE FRUIT PUNCH',
                    price: 35,
                    image: '/image/protein/p7.avif'
                },
                {
                    name: 'HOT BLOOD 3.0 300G - SCITEC NUTRITION',
                    price: 25,
                    image: '/image/protein/p11.avif'
                },
                {
                    name: 'PLATINUM MULTIVITAMINS 90 TABS',
                    price: 25,
                    image: '/image/protein/p12.avif'
                },
                // Add more products as needed
            ];


            const productContainer = document.getElementById('productContainer');
            const cart = document.querySelector('.cart');

            // Dynamically create product cards
            products.forEach(product => {
                const productCard = document.createElement('div');
                productCard.classList.add('col');
                productCard.innerHTML = `
                    <div class="product-item" data-product="whey-protein" data-color="green">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}" id="img">
                        <div class="card-body">
                            <p class="price">$${product.price}</p>
                            <p class="name">${product.name}</p>
                        </div>
                    </div>
                `;
                productContainer.appendChild(productCard);

                // Add click event listener to each product card
                productCard.querySelector('.product-item').addEventListener('click', function() {
                    addToCart(product.name, 'green', product.price, product.image);
                });
            });

            function addToCart(name, color, price, imgSrc) {
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <img src="${imgSrc}" class="card-img-top" alt="${name}" id="img">
                    <div class="cart-body">
                        <p class="cart-product" style='font-weight: bold;'>Product: ${name}</p>
                        <p class="cart-price" style='font-weight: bold;color:green'>$${price}</p>
                    </div>
                `;
                cart.appendChild(cartItem);
            }
        });
    </script>
</body>

</html>