<?php

return function ($site) {
    return $site
        ->page('projects')
        ->children()
        ->listed()
        ->sortBy('year', 'desc')
        ->images()
        ->template('cover');
};