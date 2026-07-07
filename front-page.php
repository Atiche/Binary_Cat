<?php
/**
 * Front page.
 *
 * @package VkSmartService
 */

get_header();

component('Hero', 'sections', array(), 'main');
component('Intro', 'sections', array(), 'main');
component('Services', 'sections', array(), 'main');
component('About', 'sections', array(), 'main');
component('Advantages', 'sections', array(), 'main');

get_footer();
