<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;

class ViewUserAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $userName = (int) $this->resolveArg('username');
        $user = $this->userRepository->findUserOfId($userName);

        $this->logger->info("User of id `${userName}` was viewed.");

        return $this->respondWithData($user);
    }
}
