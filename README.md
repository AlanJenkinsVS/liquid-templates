# Liquid Templates
Exploring use of liquid templates for next-gen templates

## Up and Running with Docker
Quickest way to get this up and running is to use Docker with Nginx and PHP

You can grab that here:
* https://github.com/AlanJenkinsVS/docker-nginx-php

## Setup

Grab the docker nginx composer file.
`git clone https://github.com/AlanJenkinsVS/docker-nginx-php.git`

Install docker images and spin up the container
`docker-compose up`

Clear out the current /code folder
`rm -rf code`

Clone this repo into a /code folder
`git clone https://github.com/AlanJenkinsVS/liquid-templates.git code`

`cd code`

Grab php dependencies
`composer install`

Should be able to access your site at [http://localhost:8080](http://localhost:8080)
