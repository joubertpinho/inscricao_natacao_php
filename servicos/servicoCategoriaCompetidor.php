<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 07/06/18
 * Time: 00:29
 */
function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $catetorias = [];
    $categorias[] = 'juniores';
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if($idade >= 6 && $idade <= 10)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'juniores')
                {
                   setarMensagemSucesso("O nadador ".$nome. " com " .$idade." anos de idade compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        if($idade >= 11 && $idade <= 14)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                     setarMensagemSucesso("O nadador ".$nome. " com " .$idade." anos de idade compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else if($idade >= 15 && $idade <= 18)
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                     setarMensagemSucesso("O nadador ".$nome. " com " .$idade." anos de idade compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        else
        {
            for($i = 0; $i <= count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                     setarMensagemSucesso("O nadador ".$nome. " com " .$idade." anos de idade compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}