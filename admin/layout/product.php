<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="./assets/icons/admin.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การจัดการข้อมูลสินค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap');

        .events-section {
            margin-bottom: 2rem;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 900;
        }

        .card-body .img-fluid {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }
        .view-all-btn {
            float: right;
            margin-top: -40px; /* Adjust as needed */
        }
        .new-product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: green;
            color: white;
            padding: 5px 5px;
            font-size: 0.9rem;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>

</head>

<body>

    <div class="container">
        <h1 class="text-center mb-4 fw-bold">ผลิตภันฑ์</h1>
        <hr>
        <div class="row gy-5 justify-content-center">
            <div class="col-lg-12 events-section" id="products-container">
                <!-- Product will be dynamically added here -->
            </div>
        </div>
        <a href="../../admin/manage/manage_product.php" class="btn btn-primary view-all-btn">ดูผลิตภัณฑ์ทั้งหมด</a>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch('http://localhost:8000/products')
                .then(response => response.json())
                .then(data => {
                    const productsContainer = document.getElementById('products-container');
                    const product = data[0]; // Get the first product

                    const productCard = document.createElement('div');
                    productCard.classList.add('card', 'mb-3');

                    // Check if product.image exists and use it, otherwise use a default icon
                    const imageUrl = product.image ? `../../uploads/${product.image}` : '../../img/no_image.png';

                    productCard.innerHTML = `
                        <div class="new-product-badge">ผลิตภัณฑ์ใหม่</div>
                        <div class="card-body">
                            <img src="${imageUrl}" alt="product image" class="img-fluid mb-3">
                            <h5 class="card-title">${product.title}</h5>
                            <p class="card-text">${product.content}</p>
                        `;

                    productsContainer.appendChild(productCard);
                })
                .catch(error => console.error('Error fetching products:', error));
        });

        function confirmDelete(productId) {
            if (confirm('Are you sure you want to delete this product?')) {
                deleteProduct(productId);
            }
        }

        function deleteProduct(productId) {
            fetch(`http://localhost:8000/product_delete?id=${productId}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    alert('Product deleted successfully!');
                    location.reload(); // Reload the page to reflect the changes
                })
                .catch(error => {
                    console.error('Error deleting product:', error);
                    alert('Failed to delete product: ' + error.message);
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
