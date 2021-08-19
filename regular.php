$massive_data = explode("\n", "$massive");
    foreach ($massive_data as $key => $value) {
        // if (mb_stripos($value, 'rs', 0, "UTF-8") === 0) {
        //     $space = mb_strpos($value, '	', 2, "UTF-8");
        //     $rs = substr($value, 0, $space);
        //     $gt = substr($value, strlen($value) - 2);
        //     $massive_arr[$rs] = $gt;
        // }
        preg_match('/^([a-z]+\d+)\s+(\d+|[a-z]+)\s+\d+\s+(--|[a-z]+)/iu', $value, $matches);

        $massive_arr[$matches[1]] = $matches[3];
    }
