<?php
declare(strict_types=1);

namespace App\Application\Actions\Video;

use Psr\Http\Message\ResponseInterface as Response;

class ViewVideoAction extends VideoAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $videoId = (string) $this->resolveArg('video_id');
        $video = $this->videoRepository->findVideoOfId($videoId);

        $this->logger->info("Video of Id `${videoId}` was viewed.");
        
        return $this->respondWithData($video);
    }
}
