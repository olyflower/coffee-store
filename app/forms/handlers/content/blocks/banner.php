<?php

function updateBannerBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);

    $blockContent['title'] = $fields['banner_title'] ?? $blockContent['title'];
    $blockContent['subtitle'] = $fields['banner_subtitle'] ?? $blockContent['subtitle'];

    if (isset($fields['banner_link']) && isset($fields['banner_link_text'])) {
        $blockContent['link'] = [
            'href' => $fields['banner_link'],
            'text' => $fields['banner_link_text'],
        ];
    }
    $content = json_encode($blockContent);


    $query = getContentQuery();
    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    executeContentQuery($query, $id);
}
