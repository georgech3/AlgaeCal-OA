<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\User;

use App\Domain\User\User;
use App\Domain\User\UserNotFoundException;
use App\Domain\User\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    /**
     * @var User[]
     */
    private $users;

    /**
     * InMemoryUserRepository constructor.
     *
     * @param array|null $users
     */
    public function __construct(array $users = null)
    {
        // workaround: change bill.gates to bill-gates for url accessment
        $this->users = $users ?? [
            1 => new User(1, 'bill-gates', 'Bill', 'Gates'),
            2 => new User(2, 'steve-jobs', 'Steve', 'Jobs'),
            3 => new User(3, 'mark-zuckerberg', 'Mark', 'Zuckerberg'),
            4 => new User(4, 'evan-spiegel', 'Evan', 'Spiegel'),
            5 => new User(5, 'jack-dorsey', 'Jack', 'Dorsey'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        return array_values($this->users);
    }

    /**
     * {@inheritdoc}
     */
    public function findUserOfId(int $id): User
    {
        if (!isset($this->users[$id])) {
            throw new UserNotFoundException();
        }

        return $this->users[$id];
    }

    // find user by name
    public function findUserOfName(string $username): User
    {
        #manipulate with array
        $user = array_search($username,array_column(json_decode(json_encode($this->users),TRUE), 
        'username','id'));
        if (!$user) {
            throw new UserNotFoundException();
        }

        return $this->users[$user];
    }
}
