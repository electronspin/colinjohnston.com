<?php

return function ($site) {
    return $site
        ->find('journal', 'notes')
        ->children()
        ->listed()
        ->sortBy('date', 'desc')
        ->filterBy('featured', true);
};