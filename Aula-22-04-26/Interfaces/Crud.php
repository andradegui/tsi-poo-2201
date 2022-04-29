<?php

interface Crud {

    function criar(array $dados): bool;
    function apagar(int $id): bool;
    function editar(int $id, array $dados): bool;
    function listar(int $id = null): array;
}