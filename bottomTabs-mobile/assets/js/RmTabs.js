routemamba.initTabs([
    {
        tabSwitcher: ".tab-switcher", // tab switcher buttons class here.
        initialTab: "HomeTabContainer", // inital tab id here
        activeSwitcherClass: "tab-active", // active tab class here, which class you want to add.
        activeTabClass: "activeTab", // active tab class here, which class you want to add.
        tabs: [ //define tabs info here
            {
                tabRoute: "HomeTabContainer", // tab id where content will load
                content_url: "./app/Tabs/Home.php", // tab component
                preloader: 'loading...', // preloading content
                error_handler: 'error', // error content
            },
            {
                tabRoute: "SearchTabContainer",
                content_url: "./app/Tabs/Search.php",
                preloader: 'loading...',
                error_handler: 'error',
            },
            {
                tabRoute: "CartTabContainer",
                content_url: "./app/Tabs/Cart.php",
                preloader: 'loading...',
                error_handler: 'error',
            },
            {
                tabRoute: "ProfileTabContainer",
                content_url: "./app/Tabs/Profile.php",
                preloader: 'loading...',
                error_handler: 'error',
            },
        ]
    },
]);