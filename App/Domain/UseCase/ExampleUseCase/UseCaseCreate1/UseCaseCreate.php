<?php
namespace App\UseCase\ExampleUseCase\UseCaseCreate1;

class UseCase1Create {

    private $module1;
    private $module2;
    private $repo1;
    private $repo2;

    public function __construct(
        Module1Contract $module1, Module2Contract $module2, 
        Repogitory1Contract $repo1, Repogitory2Contract $repo2)
    {
        $this->module1 = $module1;
        $this->module2 = $module2;
        $this->repo1 = $repo1;
        $this->repo2 = $repo2;
    }
    
    public function handle ($data = null) {

        $data1 = $this->module1->execute($data);
        $data2 = $this->module2->execute(null);
        $result = $this->calc($data1, $data2);

        if ($result === true) {
            $this->repo1->create(null);
            $this->repo2->create(null);
        }
    }

    private function calc($data1, $data2) {
        $result = false;
        if ($data1 + $data2 > 2) {
            $result = true;
        }
        return $result;
    }
}