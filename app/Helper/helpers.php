<?php
function slugToTitle($text)
{
    // Our array of 'small words' which shouldn't be capitalised if
    // they aren't the first word. Add your own words to taste.
    $smallWords = ['of', 'a', 'the', 'and', 'an', 'or', 'nor', 'but', 'is', 'if',
        'then', 'else', 'when', 'at', 'from', 'by', 'on', 'off', 'for', 'in', 'out', 'over', 'to', 'into', 'with'];

    $words = explode('-', $text);
    foreach ($words as $key => $word) {
        if ($key == 0 || !in_array($word, $smallWords)) {
            $words[$key] = ucfirst($word);
        }
    }

    return str_replace('-', ' ', implode(' ', $words));
}

function breadcrumb($bread, $crumbs): array
{
    $breadcrumb = array_merge($bread, $crumbs);
    return $breadcrumb;
}

