
<?php
function validaNome(string $nome) : bool 
{
    if(empty($nome))
    {
        setarMensagemErro( 'O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }
    else if(strlen($nome) < 3 )
    {
        setarMensagemErro( 'O nome deve contar 3 ou mais caracteres');
        return false;
    }
    else if(strlen($nome) > 20)
    {
        setarMensagemErro( 'O nome é muito extenso');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro( 'Informe um número para a Idade');
        return false;
    }
    return true;
}



