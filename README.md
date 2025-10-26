# KABI TEST Website

A responsive PHP website with Twig templating system that displays a product listing and individual product detail pages.

## Features

- **Product Listing Page**: Displays 5 products in a responsive grid layout
- **Product Detail Page**: Shows individual product information with back navigation
- **Responsive Design**: Optimized for mobile devices (<500px)
- **Modern UI**: Clean design with blue gradient accents and dotted background
- **Apache Compatible**: Works with Apache 2.4 and PHP 7/8

## File Structure

```
/
├── index.php                 # Root redirect to public directory
├── .htaccess                 # Apache rewrite rules
├── composer.json             # PHP dependencies
├── composer.lock             # Dependency lock file
├── public/                   # Public web directory
│   ├── index.php            # Product listing page
│   ├── product.php          # Product detail page
│   ├── css/
│   │   └── styles.css       # Main stylesheet
│   └── js/
│       └── main.js          # JavaScript (if needed)
└── templates/               # Twig templates
    ├── base.html.twig       # Base template
    ├── index.html.twig      # Product listing template
    └── product.html.twig    # Product detail template
```

## Installation

1. Ensure Apache 2.4 with PHP 7+ is running
2. Install Composer dependencies:
   ```bash
   composer install
   ```
3. Place files in web root directory
4. Access via web browser

## Usage

- **Product Listing**: Visit `/` or `/public/index.php`
- **Product Detail**: Click "VEČ O IZDELKU" buttons or visit `/public/product.php?id=X`

## Design Specifications

- **Background**: Light gray (#F5F5F5) with dotted texture
- **Content Width**: 934px maximum
- **Margins**: 150px left, 30px top
- **Colors**: Blue gradients (#4A90E2 to #7BB3F0)
- **Typography**: Arial sans-serif
- **Mobile**: Responsive design for screens <500px

## Technologies Used

- PHP 7/8
- Twig Template Engine
- CSS3 with Flexbox/Grid
- Apache 2.4 with .htaccess
