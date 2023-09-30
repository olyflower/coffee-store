<?php

function updateAboutBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);



    $content = json_encode($blockContent);


    $query = getContentQuery();
    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    executeContentQuery($query, $id);
}
