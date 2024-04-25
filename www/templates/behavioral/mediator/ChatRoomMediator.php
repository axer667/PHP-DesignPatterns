<?php
namespace templates\behavioral\mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}