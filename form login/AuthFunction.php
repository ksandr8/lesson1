<?php
const USERS = [
    [
        'login' => 'user1',
        'password' => 'password123',
        'role' => 'admin',
        'personal_info' => [
            'phone' => '3809999999',
            'email' => 'user1@mail.com'
        ]
    ],
    [
        'login' => 'user2',
        'password' => 'password234',
        'role' => 'user',
        'personal_info' => [
            'phone' => '38088888888',
            'email' => 'user2@mail.com'
        ]
    ],
];
function login($login, $password)
{
    foreach (USERS as $key => $user) {
        if ($login === $user['login'] && $password === $user['password']) {
            return $user;
        }
    }
    return null;
}
