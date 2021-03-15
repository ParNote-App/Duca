<?php

function migrationHandler_2_3()
{
    global $config;

    //Index page
    $config['config-version'] = 3;
    $config['name-surname'] = "Michael Stonebridge";
    $config['welcome-text'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua!";
    $config['user-mail'] = "michaelstonebridge@mail.com";
    $config['tab-title'] = "Michael Stonebridge - Software Developer";
    $config['facebook-address'] = "facebook.com";
    $config['github-address'] = "github.com";
    $config['linkedin-address'] = "linkedin.com";
    $config['github-address-of-this-website'] = "githubrepo.com";
    $config["product-year-and-name-surname"] = "2021 Michael Stonebridge";
    $config['job-title'] = "Software Developer";
    $config['description'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


    $config['interests'] = [
        [
            'title' => "Front-End",
            'image-url' => "/assets/img/frontendIcon.png"
        ],
        [
            'title' => "Back-End",
            'image-url' => "/assets/img/backendIcon.png"
        ],
    ];

    $config['projects'] = [
        [
            'title' => "Project 1",
            'link' => "linkoftheproject.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt",
        ],

        [
            'title' => "Project 2",
            'link' => "linkoftheproject.com",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt",
        ]
    ];

    $config['skills'] = [
        [
            'title' => "Python",
            'image-url' => "/assets/img/python.png"
        ],
        [
            'title' => "Kotlin",
            'image-url' => "/assets/img/kotlin.png"
        ],
        [
            'title' => "MySQL",
            'image-url' => "/assets/img/mysql.png"
        ],
        [
            'title' => "GIT",
            'image-url' => "/assets/img/git.png"
        ],

    ];

    $config['social-links'] = [
        [
            'url' => "facebook.com",
            'image-url' => "/assets/img/Facebook_2.png"
        ],

        [
            'url' => "github.com",
            'image-url' => "/assets/img/Github_2.png"
        ],

        [
            'url' => "linkedin.com",
            'image-url' => "/assets/img/Linkedin_2.png"
        ]
    ];

    $config['cv'] = [
        "url" => "cvwebsite.com/cv.pdf"
    ];

    $config['404-tag'] = "404!";

    $config['404-error'] = "This is not the web page you are looking for.";

}