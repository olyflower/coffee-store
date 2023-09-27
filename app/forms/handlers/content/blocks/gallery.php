<?php

function updateGalleryBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);

    $title = $fields['gallery_title'] ?? '';
    $description = $fields['gallery_description'] ?? '';

    $uploadedImages = uploadGalleryImages($_FILES['images'] ?? [], $blockContent['images'], $id);

    $content = json_encode([
        'title' => $title,
        'description' => $description,
        'images' => $uploadedImages,
    ]);

    $query = getContentQuery();
    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    executeContentQuery($query, $id);
}

function uploadGalleryImages(array $newImages, array $existingImages, int $id): array
{
    $uploadedImages = $existingImages;

    if (!empty($_FILES['images']['tmp_name'])) {
        foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
            $error = $_FILES['images']['error'][$key];
            if ($error === 0) {
                $newImageName = time() . '_' . $_FILES['images']['name'][$key];
                $path = IMAGES_DIR . '/' . $newImageName;

                uploadContentImage($tmpName, $path, $id);

                $uploadedImages[] = $newImageName;
            }
        }
    }

    return $uploadedImages;
}

