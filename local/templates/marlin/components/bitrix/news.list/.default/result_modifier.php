<?php 

// Получим массив ID пользователей и массив ID категорий
foreach ($arResult['ITEMS'] as $item) {
    $ids[] = $item['PROPERTIES']['AUTHOR']['VALUE'];
    $category_ids[] = $item['IBLOCK_SECTION_ID']; 
}

// Получим пользователей из БД
$rsUsers = CUser::GetList(
    ($by='id'), 
    ($order='asc'), 
    ['ID' => implode(' | ', $ids)]
);

// Сформируем массив вида ID => UserName
while($user = $rsUsers->Fetch()) {
    $userID = $user['ID'];
    $userName = !empty($user['NAME']) ? $user['NAME'] : $user['LOGIN'];
    $users[$userID] = ucfirst($userName);
}

// Получим категории из БД
$rsSections = CIBlockSection::GetList(
    ($by='id'), 
    ($order='asc'), 
    ['ID' => implode(' | ', $category_ids)]
);

// Сформируем массив вида ID => [CategoryName, CategoryURL]
while($category = $rsSections->Fetch()) {
    $categories[$category['ID']] = [
        'NAME' => $category['NAME'],
        'URL'  => '/' . $category['CODE'] . '/',
    ];
}

// Добавим в $arResult
foreach ($arResult['ITEMS'] as &$item) {
    $userID = $item['PROPERTIES']['AUTHOR']['VALUE'];
    $item['AUTHOR'] = $users[$userID];

    $categoryID = $item['IBLOCK_SECTION_ID'];
    $category = $categories[$categoryID];
    
    foreach ($category as $key => $val) {
        $item['CATEGORY'][$key] = $val;
    }
}
?>
