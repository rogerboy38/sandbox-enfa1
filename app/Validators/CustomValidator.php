<?php namespace Enfa\Validators;

use Validator;

class CustomValidator extends Validator {

    public function validateCpf ($attribute, $cpf, $parameters){
        // Verifica se um número foi informado
        if(empty($cpf)) {return false;}

        // Elimina possivel mascara
        $cpf = str_replace(array(".","/","-"),"",$cpf);

        // Verifica se o numero de digitos informados é igual a 11
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            return false;
         // Calcula os digitos verificadores para verificar se o
         // CPF é válido
        } else {
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }

    function validatePhone ($attribute, $phone, $parameters){
      // Verifica se um número foi informado
      if(empty($phone)) {return false;}

      // Elimina possivel mascara
      $phone = str_replace(array(".","/","-"),"",$phone);

      // Verifica se o numero de digitos informados é igual a 11
      if (strlen($phone) != 11) {
          return false;
      }
      // Verifica se nenhuma das sequências invalidas abaixo
      // foi digitada. Caso afirmativo, retorna falso
      else if ($phone == '00000000000' ||
          $cpf == '11111111111' ||
          $cpf == '22222222222' ||
          $cpf == '33333333333' ||
          $cpf == '44444444444' ||
          $cpf == '55555555555' ||
          $cpf == '66666666666' ||
          $cpf == '77777777777' ||
          $cpf == '88888888888' ||
          $cpf == '99999999999') {
          return false;
       // Calcula os digitos verificadores para verificar se o
       // CPF é válido
      } else {
          for ($t = 9; $t < 11; $t++) {
              for ($d = 0, $c = 0; $c < $t; $c++) {
                  $d += $cpf{$c} * (($t + 1) - $c);
              }
              $d = ((10 * $d) % 11) % 10;
              if ($phone{$c} != $d) {
                  return false;
              }
          }
          return true;
      }
    }


}
