<?php
namespace App\UseCase\ExampleUseCase\UseCaseCreate1;

interface Repogitory1Contract {
    function index();
    function create($data);
    function edit($data);
    function delete($data);
}