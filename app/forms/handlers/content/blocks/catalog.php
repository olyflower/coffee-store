<?php

function updateCatalogBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);

    $blockContent['title'] = $fields['catalog_title'] ?? $blockContent['title'];
    $blockContent['description'] = $fields['catalog_description'] ?? $blockContent['description'];

    $content = json_encode($blockContent);


    $query = getContentQuery();
    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    executeContentQuery($query, $id);
}