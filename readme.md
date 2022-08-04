# Eurofurence 27 Website

Built 07.07.2022 - 04.08.2022

## Requirements

* PHP >= 7.4
* Apache Web Server + modrewrite
* Docker

## Installation

* Navigate a cli to the root directory and run `docker-compose up -d`.

## Usage

* To use the static site generation feature, enable "staticOut" option in core.config.json.
* To automate an export of all pages, call any page with ?export attached to the url.