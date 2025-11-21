<?php

namespace Rival\PlutoSearch;

class Search
{
    public static function find($keyword)
    {
        return "🔍 Sedang mencari data dengan kata kunci: <b>" . htmlspecialchars($keyword) . "</b> menggunakan Pluto Search Engine v1.0";
    }
}