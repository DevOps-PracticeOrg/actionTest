<?php
namespace App\UseCase\ExampleUseCase\UseCaseCreate1;

interface Repogitory2Contract {
    function index();
    function create($data);
    function edit($data);
    function delete($data);
}