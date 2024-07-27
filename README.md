# Custom ACF Block

This repository contains the code for a custom block created using Advanced Custom Fields (ACF). This block was developed following the [ACF guide on creating your first block](https://www.advancedcustomfields.com/resources/create-your-first-acf-block/).

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)

## Introduction

This project demonstrates how to create a custom block using ACF and WordPress. The block is designed to be easily customizable and extendable.

## Features

- Easy integration with WordPress
- Customizable fields using ACF
- Simple to extend and modify

## Installation

To use this custom block in your WordPress site, follow these steps:

1. Clone the repository into your WordPress theme directory:

    ```bash
    git clone https://github.com/alihs/gutenberg-acf-demo.git
    ```

2. Ensure that you have the ACF Pro plugin installed and activated.

## Usage

To use the custom block, simply include the child theme provided in this repository and load the `acf-block.json` file into ACF:

1. Activate the child theme from your WordPress admin panel.
2. In the WordPress admin panel, go to ACF and import the `acf-block.json` file.
3. The custom block should now be available for use in the Gutenberg editor.

That's it! You should now see your custom block available in the Gutenberg editor, ready to be added to your pages and posts.
