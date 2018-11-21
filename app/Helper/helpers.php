<?php
function slugToTitle($text) // Converts $title to Title Case, and returns the result.
{
    // Our array of 'small words' which shouldn't be capitalised if
    // they aren't the first word. Add your own words to taste.
    $smallwords = ['of', 'a', 'the', 'and', 'an', 'or', 'nor', 'but', 'is', 'if', 'then', 'else', 'when', 'at', 'from', 'by', 'on', 'off', 'for', 'in', 'out', 'over', 'to', 'into', 'with'];
    $words = explode('-', $text);
    foreach ($words as $key => $word) {
        if ($key == 0 || !in_array($word, $smallwords)) {
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

