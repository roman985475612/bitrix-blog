<?php 

foreach ($arResult['ITEMS'] as $item) {
    $userID = $item['PROPERTIES']['AUTHOR']['VALUE'];
    $ids[] = $userID;
}

$rsUsers = CUser::GetList(
    ($by='id'), 
    ($order='asc'), 
    ['ID' => implode(' | ', $ids)]
);

while($user = $rsUsers->Fetch()) {
    $userID = $user['ID'];
    $userName = !empty($user['NAME']) ? $user['NAME'] : $user['LOGIN'];
    $arUsers[$userID] = ucfirst($userName);
}

foreach ($arResult['ITEMS'] as &$item) {
    $userID = $item['PROPERTIES']['AUTHOR']['VALUE'];
    $item['AUTHOR'] = $arUsers[$userID];
}
?>
