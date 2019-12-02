<?php declare(strict_types=1);

namespace App\Controller\Team;

class Delete extends Base
{
    public function __invoke($request, $response, array $args)
    {
        $this->getTeamService()->deleteTeam((int) $args['id']);

        return $response->withHeader('Content-Type', 'application/json')->withStatus(204);
    }
}
