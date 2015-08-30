<?php

Breadcrumbs::register('courses_learning', function($breadcrumbs) {
    $breadcrumbs->push('Cursos', route('dashboard.learning'));
});

Breadcrumbs::register('course_learning', function($breadcrumbs, $course) {
    $breadcrumbs->parent('courses_learning');
    $breadcrumbs->push($course->name, route('learning.course.show', $course->id));
});
