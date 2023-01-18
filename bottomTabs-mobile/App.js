// set server host
// dev
// routemamba.registerServerHost('http://localhost:3000/');

// live
routemamba.registerServerHost('http://projects.routemamba.com/bottomTabs-mobile/');

// set meta content
routemamba.registerMetaUrl('./app/meta/meta.php');

routemamba.register_http_routes([
    {
        method: "GET",
        meta_loader: true,
        content_url: "./app/screens/home.php",
        container: "#root",
        data: {},
        preloader: 'loading...',
        error_content: 'error',
        http_url_change: false,
        http_url: "/"
     },
    {
        method: "GET",
        meta_loader: true,
        content_url: "./app/screens/home.php",
        container: "#root",
        data: {},
        preloader: 'loading...',
        error_content: 'error',
        http_url_change: false,
        http_url: "index.php"
     },
]);

// set  pages headers
routemamba.register_routes_headers([
    {
       content_url: "./app/header-footer/header.php",
       container: "#header_load",
       preloader: 'loading...',
       error_content: 'error',
       http_url: ["/","index.php"]
    },
]);

routemamba.register_routes_footers([
    {
       content_url: "./app/header-footer/footer.php",
       container: "#footer_load",
       preloader: 'loading...',
       error_content: 'error',
       http_url: ["/","index.php"]
    },
]);

routemamba.render();