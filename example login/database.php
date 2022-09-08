<?php
const USERS = [
    ['username' => 'admin', 'password' => '123456', 'role' => 'admin'],
    ['username' => 'user1', 'password' => '1234567', 'role' => 'user'],
];
const ARTICLES = [
    [
        'name' => 'Cars',
        'text' => 'SOME TEXT FISH',
        'date' => '01-09-2022',
        'comments' => [
            [
                'username' => 'Ivan',
                'text' => 'SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSs'
            ],
            [
                'username' => 'Vasya',
                'text' => 'OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO'
            ],
        ]
    ],
    [
        'name' => 'Bike',
        'text' => 'SOME TEXT FISH2',
        'date' => '01-06-2021',
        'comments' => [
            [
                'username' => 'Ivan',
                'text' => 'TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT',
            ],
            [
                'username' => 'Vasya',
                'text' => 'FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF',
            ]
        ]
    ],
];

function getUserByUsernameAndPassword(string $username, string $password): ?array
{
    foreach (USERS as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return $user;
        }
    }
    return null;
}

function getAllArticles(): array
{
    return ARTICLES;
}