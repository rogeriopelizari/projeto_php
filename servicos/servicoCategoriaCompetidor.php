<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';  
    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();  
        if($idade >= 6 && $idade <= 12) 
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    setarMensagemSucesso( "O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }       
            }
        }
        else if ($idade >= 13 && $idade <= 19)
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'adolescente')
                {
                    setarMensagemSucesso( "O nadador ".$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }        
            }
        }    
        else 
        {
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso( "O nadador ".$nome. " compete na categoria " .$categorias[$i]);
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

