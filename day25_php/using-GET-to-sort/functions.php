<?php
    
    function sortMovies($movies, $sort_by, $sort_way = 'asc')
    {
        if (!in_array($sort_by, ['title', 'rating', 'year'])) {
            throw new \InvalidArgumentException('Please only supply title, rating or year as the second argument to '.__FUNCTION__);
        }
        
        if (!in_array($sort_way, ['asc', 'desc'])) {
            throw new \InvalidArgumentException('Please only supply asc or desc as the third argument to '.__FUNCTION__);
        }
        
        usort($movies, function($a, $b) use ($sort_by, $sort_way) {
            if ($a[$sort_by] > $b[$sort_by]) {
                return $sort_way === 'asc' ? 1 : -1;
            } elseif ($a[$sort_by] < $b[$sort_by]) {
                return $sort_way === 'asc' ? -1 : 1;
            } else {
                return 0;
            }
        });
        
        return $movies;
    }