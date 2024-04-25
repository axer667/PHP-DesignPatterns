<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\observer\JobPost;
use templates\behavioral\observer\JobPostings;
use templates\behavioral\observer\JobSeeker;

// Создаём подписчиков
$johnDoe = new JobSeeker('John Doe');
$janeDoe = new JobSeeker('Jane Doe');

// Создаём публикатора и прикрепляем подписчиков
$jobPostings = new JobPostings();
$jobPostings->attach($johnDoe);
$jobPostings->attach($janeDoe);

// Добавляем новую вакансию и смотрим, будут ли уведомлены подписчики
$jobPostings->addJob(new JobPost('Software Engineer'));

// Output
// Hi John Doe! New job posted: Software Engineer
// Hi Jane Doe! New job posted: Software Engineer