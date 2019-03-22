## What was the theme goal?

The customer want to give a quick project overview and want to handle it very easy in his CMS.

## The Solution

A single page design with different teaser loops. There are 3 post types to order the projects. We create via functions.php 3 custom post types and switch off every field which is not needed.
The content of every project item was in bullet point form so we decide only use the native WordPress Custom Fields - https://codex.wordpress.org/Custom_Fields
We definend a list of neccessary bullet items which can easy to choose from a dropdown menu. 

## Where is the magic?

loops/content.php - get all content bullets and convert it to HTML data attributes
js/pauleisenach.js - These data attributes are neccessary for the custom JS exapnd function
